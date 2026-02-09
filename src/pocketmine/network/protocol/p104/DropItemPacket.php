<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;

class DropItemPacket extends DataPacket
{
	const NETWORK_ID = Info102::DROP_ITEM_PACKET;

	public $type;
	public $item;

	public function decode(){
		$this->type = $this->getByte();
		$this->item = $this->getSlot();
	}

	public function encode(){

	}

}