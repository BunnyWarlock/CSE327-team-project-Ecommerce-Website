<?php

class Db{
  private $host = "localhost:3306";
  private $dbname = "ShopDB";
  private $username = "root";
  private $password = "";

  protected function connect(){
    $mysqli = new mysqli(hostname: $this->host,
                         username: $this->username,
                         password: $this->password,
                         database: $this->dbname);
    if ($mysqli->connect_errno)
      die("Connection Error: " . $mysqli->connect_errno);

    return $mysqli;
  }
}
