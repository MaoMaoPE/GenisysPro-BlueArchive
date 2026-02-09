<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>

use pocketmine\item\Item;
use pocketmine\network\protocol\Info102;

class ContainerSetSlotPacket extends DataPacket
{
	const NETWORK_ID = Info102::CONTAINER_SET_SLOT_PACKET;

	public $windowid;
	public $slot;
	/** @var Item */
	public $item;
	public $hotbarSlot;
	public $unknown;

	public function decode(){
		$this->windowid = $this->getByte();
		$this->slot = $this->getVarInt();
		$this->hotbarSlot = $this->getVarInt();
		$this->item = $this->getSlot();
		$this->unknown = $this->getByte();
	}

	public function encode(){
		$this->reset();
		$this->putByte($this->windowid);
		$this->putVarInt($this->slot);
		$this->putVarInt($this->hotbarSlot);
		$this->putSlot($this->item);
		$this->putByte($this->unknown);
	}

}