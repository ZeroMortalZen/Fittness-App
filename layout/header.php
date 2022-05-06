<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
// We need to use sessions, so you should always start sessions using the below code.
ob_start();
session_start();
//require "../systems/Recommendation System/RecoSystem.php";
//$Userdata =  $_SESSION['name'];
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    echo  "Not Logged IN";
    //header("location:login.php");
   // exit();


}
//DB Connection
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'fitnessdb';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare("SELECT id,password,email,height,weight,BurnedCalMonday,BurnedCalTuesday,BurnedCalWednesday,BurnedCalThrusday,BurnedCalFriday,BurnedCalSaturday,BurnedCalSunday FROM records WHERE username =?" );
$debug ="bind not working";
if($stmt->bind_param('s', $_SESSION['name'])==false){
    //Debugging
}
else{
    //Debugging
}

$stmt->execute();
if($stmt->bind_result($id,$password,$email,$height,$weight,$BurnedCalMonday,$BurnedCalTuesday,$BurnedCalWednesday,$BurnedCalThrusday,$BurnedCalFriday,$BurnedCalSaturday,$BurnedCalSunday)==false){
    //Debugging
}
else{
    //Debugging
}
$stmt->fetch();
$stmt->close();
?>
<?php
$noData="No Data";
$Data  ="Data";

if(empty($password)){
    //Debugging :echo $noData;
}
else{
    //Debugging
}?>
<link rel="stylesheet" href="../css/home.css">
<header class="header">
    <section class="header-inner">
        <a href="../home.php" class="top-logo"></a>
        <div class="top-menu">
            <ul class="menu">
                <li class="menu__list">
                    <a href="../src/abs.php" class="menu__link">Abs</a>
                </li>
                <li class="menu__list">
                    <a href="../src/chest.php" class="menu__link">Chest</a>
                </li>
                <li class="menu__list">
                    <a href="../src/arms.php" class="menu__link">Arms</a>
                </li>
                <li class="menu__list">
                    <a href="../src/legs.php" class="menu__link">Legs</a>
                </li>
            </ul>
        </div>
        <?php if(empty($_SESSION['name'])){
            $getLogged = "Error ";
        }
        else{
            $getLogged = $_SESSION['name'];
            global  $getLogged;
            global   $id;
        }
        ?>


        <?php

          if(empty($_SESSION['name'])){

        ?>



        <div class="top-reg-log-buttons">
            <a href="../pages/register.php" class="top-register-btn">Register</a>
            <a href="../pages/login.php" class="top-login-btn">Login</a>

        </div>
        <?php
        }else{
        ?>
              <p>Welcome:<?php echo $getLogged  ?></p>
        <a href="../pages/logout.php" class="top-login-btn">Logout</a>
        <?php
        }
         ?>
        <a href="../pages/Dashboard.php" class="icons__acc" title="Login"></a>
        <div class="burger">
            <div class="lines line_one"></div>
            <div class="lines line_two"></div>
            <div class="lines line_three"></div>
        </div>
    </section>

<?php




?>