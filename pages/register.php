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
            <div class="frm">
                <?php if (!empty($message)){ ?>
                <div class="msg <?php echo $messageType; ?> ">
                    <?php echo $message; ?>
                </div>
                <?php } ?>

                <form name="submit_form" class="frm" action="" method="post">
                    <div class="firstname-section">
                        <h2 class="firstname">First Name:</h2>
                        <input class="firstnameInput" type="text" name="username" id="firstname" required/>
                    </div>
                    <div class="lastname-section">
                        <h2 class="lastname">Last Name:</h2>
                        <input class="lastnameInput" type="text" name="password" id="lastname" required />
                    </div>
                    <div class="password-section">
                        <h2 class="password">Password:</h2>
                        <input class="passwordInput" type="password" name="password" id="pass" required />
                    </div>
                    <div class="username-section">
                        <h2 class="username">Username:</h2>
                        <input class="usernameInput" type="text" name="password" id="username" required />
                    </div>
                    <div class="email-section">
                        <h2 class="email">Email:</h2>
                        <input class="emailInput" type="email" name="password" id="email" required />
                    </div>
                    <div class="buttons">
                        <a href="" class="reset-btn">Reset</a>
                        <a href="" class="submit-btn">Submit</a>
                    </div>
                    
                </form>
            </div>
        </section>
    </body>
</html>
<script src="../src/scripts.js"></script>
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