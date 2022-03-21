 <?php
 include '../lib/model.php';
 $model = new Model();
 $insert = $model->insert();
 $message = "";
 $messageType = "";
 if (!empty($_SESSION['user_id'])){
     header("localhost/login_register/logout.php");
 }
 $submit =  filter_input(INPUT_POST, 'submit');

 if (isset($submit)){
     $username = filter_input(INPUT_POST, 'username');
     $password= filter_input(INPUT_POST, 'password');

     $id = $model->validate_login($username, $password);
     if($id){
         session_start();
         session_regenerate_id();
         $_SESSION['loggedin'] = TRUE;
         $_SESSION['name'] = $_POST['username'];
         $message = "You are successfully logged in <a href='logout.php?id=$id'>Logout</a>";
         $messageType = "success_msg";
         //header("location: Dashboard.php");
     }else{
         $message = "Incorrect username or password.";
         $messageType = "error_msg";
     }
 }

 ?>



<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="../css/home.css">
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
        <section class="login-section">
            <h1 class="login-title">Login</h1>
            <div class="frm">
                <?php if (!empty($message)){ ?>
                <div class="msg <?php echo $messageType; ?> ">
                    <?php echo $message; ?>
                </div>
                <?php } ?>

                <form name="submit_form" class="frm" action="" method="post">
                    <div class="username-section">
                        <h2 class="username">Username:</h2>
                        <input class="usernameInput" type="text" name="username" id="username" required/>
                    </div>
                    <div class="password-section">
                        <h2 class="password">Password:</h2>
                        <input class="passwordInput" type="password" name="password" id="password" required />
                    </div>
                    <div class="no-account-register">
                        <p class="no-account">Haven’t got an Account?</p>
                        <a href="register.php" class="register">Register</a>
                    </div>
                    <button type="submit" name="submit" class="btn center-btn">Login</button>
                </form>
            </div>
        </section>
    </body>
<script src="../src/scripts.js"></script>
</html>