<?php
require "../layout/header.php" ;
include '../lib/model.php';
$model = new Model();
$insert = $model->insert();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <header class="header">
            <a href="../home.php" class="logo">Logo</a>
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="pop-menu" id="pop-menu">
                <span class="cross"></span>
                <a href="../home.php" class="home-page">Home</a>
                <a href="" class="account-page">Account</a>
                <a href="" class="graph-page">Graph</a>
            </div>
        </header>
        <section class="register-section">
            <h1 class="register-title">Register</h1>
            <form action="" method="post">
                <div class="form-group firstname-section">
                    <h2 class="firstname">Firstname</h2>
                    <input type="text" name="firstname" class="form-control firstnameInput">
                </div>
                <div class="form-group lastname-section">
                    <h2 class="lastname">Lastname</h2>
                    <input type="text" name="lastname" class="form-control lastnameInput">
                </div>
                <div class="form-group username-section">
                    <h2 class="username">Username</h2>
                    <input type="text" name="username" class="form-control usernameInput">
                </div>
                <div class="form-group password-section">
                    <h2 class="password">Password</h2>
                    <input type="text" name="password" class="form-control passwordInput">
                </div>

                <div class="form-group email-section">
                    <h2 class="email">Email</h2>
                    <input type="text" name="email" class="form-control emailInput">
                </div>

                <div class="form-group buttons">
                    <button type="reset" class="button reset-btn" id="reset_button">Reset</button>
                    <button type="submit" class="submit-btn" name="submit" >Submit</button>
                </div>
            </form>
        </section>
    </body>
</html>
<script src="../src/scripts.js"></script>
