<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;

class AnimatePacket extends DataPacket
{
	const NETWORK_ID = Info102::ANIMATE_PACKET;

	public $action;
	public $eid;

	public function decode(){
		$this->action = $this->getVarInt();
		$this->eid = $this->getEntityId();
	}

	public function encode(){
		$this->reset();
		$this->putVarInt($this->action);
		$this->putEntityId($this->eid);
	}

}