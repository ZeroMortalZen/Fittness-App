 <?php
  include '../lib/model.php';
 require "../layout/header.php";
 $modelObj = new model();
 $message = "";
  $messageType = "";
  if (!empty($_SESSION['user_id'])){
      header("localhost/login_register/logout.php");
  }
  $submit =  filter_input(INPUT_POST, 'submit');
    
  if (isset($submit)){
            $username = filter_input(INPUT_POST, 'username');
            $password= filter_input(INPUT_POST, 'password');
           
            $user_id = $modelObj->validate_login($username, $password);
            if($user_id){
                session_start();
                $_SESSION['user_id'] = $user_id;
                $message = "You are successfully logged in <a href='logout.php?id=$user_id'>Logout</a>.";
                $messageType = "success_msg";
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
    </head>
    <body>
    </body>

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
    
    <div class="main_body">
        <h1 class="login-title">Login</h1>

        <div class="frm">

         <?php if (!empty($message)){ ?>
        <div class="msg <?php echo $messageType; ?> ">
            <?php echo $message; ?>
        </div>

        <?php } ?>
            <form name="submit_form" class="frm" action="" method="post">
            <h2 class="username">Username:</h2>
            <input type="text" name="username" id="username" required />
            
            <h2 class="password">Password:</h2>
            <input type="password" name="password" id="password" required />
            <div class = "loginBtn">
                <input type="submit" name="submit" value="Login" />
            </div>
            </form>
        </div>
    </div>
</html>