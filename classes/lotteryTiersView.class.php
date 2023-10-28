<?php

class lotteryTiersView extends lotteryTiersModel{
  public function getTiers($lotteryID){
    $results = $this->getLoteryTiers($lotteryID);
    return $results;
  }
}
