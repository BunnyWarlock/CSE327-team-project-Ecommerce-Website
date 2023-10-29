<?php
/**
 * Class Dbh
 * This class provides a PDO database connection.
 */
class Dbh{

  /**
 * The server details for the database connection.
 * @var string $servername The server name.
 * @var string $username The username to connect to the database.
 * @var string $password The password to connect to the database.
 * @var string $dbname The name of the database to connect to.
 */
  private $host = "localhost";
  private $user = "root";
  private $password = "";
  private $dbname = "cse327project";

  /**
     * Establish a database connection using PDO.
     * @return PDO|false A PDO database connection object or false if the connection fails.
    */
  protected function connect() {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    $pdo = new PDO($dsn, $this->user, $this->password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}
