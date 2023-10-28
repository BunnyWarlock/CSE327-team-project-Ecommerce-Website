<?php

class AuctionItemsModel extends Db{
    protected function setAuctionItem($name, $bid, $description, $fileExtension, $startDate, $endDate){
      $mysqli = $this->connect();
      $sql = "insert into auctionItems(name, bid, description, fileExtension, startDate, endDate) values (?, ?, ?, ?, ?, ?)";
      $stmt = $mysqli->stmt_init();
      if (!$stmt->prepare($sql))
        die("SQL Error: " . $mysqli->error);
      $stmt->bind_param("ssssss", $name, $bid, $description, $fileExtension, $startDate, $endDate);
      $stmt->execute();
    }
    protected function getAuctionItems(){
      $mysqli = $this->connect();
      $sql = "select * from auctionItems";
      $result = $mysqli->query($sql);
      if($result== true){
        if ($result->num_rows > 0) {
          $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
          $item= $row;
        } else {
          $item= "No Item in Shop Inventory";
        }
      }else{
        $item= mysqli_error($db);
      }
      return $item;
    }
    protected function getAuctionByID($id){
      $mysqli = $this->connect();
      $sql = "select * from auctionItems where ID = {$id}";
      $result = $mysqli->query($sql);
      $id = $result->fetch_assoc();
      return $id;
    }
    protected function updateAuctionItem($id, $bidder, $bid){
      $mysqli = $this->connect();
      $sql = "update auctionItems set bidder = ?, bid = ? where ID = ?";
      $stmt = $mysqli->stmt_init();
      if (!$stmt->prepare($sql))
        die("SQL Error: " . $mysqli->error);
      $stmt->bind_param("sss", $bidder, $bid, $id);
      $stmt->execute();
    }
}
