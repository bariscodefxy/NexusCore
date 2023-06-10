<?php

namespace NexusCore\Core\Networking\Packets;

use NexusCore\Core\Networking\StreamWrapper;

class SpawnPositionPacket {
	const id = 0x06;
	public $x;
	public $y;
	public $z;

	public function __construct($x, $y, $z) {
		$this->x = $x;
		$this->y = $y;
		$this->z = $z;
	}

	public function writePacket(StreamWrapper $StreamWrapper) {
		$str = $StreamWrapper->writeByte(self::id) .
		$StreamWrapper->writeInt($this->x) .
		$StreamWrapper->writeInt($this->y) .
		$StreamWrapper->writeInt($this->z);

		return $StreamWrapper->writePacket($str);
	}
}
