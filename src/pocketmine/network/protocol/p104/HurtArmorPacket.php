<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;


class HurtArmorPacket extends DataPacket
{
	const NETWORK_ID = Info102::HURT_ARMOR_PACKET;

	public $health;

	public function decode(){

	}

	public function encode(){
		$this->reset();
		$this->putVarInt($this->health);
	}
}