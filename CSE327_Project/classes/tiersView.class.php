<?php

class TiersView extends TiersModel{
  public function getAllTiers(){
    $results = $this->getTiers();
    return $results;
  }
}
