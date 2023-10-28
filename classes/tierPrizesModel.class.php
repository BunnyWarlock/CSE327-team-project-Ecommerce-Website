<?php

class TierPrizesModel extends Db{
  protected function setTierPrizes($tierNo, $itemID, $discount){
    $mysqli = $this->connect();
    $sql = "insert into tierPrizes(tierNo, itemID, discount) values (?, ?, ?)";
    $stmt = $mysqli->stmt_init();
    if (!$stmt->prepare($sql))
      die("SQL Error: " . $mysqli->error);
    $stmt->bind_param("sss", $tierNo, $itemID, $discount);
    $stmt->execute();
  }
  protected function getTierPrizes($tierNo){
    $mysqli = $this->connect();
    $sql = "select itemID, discount from tierPrizes where tierNo = {$tierNo}";
    $result = $mysqli->query($sql);
    if($result== true){
      if ($result->num_rows > 0) {
        $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
        $prizes= $row;
      } else {
        $prizes= "No Item in Shop Inventory";
      }
    }else{
      $prizes= mysqli_error($db);
    }
    return $prizes;
  }
}
