<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
//require "../systems/Recommendation System/RecoSystem.php";
$Userdata =  $_SESSION['name'];
$url ="login.php";
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
header("Refresh:3,URL='$url'");
echo "YOU MUST LOGIN FIRST!!";
exit;
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

$stmt = $con->prepare("SELECT password,email,height,weight,BurnedCalMonday,BurnedCalTuesday,BurnedCalWednesday,BurnedCalThrusday,BurnedCalFriday,BurnedCalSaturday,BurnedCalSunday FROM records WHERE username =?" );
$debug ="bind not working";
if($stmt->bind_param('s', $_SESSION['name'])==false){
    //Debugging
}
else{
    //Debugging
}

$stmt->execute();
if($stmt->bind_result($password, $email,$height,$weight,$BurnedCalMonday,$BurnedCalTuesday,$BurnedCalWednesday,$BurnedCalThrusday,$BurnedCalFriday,$BurnedCalSaturday,$BurnedCalSunday)==false){
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
<!-- <div class="content">
    <h2>Profile Page</h2>
    <div>
        <p>Your account details are below:</p>
        <table>
            <tr>
                <td>Username:</td>
                <td> <//?=$_SESSION['name']?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td> <//?=$password?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td> <//?=$email?></td>
            </tr>
        </table>
    </div>
</div> -->

<div class="content">
    <h2 class="profile-title">Profile Page</h2>
    <div class="">
        <p class="profile-details-title">Your account details are below:</p>
        <div class="profile-table">
            <div class="profile-table-row">
                <h3>Username:</h3>
                <h3 class="profile-username-value"><?=$_SESSION['name']?></h3>
            </div>
            <div class="profile-table-row">
                <h3>Password:</h3>
                <h3 class="profile-password-value"><?=$password?></h3>
            </div>
            <div class="profile-table-row">
                <h3>Email:</h3>
                <h3 class="profile-email-value"><?=$email?></h3>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center form_container">






             <h4>User Inputs</h4>
    <div class="input-group mb-3">
        <div class="input-group-append">
        </div>
        <h5> Current Height (Inches): <?=$height?></h5>
        <p>Update Height<label>
                <input type="text" name="" class="form-control input_user" value="" placeholder="Weight">
            </label></p>
        <button type="button" name="button" class="btn login_btn">update</button>
    </div>


        <div class="input-group mb-3">
            <div class="input-group-append">
            </div>
            <h5> Current Weight (Pounds): <?=$weight?></h5>
            <p>Update Weight<input type="text" name="" class="form-control input_user" value="" placeholder="Weight"></p>
        </div>
        <button type="button" name="button" class="btn login_btn">update</button>
    
                     <div class="input-group-append">
                     </div>
    <?php
    include  "../systems/Calorie calculator/BMICalaculator.php";


    ?>
    <h5>Current weight Status:<?php
        echo $bmi
        ?></h5>
    
    <table>
        <tr>
            <td>Calories Burned Monday</td>
            <?php
              if($BurnedCalMonday <=0){
                  $BurnedCalMonday ="No Data (0) ";
              }else
              {

              }

            ?>
            <form method="POST">
                <td><input type ="text" name="BurnedCalMonday"value="<?=$BurnedCalMonday?>" readonly></td>
                <td><button type="button" name="buttonDay1" class="btn login_btn">Submit Calories</button></td>
            </form>

            

        </tr>
        <tr>
            <td>Calories Burned Tuesday</td>
            <td>no data</td>
            <td><button type="button" name="buttonDay2" class="btn login_btn">Submit Calories</button></td>
        </tr>
        <tr>
            <td>Calories Burned Wednesday</td>
            <td>no data</td>
            <td><button type="button" name="buttonDay3" class="btn login_btn">Submit Calories</button></td>
        </tr>

        <tr>
            <td>Calories Burned Thursday</td>
            <td>no data</td>
            <td><button type="button" name="buttonDay4" class="btn login_btn">Submit Calories</button></td>
        </tr>

        <tr>
            <td>Calories Burned Friday</td>
            <td>no data</td>
            <td><button type="button" name="buttonDay5" class="btn login_btn">Submit Calories</button></td>
        </tr>

        <tr>
            <td>Calories Burned Saturday</td>
            <td>no data</td>
            <td><button type="button" name="buttonDay6" class="btn login_btn">Submit Calories</button></td>
        </tr>

        <tr>
            <td>Calories Burned Sunday</td>
            <td>no data</td>
            <td><button type="button" name="buttonDay7" class="btn login_btn">Submit Calories</button></td>
        </tr>
    </table>





</div>


<img id="myImg" src="../css/images/graph.png" alt="Snow" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>



<?php require "../systems/Recommendation System/RecoSystem.php"; ?>





<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span>(x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
