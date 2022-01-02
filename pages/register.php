<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'): //When user presses the add button
    //variable declaration
    $firstname;
    $lastname;
    $password;
    $username;
    $email;


    //Account Creation

    isset($_POST['username'])   ? $username = $_POST['username'] : $username = '';
    isset($_POST['email'])      ? $email = $_POST['email']       : $email = '';
    isset($_POST['password'])   ? $password = $_POST['password'] : $password = '';
    $newAccount = new Account($username, $password, $email);
    set_account($newAccount->username, $newAccount->password, $newAccount->email);

//User Creation
isset($_POST['firstname'])       ? $name = $_POST['firstname'] : $name = '';
isset($_POST['lastname'])   ? $lastname = $_POST['lastname'] : $lastname = '';


$newUser = new User($firstname, $lastname);
set_user($newUser->first_name, $newUser->lastname);
?>

//Register Page UI