<?php

namespace NexusCore\Core\Networking\Packets;

use NexusCore\Core\Networking\StreamWrapper;

class HandshakePacket {
	const id = 0x02;
	public $username;

	public function __construct($username = "") {
		$this->username = $username;
	}

	public function readPacket(StreamWrapper $StreamWrapper) {
		$this->username = $StreamWrapper->readString16();
	}
}
