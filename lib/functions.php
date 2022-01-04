<?php

function get_connection(){
    $conf = require 'config.php';
    try{
        $pdo = new PDO(
            $conf['db_dsn'],
            $conf['db_user'],
            $conf['db_pw']
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(PDOException $e){
        echo 'Connection failed '.$e->getMessage();
        return null;
    }
}


function get_accounts()
{
    $pdo = get_connection();

    $query = 'SELECT * FROM account';
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $accounts = $stmt->fetchAll();
    return $accounts;
}

function set_account($username,$password,$email){
    $pdo = get_connection();
    $query = "insert into account(username, password, email) values ('$username','$password','$email');";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}




function get_users()
{
    $pdo = get_connection();

    $query = 'SELECT * FROM user';
    if($limit){
        $query = $query.' LIMIT :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
function set_user($firstname,$lastname,$email){
    $pdo = get_connection();
    $query = "insert into user(first_name, last_name,email) 
                values ('$firstname','$lastname','$email');";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}


?>
