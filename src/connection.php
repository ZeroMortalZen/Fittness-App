<?php
class Connection {
   var $connection;
   var $server = "localhost";
   var $user = "root";
   var $pass = "";
   var $dbname = "MyDatabase";
   
   function getConnection(){
      $this->connection = new mysqli($this->server, $this->user, $this->pass, $this->dbname);
      if (mysqli_connect_errno())
         echo mysqli_connect_error ();
      return $this->connection;
   }
}
