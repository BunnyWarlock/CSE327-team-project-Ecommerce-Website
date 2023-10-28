<?php

class AuctionItemsView extends AuctionItemsModel{
  public function getAllAuctionItems(){
    $results = $this->getAuctionItems();
    return $results;
  }
  public function getAuctionItem($id){
    $results = $this->getAuctionByID($id);
    return $results;
  }
}
