<?php

class TierPrizesContr extends TierPrizesModel{
  public function addTierPrizes($tierNo, $itemID, $discount){
    try{
      $this->setTierPrizes($tierNo, $itemID, $discount);
    }
    catch(Exception $err){
      throw new Exception("Tier With that number already Exists!");
    }
  }
}
