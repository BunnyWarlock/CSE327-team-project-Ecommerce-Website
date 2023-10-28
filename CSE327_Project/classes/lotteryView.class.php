<?php

class lotteryView extends lotteryModel{
  public function getLotteryID($name){
    $results = $this->getLoteryByName($name);
    return $results;
  }
  public function getLotteryByDate($date){
    $results = $this->getLottery($date);
    return $results;
  }
}
