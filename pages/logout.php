 <?php
  include '../lib/model.php';
 require "../layout/header.php";
 $modelObj = new model();
 $message = "";
  $messageType = "";
  $id = filter_input(INPUT_GET, 'id');
  $submit =  filter_input(INPUT_POST, 'submit');
  if(!empty($id)){
      session_start();
      $_SESSION['user_id'] = $id;
      $firstname = $modelObj->getFirstName($id);
      $message = "You are logged in as $firstname.";
      $messageType = "success_msg";
      
      if(isset($submit) && !empty(($id))){
          session_destroy();
          header("Location: login.php");
      }
  }else{
       $message = "You are not logged in. Please <a href='login.php'>login</a>";
        $messageType = "error_msg";
  }

        ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css.css" type="text/css">
    </head>
    <body>
    </body>
    
    <div class="main_body">
        
        <div class="logo">
            Logo
        </div>

                <div class="title">
                      Logout
                </div>

        <div class="frm">

         <?php if (!empty($message)){ ?>
        <div class="msg <?php echo $messageType; ?> ">
            <?php echo $message; ?>
        </div>

        <?php } 
        if(!empty($id)){
        ?>
            <form name="logout" action="?id=<?php echo $id; ?>" method ="get"> 
                <input type="submit" name="submit" value="Logout" />
            </form>
        <?php } ?>
        </div>
    </div>
</html>