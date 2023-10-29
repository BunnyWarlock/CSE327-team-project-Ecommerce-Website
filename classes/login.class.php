<?php 
include 'dbh.class.php';

class LoginControl extends Dbh {

   public function authenticateUser($userName, $password) {
    {
      $sql = "select * from authentication where username = ?and password = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$userName, $password]);
     

      $result = $stmt->fetch(PDO::FETCH_ASSOC); 
        
        
  
        //checking if the authentication has passed or not 
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

