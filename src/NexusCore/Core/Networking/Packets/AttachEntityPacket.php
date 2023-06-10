<?php

namespace NexusCore\Core\Networking\Packets;

use NexusCore\Core\Networking\StreamWrapper;

class AttachEntityPacket {
	const id = 0x27;
	public $entity_id;
	public $vehicle_id;

	public function __construct($entity_id, $vehicle_id) {
		$this->entity_id = $entity_id;
		$this->vehicle_id = $vehicle_id;
	}

	public function writePacket(StreamWrapper $StreamWrapper) {
		$p = $StreamWrapper->writeByte(self::id) .
		$StreamWrapper->writeInt($this->entity_id) .
		$StreamWrapper->writeInt($this->vehicle_id);

		return $StreamWrapper->writePacket($p);
	}
}
