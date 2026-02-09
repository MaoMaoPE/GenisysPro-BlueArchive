<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;


class InteractPacket extends DataPacket
{
	const NETWORK_ID = Info102::INTERACT_PACKET;

	const ACTION_RIGHT_CLICK = 1;
	const ACTION_LEFT_CLICK = 2;
	const ACTION_LEAVE_VEHICLE = 3;
	const ACTION_MOUSEOVER = 4;

	public $action;
	public $eid;
	public $target;

	public function decode(){
		$this->action = $this->getByte();
		$this->target = $this->getEntityId();
	}

	public function encode(){
		$this->reset();
		$this->putByte($this->action);
		$this->putEntityId($this->target);
	}

}