<?php
session_start();
require('../lib/config.php');

if(isset($_POST["submit"]))
{
    $pdo = new PDO(//DATABASE CONNECTION);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        $message = '<label>All fields are required</label>';
    }
    else
    {
        $query = "SELECT * FROM account WHERE username = :username AND password = :password";
        $statement = $pdo->prepare($query);
        $statement->execute(
            array(
                'username'     =>     $_POST["username"],
                'password'     =>     $_POST["password"]
            )
        );
        $count = $statement->rowCount();
        if($count > 0)
        {
            $_SESSION["username"] = $_POST["username"];
            header("location:../index.php");
        }
        else
        {
            $message = '<label>Wrong Data</label>';
        }
    }
}



?>

