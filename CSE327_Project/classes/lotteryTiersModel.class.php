<?php

class LotteryTiersModel extends Db{
    protected function setLotteryTier($lotteryID, $tierNo, $tierProbability){
      $mysqli = $this->connect();
      $sql = "insert into lotteryTiers(lotteryID, tierNo, tierProbability) values (?, ?, ?)";
      $stmt = $mysqli->stmt_init();
      if (!$stmt->prepare($sql))
        die("SQL Error: " . $mysqli->error);
      $stmt->bind_param("sss", $lotteryID, $tierNo, $tierProbability);
      $stmt->execute();
    }
    protected function getLoteryTiers($lotteryID){
      $mysqli = $this->connect();
      $sql = "select * from lotteryTiers where lotteryID = {$lotteryID}";
      $result = $mysqli->query($sql);
      if($result== true){
        if ($result->num_rows > 0) {
          $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
          $tiers= $row;
        } else {
          $tiers= "No Item in Shop Inventory";
        }
      }else{
        $tiers= mysqli_error($db);
      }
      return $tiers;
    }
}
