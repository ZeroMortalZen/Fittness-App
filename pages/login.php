 <?php
 require "../layout/header.php" ;
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
         $_SESSION['id'] = $id;
         $message = "You are successfully logged in <a href='logout.php?id=$id'>Logout</a>.";
         $messageType = "success_msg";
         header("location: ../home.php"); 
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
                    <button type="submit" name="submit" class="btn center-btn">Login</button>
                </form>
            </div>
        </section>
    </body>
<script src="../src/scripts.js"></script>
</html>