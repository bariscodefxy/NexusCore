<?php

namespace HHVMCraft\Core\Networking\Packets;

class EntityVelocityPacket {
	const id = "1c";
	public $entityId;
	public $xVel;
	public $yVel;
	public $zVel;

	public function __construct($entityId, $xVel, $yVel, $zVel) {
		$this->entityId = $entityId;
		$this->xVel = $xVel;
		$this->yVel = $yVel;
		$this->zVel = $zVel;
	}

	public function writePacket($StreamWrapper) {
		$str = $StreamWrapper->writeUInt8(self::id).
			$StreamWrapper->writeInt($this->entityId).
			$StreamWrapper->writeUInt16($this->xVel).
			$StreamWrapper->writeUInt16($this->yVel).
			$StreamWrapper->writeUInt16($this->zVel);

		return $StreamWrapper->writePacket($str);
	}
}
