<?php
session_start();

include '../layout/header.php';

if(isset($_POST["submit"]))
{
    $pdo = new PDO();
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
<style>
    img {
        border-radius: 50%;
    }
</style>
<body>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">

                    <img src="../css/images/fitness%20app%20logo.jpg" class="brand_logo" alt="Logo" height="200" width="200">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="" class="form-control input_user" value="" placeholder="username">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="" class="form-control input_pass" value="" placeholder="password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="button" name="button" class="btn login_btn">Login</button>
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Don't have an account? <a href="#" class="ml-2">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


