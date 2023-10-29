<?php

/**
 * Dbh
 */
class Dbh{

  /**
   * host
   *
   * @var string
   */
  private $host = "localhost:3306";
  /**
   * user
   *
   * @var string
   */
  private $user = "root";
  /**
   * password
   *
   * @var string
   */
  private $password = "";
  /**
   * dbname
   *
   * @var string
   */
  private $dbname = "327_project";

  /**
   * connect
   *
   * @return object
   */
  public function connect() {
    /** @var mixed $dsn  this is a variable that holds all the info for database connection*/
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    /** @var mixed $pdo PDO means php data objects which is used to easily acess the database*/
    $pdo = new PDO($dsn, $this->user, $this->password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}
