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






<!-- Calling Header Page -->
<?php 
    require "../layout/header.php";
?>
<!-- Start of Dashboard Page -->
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

<div class="form_container">
    <h2 class="user-inputs">User Inputs</h2>
    <div class="input-group mb-3">
        <!-- <div class="input-group-append"></div> -->
        <h5 class="user-inputs-height"> Current Height (Inches): <span class="current-value"><?=$height?></span></h5>
        <div class="user-inputs-height-btn">
            <p class="user-inputs-update-height">Update Height<label><input class="user-inputs-update-height-input" type="number" name="" class="form-control input_user" value="" placeholder="Height"></label></p>
            <button type="button" name="button" class="btn update-btn">Update</button>
        </div>
        
    </div>

    <div class="input-group mb-3">
        <!-- <div class="input-group-append"></div> -->
        <h5 class="user-inputs-height"> Current Weight (Pounds): <span class="current-value"><?=$weight?></h5>
        <div class="user-inputs-height-btn">
            <p class="user-inputs-update-height">Update Weight <label><input class="user-inputs-update-height-input-mod" type="number" name="" class="form-control input_user" value="" placeholder="Weight"></label></p>
            <button type="button" name="button" class="btn update-btn">Update</button>
        </div>
    </div>
    
    
    
    <!-- <div class="input-group-append"></div> -->
    <?php
        include  "../systems/Calorie calculator/BMICalaculator.php";
    ?>
    <h5 class="current-weight-status">Current weight Status:<?php echo $bmi?></h5>
    

    <div class="calories-burned">
        <h2 class="calories-burned_title">Calories Burned</h2>
        <div class="calories-burned_rows">
            <h3 class="calories-burned_days">Calories Burned Monday:</h3>
            <?php
              if($BurnedCalMonday <=0){
                  $BurnedCalMonday ="No Data (0) ";
              }else
              {

              }
            ?>
            <form class="CaloriesForm" method="POST">
                <input class="calories-burned_input" type ="text" name="BurnedCalMonday"value="<?=$BurnedCalMonday?>">
                <button type="button" name="buttonDay1" class="btn calories-burned_btn">Sent</button>
            </form>
        </div>

        <div class="calories-burned_rows">
            <h3 class="calories-burned_days">Calories Burned Tuesday:</h3>
            <form class="CaloriesForm" method="POST">
                <input class="calories-burned_input" type ="text" name="BurnedCalTuesday"value="<?=$BurnedCalTuesday?>">
                <button type="button" name="buttonDay2" class="btn calories-burned_btn">Sent</button>
            </form>
        </div>
        <div class="calories-burned_rows">
            <h3 class="calories-burned_days">Calories Burned Wednesday:</h3>
            <form class="CaloriesForm" method="POST">
                <input class="calories-burned_input" type ="text" name="BurnedCalWednesday"value="<?=$BurnedCalWednesday?>">
                <button type="button" name="buttonDay3" class="btn calories-burned_btn">Sent</button>
            </form>
        </div>
        <div class="calories-burned_rows">
            <h3 class="calories-burned_days">Calories Burned Thursday:</h3>
            <form class="CaloriesForm" method="POST">
                <input class="calories-burned_input" type ="text" name="BurnedCalThursday"value="<?=$BurnedCalThrusday?>">
                <button type="button" name="buttonDay4" class="btn calories-burned_btn">Sent</button>
            </form>
        </div>
        <div class="calories-burned_rows">
            <h3 class="calories-burned_days">Calories Burned Friday:</h3>
            <form class="CaloriesForm" method="POST">
                <input class="calories-burned_input" type ="text" name="BurnedCalFriday"value="<?=$BurnedCalFriday?>">
                <button type="button" name="buttonDay5" class="btn calories-burned_btn">Sent</button>
            </form>
        </div>
        <div class="calories-burned_rows">
            <h3 class="calories-burned_days">Calories Burned Saturday:</h3>
            <form class="CaloriesForm" method="POST">
                <input class="calories-burned_input" type ="text" name="BurnedCalSaturday"value="<?=$BurnedCalSaturday?>">
                <button type="button" name="buttonDay6" class="btn calories-burned_btn">Sent</button>
            </form>
        </div>
        <div class="calories-burned_rows">
            <h3 class="calories-burned_days">Calories Burned Sunday:</h3>
            <form class="CaloriesForm" method="POST">
                <input class="calories-burned_input" type ="text" name="BurnedCalSunday"value="<?=$BurnedCalSunday?>">
                <button type="button" name="buttonDay7" class="btn calories-burned_btn">Sent</button>
            </form>
        </div>
    </div>
</div>


