<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\network\protocol\Info102;


class FullChunkDataPacket extends DataPacket
{
	const NETWORK_ID = Info102::FULL_CHUNK_DATA_PACKET;

	public $chunkX;
	public $chunkZ;
	public $data;

	public function decode(){

	}

	public function encode(){
		$this->reset();
		$this->putVarInt($this->chunkX);
		$this->putVarInt($this->chunkZ);
		$this->putString($this->data);
	}

}