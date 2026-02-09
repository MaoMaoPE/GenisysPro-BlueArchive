<?php

namespace pocketmine\network\protocol\p104;

#include <rules/DataPacket.h>
use \pocketmine\network\protocol\Info102;
class AvailableCommandsPacket extends DataPacket
{
	const NETWORK_ID = Info102::AVAILABLE_COMMANDS_PACKET;

	public $commands; //JSON-encoded command data
	public $unknown;

	public function decode(){

	}

	public function encode(){
		$this->reset();
		$this->putString($this->commands);
		$this->putString($this->unknown);
	}

}