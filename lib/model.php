<?php
include '../lib/connection.php';

class model {
   var $mysqli;
   
   function __construct() {
       $con = new Connection();
       $this->mysqli = $con->getConnection();
       $tableExists = $this->checkTable();
       if(!$tableExists){
           $this->create_table();
       }
   }
   function create_table(){
       $sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(50),
username VARCHAR(50)
)";
     if($stmt = $this->mysqli->prepare($sql)){
           $stmt->execute();
           $stmt->close();
       }
   }


   function checkTable(){
       $query = "select 1 from users LIMIT 1";
       
       $id = 0;
       if($stmt = $this->mysqli->prepare($query)){
           $stmt->execute();
           $stmt->bind_result($id);
           $stmt->fetch();
           $stmt->close();
       }
       return $id;
   }
   function register($firstname, $lastname, $password, $username, $email){
       $query = "insert into users values('', '$firstname', '$lastname', '$password', '$email', '$username')";
       
       $affectedRows = 0;
       
       if($stmt = $this->mysqli->prepare($query)){
           $stmt->execute();
           $affectedRows = mysqli_affected_rows($this->mysqli);
           $stmt->close();
       }
       return $affectedRows;
   }
   function check_user($username){
       $query = "select id from users where username = '$username'";
       
       $id = 0;
       if($stmt = $this->mysqli->prepare($query)){
           $stmt->execute();
           $stmt->bind_result($id);
           $stmt->fetch();
           $stmt->close();
       }
       return $id;
   }
   
   function getFirstName($user_id){
       $query = "select firstname from users where id = $user_id";
       
       $first_name = "";
       if($stmt = $this->mysqli->prepare($query)){
           $stmt->execute();
           $stmt->bind_result($first_name);
           $stmt->fetch();
           $stmt->close();
       }
       return $first_name;
   }
   
      function validate_login($username, $password){
      $query = "Select id from users where username=? and password=?";
      
      $id = 0;
      if($stmt = $this->mysqli->prepare($query)){
         $stmt->bind_param("ss", $username, $password);
         $stmt->execute();
         $stmt->bind_result($id);
         $stmt->fetch();
         $stmt->close();
      }
      return $id;
   }
}