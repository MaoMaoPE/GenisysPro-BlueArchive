<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;

class LevelSoundEventPacket extends DataPacket
{
	const NETWORK_ID = Info102::INVENTORY_ACTION_PACKET;

	public $unknown;
	public $item;

	public function decode(){

	}

	public function encode(){
		$this->putUnsignedVarInt($this->unknown);
		$this->putSlot($this->item);
	}
}