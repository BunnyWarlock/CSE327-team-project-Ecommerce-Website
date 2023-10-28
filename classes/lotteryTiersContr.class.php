<?php

class LotteryTiersContr extends lotteryTiersModel{
  public function createLotteryTier($lotteryID, $tierNo, $tierProbability){
    try{
      $this->setLotteryTier($lotteryID, $tierNo, $tierProbability);
    }
    catch (Exception $err){
      throw new Exception("Tier Does Not Exist!");
    }
  }
}
