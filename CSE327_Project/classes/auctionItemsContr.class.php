<?php

class AuctionItemsContr extends AuctionItemsModel{
  public function createAuction($name, $bid, $description, $fileExtension, $startDate, $endDate){
    if ($startDate > $endDate)
      throw new Exception("Auction Cannot End before it Starts!");
    try{
      $this->setAuctionItem($name, $bid, $description, $fileExtension, $startDate, $endDate);
    }
    catch(Exception $err){
      throw new Exception("Auction Item With that name already Exists!");
    }
  }
  public function updateBid($id, $bidder, $bid){
    $this->updateAuctionItem($id, $bidder, $bid);
  }
}
