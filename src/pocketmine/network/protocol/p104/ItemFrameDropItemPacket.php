<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;


class ItemFrameDropItemPacket extends DataPacket
{
	const NETWORK_ID = Info102::ITEM_FRAME_DROP_ITEM_PACKET;

	public $x;
	public $y;
	public $z;

	public function decode(){
		$this->getBlockCoords($this->x, $this->y, $this->z);
	}

	public function encode(){

	}

}