<!-- <img id="myImg" src="../css/images/graph.png" alt="Snow" style="width:100%;max-width:300px"> -->
<?php
include '../systems/Calorie calculator/Calorieburned.php';
$Calorieburned= new Calorieburned();
$rowsMonday = $Calorieburned->fetchTotalBurnedCalMonday();
$rowsTuesday = $Calorieburned->fetchTotalBurnedCalTuesday();
$rowsWednesday = $Calorieburned->fetchTotalBurnedCalWednesday();
$rowsThursday = $Calorieburned->fetchTotalBurnedCalThursday();
$rowsFriday = $Calorieburned->fetchTotalBurnedCalFriday();
$rowsSaturday = $Calorieburned->fetchTotalBurnedCalSaturday();
$rowsSunday = $Calorieburned->fetchTotalBurnedCalSunday();

//Monday
if(!empty($rowsMonday)) {


    foreach ($rowsMonday as $rowMonday) {

        echo implode(" ", $rowMonday) . " ";
        $storeArrayMonday =implode(" ", $rowMonday);
        $MondayArray[] =$storeArrayMonday;
         //
         $json = json_encode($MondayArray);
         echo ($json);
         $sumMonday=array_sum($MondayArray);
         echo $sumMonday;







    }


}
//Tuesday
if(!empty($rowsTuesday)) {


    foreach ($rowsTuesday as $rowTuesday) {

        echo implode(" ", $rowTuesday) . " ";
        $storeArrayTuesday =implode(" ", $rowTuesday);
        $TuesdayArray[] =$storeArrayTuesday;
        //
        $json = json_encode($TuesdayArray);
        echo ($json);
        $sumTuesday=array_sum($TuesdayArray);
        echo $sumTuesday;







    }


}

//Wednesday
if(!empty($rowsWednesday)) {


    foreach ($rowsWednesday as $rowWednesday) {

        echo implode(" ", $rowWednesday) . " ";
        $storeArrayWednesday =implode(" ", $rowWednesday);
        $WednesdayArray[] =$storeArrayWednesday;
        //
        $json = json_encode($WednesdayArray);
        echo ($json);
        $sumWednesday=array_sum($WednesdayArray);
        echo $sumWednesday;







    }


}
//Thursday
if(!empty($rowsThursday)) {


    foreach ($rowsThursday as $rowThursday) {

        echo implode(" ", $rowThursday) . " ";
        $storeArrayThursday =implode(" ", $rowThursday);
        $ThursdayArray[] =$storeArrayThursday;
        //
        $json = json_encode($ThursdayArray);
        echo ($json);
        $sumThursday=array_sum($ThursdayArray);
        echo $sumThursday;







    }


}
//Friday
if(!empty($rowsFriday)) {


    foreach ($rowsFriday as $rowFriday) {

        echo implode(" ", $rowFriday) . " ";
        $storeArrayFriday =implode(" ", $rowFriday);
        $FridayArray[] =$storeArrayFriday;
        //
        $json = json_encode($FridayArray);
        echo ($json);
        $sumFriday=array_sum($FridayArray);
        echo $sumFriday;







    }


}
//Saturday
if(!empty($rowsSaturday)) {


    foreach ($rowsSaturday as $rowSaturday) {

        echo implode(" ", $rowSaturday) . " ";
        $storeArraySaturday =implode(" ", $rowSaturday);
        $SaturdayArray[] =$storeArraySaturday;
        //
        $json = json_encode($SaturdayArray);
        echo ($json);
        $sumSaturday=array_sum($SaturdayArray);
        echo $sumSaturday;







    }


}
//Sunday
if(!empty($rowsSunday)) {


    foreach ($rowsSunday as $rowSunday) {

        echo implode(" ", $rowSunday) . " ";
        $storeArraySunday =implode(" ", $rowSaturday);
        $SundayArray[] =$storeArraySunday;
        //
        $json = json_encode($SundayArray);
        echo ($json);
        $sumSunday=array_sum($SundayArray);
        echo $sumSunday;







    }


}

?>
<?php
    $dataPoints = array(
        array("y" => $sumMonday, "label" => "Monday"),
        array("y" => $sumTuesday, "label" => "Tuesday"),
        array("y" => $sumWednesday, "label" => "Wednesday"),
        array("y" => $sumThursday, "label" => "Thursday"),
        array("y" => $sumFriday, "label" => "Friday"),
        array("y" => $sumSaturday, "label" => "Saturday"),
        array("y" => $sumSunday, "label" => "Sunday")
    );
?>

<script>
    window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
        title: {
            text: "Calories Burned Over a Week"
        },
        axisY: {
            title: "Number of Calories Burned"
        },
        data: [{
            type: "line",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
    }
</script>

<!-- Graph -->
<div class="graph-image" id="chartContainer"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



<?php require "../systems/Recommendation System/RecoSystem.php"; ?>

<!-- Footer -->
<?php 
    require "../layout/footer.php";
?>


<!-- <script>
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
</script> -->
