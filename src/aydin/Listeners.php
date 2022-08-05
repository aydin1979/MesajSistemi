<?php

namespace aydin;

use pocketmine\{
  player\Player,
  Server,
  event\player\PlayerChatEvent,
  plugin\PluginBase,
  event\Listener,
};

class Listeners extends PluginBase implements Listener{
  public function onEnable():void{
    $this->getLogger()->info("Message Event Aktif");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onChat(PlayerChatEvent $event){
    $player = $event->getPlayer();
    $message = $event->getMessage();
    if(substr($message, 0, 1) == "!"){
      $message = substr($message,1);
    }
   if(strtolower($message) == "sa"){
     $event->setMessage("Selamun aleyküm");
   }elseif(strtolower($message) == "as"){
     $event->setMessage("Aleyküm selam");
   }elseif(strtolower($message) == "as hg"){
     $event->setMessage("Aleyküm selam, hoş geldin");
   }elseif(strtolower($message) == "ashg"){
     $event->setMessage("Aleyküm selam, hoş geldin");
   }elseif(strtolower($message) == "hg"){
     $event->setMessage("Hoş geldin");
   }elseif(strtolower($message) == "hb"){
     $event->setMessage("Hoş bulduk");
   }elseif(strtolower($message) == "ho"){
     $event->setMessage("Hayırlı olsun");
   }elseif(strtolower($message) == "h.o"){
     $event->setMessage("Hayırlı olsun");
   }elseif(strtolower($message) == "as"){
     $event->setMessage("Aleyküm selam");
   }elseif(strtolower($message) == "eyw"){
     $event->setMessage("Eyvallah");
   }elseif(strtolower($message) == "eyw"){
     $event->setMessage("Eyvallah");
   }elseif(strtolower($message) == "g.o"){
     $event->setMessage("Geçmiş olsun");
   }elseif(strtolower($message) == "kg"){
     $event->setMessage("Kolay gelsin");
   }elseif(strtolower($message) == "bb"){
       $event->sendMessage("Güle Güle");
   }elseif(strtolower($message) == "i.g"){
       $event->sendMessage("İyi geceler ");
  }
 }
}
