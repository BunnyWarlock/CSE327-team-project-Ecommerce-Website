<?php

class LotteryModel extends Db{
    protected function getLottery($date){
      $mysqli = $this->connect();
      $sql = "select * from lottery where startDate <= '{$date}' AND endDate >= '{$date}'";
      $result = $mysqli->query($sql);
      if($result== true){
        if ($result->num_rows > 0) {
          $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
          $lottery= $row;
        } else {
          $lottery= "No Lottery Happening Right Now. Check Later.";
        }
      }else{
        $lottery= "Something did now work like they were supposed to";
      }
      return $lottery;
    }

    protected function getLoteryByName($name){
      $mysqli = $this->connect();
      $sql = sprintf("select ID from lottery where name = '%s'", $mysqli->real_escape_string($name));
      $result = $mysqli->query($sql);
      $id = $result->fetch_assoc();
      return $id;
    }

    protected function setLottery($name, $startDate, $endDate){
      $mysqli = $this->connect();
      $sql = "insert into lottery(name, startDate, endDate) values (?, ?, ?)";
      $stmt = $mysqli->stmt_init();
      if (!$stmt->prepare($sql))
        die("SQL Error: " . $mysqli->error);
      $stmt->bind_param("sss", $name, $startDate, $endDate);
      $stmt->execute();
    }
}
