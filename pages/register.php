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
                <div class="form-group">
                    <label for="">firstname</label>
                    <input type="text" name="firstname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">lastname</label>
                    <input type="text" name="lastname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="text" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <a href="" class="reset-btn" type="reset" class="button" id="reset_button">Reset</a>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </section>
    </body>
</html>
<script src="../src/scripts.js"></script>
