 <?php
 $url = "login.php";
  include '../lib/model.php';
 require "../layout/header.php";
 $modelObj = new model();
 $message = "";
  $messageType = "";
  $id = filter_input(INPUT_GET, 'id');
  $submit =  filter_input(INPUT_POST, 'submit');
  if(isset($submit)){
      session_destroy();
      //unset($_SESSION);
      echo "LOGGING OUT";
      header("Refresh:3,URL='$url'");


  }
  if(!empty($id)){
      session_start();
      $_SESSION['user_id'] = $id;
      echo "Debugging";
      $firstname = $modelObj->getFirstName($id);
      //Debugging
      if(empty($firstname)){
          echo "Error";
      }
      else{
          echo "working";
      }
      $message = "You are logged in as $firstname.";
      $messageType = "success_msg";
      $url = "login.php";
      if(isset($submit) && !empty(($id))){
          session_destroy();
          //unset($_SESSION);
          echo "LOGGING OUT";
          header("Refresh:3,URL='$url'");


          if (session_destroy()==true){

             //Debugging
          };

          //header("Location: login.php");
      }
  }
  else{

       //$message = "You are not logged in. Please <a href='login.php'>login</a>";
        $messageType = "error_msg";
  }

        ?>

<html>
    <body>

    </body>
    
    <div class="main_body">
        <!-- <div class="frm">
            <//?php if (!empty($message)){ ?>
            <div class="msg <//?php echo $messageType; ?> ">
            <//?php echo $message; ?>
        </div> -->

        <?php //} 
            if(session_start()==true){
        ?>
            <p class="youSureQuestion">Are you sure you want to Logout?</p>
            <form name="logout" action="?id=<?php echo $id; ?>" method ="POST">
                <input class="btn logoutBTN" type="submit" name="submit" value="Logout"/>
            </form>
        <?php 
            } 
        ?>
        </div>
    </div>
</html>