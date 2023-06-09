<?php

namespace NexusCore\Core\Networking\Packets;

use NexusCore\Core\Networking\StreamWrapper;

class HandshakeResponsePacket {
	const id = 0x02;
	public $connectionHash;

	public function __construct($connectionHash = "-") {
		$this->connectionHash = $connectionHash;
	}

	public function writePacket(StreamWrapper $StreamWrapper) {
		$str = $StreamWrapper->writeByte(self::id) .
		$StreamWrapper->writeString16WithStringLengthPrefix($this->connectionHash);

		return $StreamWrapper->writePacket($str);
	}
}
