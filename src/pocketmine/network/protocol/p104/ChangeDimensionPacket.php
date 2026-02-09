<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;

class ChangeDimensionPacket extends DataPacket
{
	const NETWORK_ID = Info102::CHANGE_DIMENSION_PACKET;

	const DIMENSION_NORMAL = 0;
	const DIMENSION_NETHER = 1;

	public $dimension;

	public $x;
	public $y;
	public $z;
	public $unknown; //bool

	public function decode(){

	}

	public function encode(){
		$this->reset();
		$this->putVarInt($this->dimension);
		$this->putVector3f($this->x, $this->y, $this->z);
		$this->putBool($this->unknown);
	}

}