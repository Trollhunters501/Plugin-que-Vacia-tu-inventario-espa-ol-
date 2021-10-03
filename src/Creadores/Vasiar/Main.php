<?php

namespace Creadores\Vasiar;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginManager;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\player\Player;
use pocketmine\player\Server;
use pocketmine\item\Item;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getLogger()->info("Cargando...");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Cargado!");
    }

    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch($command->getName()){
            case "vi":
                $sender->sendMessage("§b[§aCreadores§b]§a Has vaciado tu inventario!");
                $sender->getPlayer()->getinventory()->clearALL();
                $sender->getPlayer()->removeALLEffects();
                return true;
            default:
                return false;
        }
    }
}
