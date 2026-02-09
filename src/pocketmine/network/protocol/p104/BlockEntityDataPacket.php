<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;

class BlockEntityDataPacket extends DataPacket
{
	const NETWORK_ID = Info102::BLOCK_ENTITY_DATA_PACKET;

	public $x;
	public $y;
	public $z;
	public $namedtag;

	public function decode(){
		$this->getBlockCoords($this->x, $this->y, $this->z);
		$this->namedtag = $this->get(true);
	}

	public function encode(){
		$this->reset();
		$this->putBlockCoords($this->x, $this->y, $this->z);
		$this->put($this->namedtag);
	}

}