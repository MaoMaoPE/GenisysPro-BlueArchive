<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;

class ChunkRadiusUpdatedPacket extends DataPacket
{
	const NETWORK_ID = Info102::CHUNK_RADIUS_UPDATED_PACKET;

	public $radius;

	public function decode(){

	}

	public function encode(){
		$this->reset();
		$this->putVarInt($this->radius);
	}
}