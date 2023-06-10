<?php

namespace NexusCore\Core\Networking\Packets;

use NexusCore\Core\Networking\StreamWrapper;

class PlayerGroundedPacket {
	const id = 0x0A;
	public $onGround;

	public function readPacket(StreamWrapper $StreamWrapper) {
		$this->onGround = $StreamWrapper->readBool();
	}
}
