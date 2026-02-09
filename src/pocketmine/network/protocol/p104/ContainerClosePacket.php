<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;

class ContainerClosePacket extends DataPacket
{
	const NETWORK_ID = Info102::CONTAINER_CLOSE_PACKET;

	public $windowid;

	public function decode(){
		$this->windowid = $this->getByte();
	}

	public function encode(){
		$this->reset();
		$this->putByte($this->windowid);
	}

}