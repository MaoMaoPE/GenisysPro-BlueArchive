<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use \pocketmine\network\protocol\Info102;

class AddItemPacket extends DataPacket
{
	const NETWORK_ID = Info102::ADD_ITEM_PACKET;

	public $item;

	public function decode(){

	}

	public function encode(){
		$this->reset();
		$this->putSlot($this->item);
	}
}