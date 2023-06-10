<?php

namespace NexusCore\Core\Networking\Packets;

use NexusCore\Core\Networking\StreamWrapper;

class EntityActionPacket {
	const id = 0x13;

	public $eid;
	public $action;

	public function readPacket(StreamWrapper $StreamWrapper) {
		$this->eid = $StreamWrapper->readInt();
		$this->action = $StreamWrapper->readByte();
	}
}
