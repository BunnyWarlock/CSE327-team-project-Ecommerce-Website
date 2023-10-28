<?php

class LotteryContr extends lotteryModel{
  public function createLottery($name, $startDate, $endDate){
    if ($startDate > $endDate)
      throw new Exception("Lottery Cannot End before it Starts!");
    try{
      $this->setLottery($name, $startDate, $endDate);
    }
    catch(Exception $err){
      throw new Exception("Lottery With that name already Exists!");
    }
  }
}
