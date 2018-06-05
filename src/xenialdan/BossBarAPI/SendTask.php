<?php

namespace xenialdan\BossBarAPI;

use pocketmine\plugin\Plugin;
use pocketmine\scheduler\Task;

class SendTask extends Task{

	public function __construct(Plugin $owner){
		$this->owner = $owner;
	}

	public function onRun(int $currentTick){
		$this->owner->sendBossBar();
	}

	public function cancel(){
		$this->getHandler()->cancel();
	}
}