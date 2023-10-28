<?php

class TierPrizesView extends TierPrizesModel{
  public function getAllTierPrizes($tierNo){
    $results = $this->getTierPrizes($tierNo);
    return $results;
  }
}
