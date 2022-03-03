 <?php
  include '../lib/model.php';
 require "../layout/header.php" ;
 $modelObj = new model();
 $message = "";
  $messageType = "";
  $submit =  filter_input(INPUT_POST, 'submit');
  create_DB();
  if (isset($submit)){
            $firstname = filter_input(INPUT_POST, 'firstname');
            $lastname= filter_input(INPUT_POST, 'lastname');
            $password = filter_input(INPUT_POST, 'pass');
            $username = filter_input(INPUT_POST, 'username');
            $email = filter_input(INPUT_POST, 'email');
            
            $emailValid = validateEmail($email);
            if (strlen($password) < 4){
                $message = "Please choose a stronger password of length 4 or more.";
                $messageType = "error_msg";
            }else if (!$emailValid){
                $message = "Please enter a valid email address";
                $messageType = "error_msg";
            }else{
                $userExists = $modelObj->check_user($username);
                if($userExists){
                    $message = "Username $username already exists, try another one";
                    $messageType = "error_msg";
                }else{
                    $registered = $modelObj->register($firstname, $lastname, $password, $username, $email);
                    if ($registered){
                        $message = "User successfully registered. Please <a href='login.php'>login</a>";
                        $messageType = "success_msg";
                    }else{
                        $message = "Some error occurred in registering user.";
                        $messageType = "error_msg";
                    }
                }
            }
  }
            function validateEmail($email){
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  return false;
              }
              else{
                  return true;
              }
            }
            function create_DB(){
                $servername = "localhost";
                $username = "root";
                $password = "";

                $conn = mysqli_connect($servername, $username, $password);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "CREATE DATABASE IF NOT EXISTS MyDatabase";
                    if (mysqli_query($conn, $sql)) {
                        } else {
                            echo "Error creating database: " . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="css.css" type="text/css">
    </head>
    <body>
    </body>
    
    <div class="main_body">
        
        <div class="logo">
            Logo
        </div>

                <div class="title">
                      Register
                </div>

        <div class="frm">

         <?php if (!empty($message)){ ?>
        <div class="msg <?php echo $messageType; ?> ">
            <?php echo $message; ?>
        </div>

        <?php } ?>
            <form name="submit_form" class="frm" action="" method="post">
            <label>First Name: </label>
            <input type="text" name="firstname" id="firstname" required />
            
            <label>Last Name: </label>
            <input type="text" name="lastname" id="lastname" required />
            
            <label>Password: </label>
            <input type="password" name="pass" id="pass" required />
            
            <label>Username: </label>
            <input type="text" name="username" id="username" required />
            <label>Email:  </label>
            <input type ="text" name="email" id="email" required />
          
            <input type="button" value="Reset" class="button" id="reset_button" onclick="clear_values()" />
            <input type="submit" name="submit" class="reg" value="Submit" />
            </form>
        </div>
    </div>
</html>
<script>
       var firstname = document.getElementById("firstname");
       var lastname = document.getElementById("lastname");
       var pass = document.getElementById("pass");
       var username = document.getElementById("username");
       var email = document.getElementById("email");
       
       function clear_values(){
           firstname.value = "";
           lastname.value = "";
           pass.value = "";
           username.value = "";
           email.value = "";
       }
</script>