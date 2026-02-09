<?php

namespace pocketmine\network\protocol\p104;


#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;

class AddHangingEntityPacket extends DataPacket
{
	const NETWORK_ID = Info102::ADD_HANGING_ENTITY_PACKET;

	public $entityUniqueId;
	public $entityRuntimeId;
	public $x;
	public $y;
	public $z;
	public $unknown;

	public function decode(){

	}

	public function encode(){
		$this->reset();
		$this->putEntityId($this->entityUniqueId);
		$this->putEntityId($this->entityRuntimeId);
		$this->putBlockCoords($this->x, $this->y, $this->z);
		$this->putVarInt($this->unknown);
	}

}