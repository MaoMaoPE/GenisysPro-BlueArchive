<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;

class ContainerSetDataPacket extends DataPacket
{
	const NETWORK_ID = Info102::CONTAINER_SET_DATA_PACKET;

	public $windowid;
	public $property;
	public $value;

	public function decode(){

	}

	public function encode(){
		$this->reset();
		$this->putByte($this->windowid);
		$this->putVarInt($this->property);
		$this->putVarInt($this->value);
	}

}