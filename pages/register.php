<?php
include '../lib/model.php';
$model = new Model();
$insert = $model->insert();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="../css/home.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <?php 
            require "../layout/header.php";
        ?>
        <nav class="mobile">
            <ul class="mobile-menu">
                <li class="mobile-menu__list">
                    <a href="../home.php" class="mobile-menu__link">Home</a>
                </li>
                <li class="mobile-menu__list">
                    <a href="../pages/Dashboard.php" class="mobile-menu__link">Account</a>
                </li>
                <li class="mobile-menu__list">
                    <a href="" class="mobile-menu__link">Graph</a>
                </li>
            </ul>
        </nav>
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
                    <input type="password" name="password" class="form-control passwordInput">
                </div>

                <div class="form-group email-section">
                    <h2 class="email">Email</h2>
                    <input type="text" name="email" class="form-control emailInput">
                </div>

                <div class="form-group buttons">
                    <button type="reset" class="button reset-btn" id="reset_button">Reset</button>
                    <button type="submit" class="submit-btn" name="submit" >Register</button>
                </div>
            </form>
        </section>
    </body>
</html>
<script src="../src/scripts.js"></script>
