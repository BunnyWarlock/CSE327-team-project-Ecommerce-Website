<?php

class TiersContr extends TiersModel{
  public function createTier($tierNo){
    try{
      $this->setTier($tierNo);
    }
    catch(Exception $err){
      throw new Exception("Tier With that number already Exists!");
    }
  }
}
