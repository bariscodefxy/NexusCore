<?php

namespace NexusCore\Core\Networking\Packets;

use NexusCore\Core\Networking\StreamWrapper;

class SoundEffectPacket {
	const id = 0x3D;
	public $effectId;
	public $x;
	public $y;
	public $z;
	public $soundData;

	public function __construct($effectId, $x, $y, $z, $soundData) {
		$this->effectId = $effectId;
		$this->x = $x;
		$this->y = $y;
		$this->z = $z;
		$this->soundData = $soundData;
	}

	public function writePacket(StreamWrapper $StreamWrapper) {
		$str = $StreamWrapper->writeByte(self::id) .
			$StreamWrapper->writeInt($this->effectId) .
			$StreamWrapper->writeInt($this->x) .
			$StreamWrapper->writeByte($this->y) .
			$StreamWrapper->writeInt($this->z) .
			$StreamWrapper->writeInt($this->soundData);

		return $StreamWrapper->writePacket($str);
	}
}
