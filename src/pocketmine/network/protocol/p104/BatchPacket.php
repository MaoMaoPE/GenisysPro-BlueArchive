<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;

class BatchPacket extends DataPacket
{
	const NETWORK_ID = Info102::BATCH_PACKET;

	public $payload;

	public function decode(){
		$this->payload = $this->getString();
	}

	public function encode(){
		$this->reset();
		$this->putString($this->payload);
	}

}