<?php

namespace NexusCore\Core\Networking\Packets;

use NexusCore\Core\Networking\StreamWrapper;

class UpdateSignPacket {
	const id = 0x82;
	public $x;
	public $y;
	public $z;
	public $text1;
	public $text2;
	public $text3;
	public $text4;

	public function __construct($x, $y, $z, $text1, $text2, $text3, $text4) {
		$this->x = $x;
		$this->y = $y;
		$this->z = $z;
		$this->text1 = $text1;
		$this->text2 = $text2;
		$this->text3 = $text3;
		$this->text4 = $text4;
	}

	public function readPacket(StreamWrapper $StreamWrapper) {
		$this->x = $StreamWrapper->readInt();
		$this->y = $StreamWrapper->readShort();
		$this->z = $StreamWrapper->readInt();
		$this->text1 = $StreamWrapper->readString16();
		$this->text2 = $StreamWrapper->readString16();
		$this->text3 = $StreamWrapper->readString16();
		$this->text4 = $StreamWrapper->readString16();
	}

	public function writePacket(StreamWrapper $StreamWrapper) {
		$str = $StreamWrapper->writeByte(self::id) .
			$StreamWrapper->writeInt($this->x) .
			$StreamWrapper->writeShort($this->y) .
			$StreamWrapper->writeInt($this->z) .
			$StreamWrapper->writeString16WithStringLengthPrefix($this->text1) .
			$StreamWrapper->writeString16WithStringLengthPrefix($this->text2) .
			$StreamWrapper->writeString16WithStringLengthPrefix($this->text3) .
			$StreamWrapper->writeString16WithStringLengthPrefix($this->text4);

		return $StreamWrapper->writePacket($str);
	}
}
