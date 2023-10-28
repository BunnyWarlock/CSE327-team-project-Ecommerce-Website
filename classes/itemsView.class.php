<?php

class ItemsView extends ItemsModel{
  public function getAllItems(){
    $results = $this->getItems();
    return $results;
  }
}
