<?php

class ItemsModel extends Db{
  protected function getItems(){
    $mysqli = $this->connect();
    $sql = "select ID, name from items";
    $result = $mysqli->query($sql);
    if($result== true){
      if ($result->num_rows > 0) {
        $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
        $items= $row;
      } else {
        $items= "There are no Items in the Inventory.";
      }
    }else{
      $items= "Something did now work like they were supposed to";
    }
    return $items;
  }
}
