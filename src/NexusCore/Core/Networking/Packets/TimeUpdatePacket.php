<?php

namespace NexusCore\Core\Networking\Packets;

use NexusCore\Core\Networking\StreamWrapper;

class TimeUpdatePacket {
	const id = 0x04;
	public $time;

	public function __construct($time) {
		$this->time = $time;
	}

	public function writePacket(StreamWrapper $StreamWrapper) {
		$str = $StreamWrapper->writeByte(self::id) .
		$StreamWrapper->writeLong($this->time);

		return $StreamWrapper->writePacket($str);
	}
}
