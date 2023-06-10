<?php

namespace NexusCore\Core\Networking\Packets;

use NexusCore\Core\Networking\StreamWrapper;

class HoldingChangePacket {
	const id = 0x10;
	public $slotid;

	public function readPacket(StreamWrapper $StreamWrapper) {
		$this->slotid = $StreamWrapper->readShort();
	}
}
