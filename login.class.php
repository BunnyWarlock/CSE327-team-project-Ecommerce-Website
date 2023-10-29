<?php
include 'dbh.class.php';

/**
 * LoginControl class that controls users login
 */
class LoginControl extends Dbh {

   /**
    * authenticateUser
    *
    * @param  string $userName
    * @param  string $password
    *
    */
   public function authenticateUser($userName, $password) {
    {
      /** @var string $sql query */
      $sql = "select * from authentication where username = ?and password = ?";
      /** @var mixed $stmt */
      $stmt = $this->connect()->prepare($sql);
      /** @var mixed $stmt- */
      $stmt->execute([$userName, $password]);


      $result = $stmt->fetch(PDO::FETCH_ASSOC);




        /** @var mixed $result checking if the authentication has passed or not*/
        if($result > 0 ){
          $_SESSION['user'] = $userName ;
         header("location:index.php");
        }
        else{
           header("location:login.php?Invalid=please give the correct information");
        }
      }






  }
}

