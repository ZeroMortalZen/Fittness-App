<?php


class model
 {
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "fitnessDB";
    private $conn;
    var $mysqli;

    public function __construct(){
        try {

            $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }

    //Inserts details into Database
    public function insert(){

        if (isset($_POST['submit'])) {
            if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['email'])) {
                if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['password'])&& !empty($_POST['email']) ) {

                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    global $hashed_password;
                    $hashed_password = password_hash($password,PASSWORD_DEFAULT);

                    $query = "INSERT INTO records (firstname,lastname,username,password,email,height,weight,BurnedCalMonday,BurnedCalTuesday,BurnedCalWednesday,BurnedCalThrusday,BurnedCalFriday,BurnedCalSaturday,BurnedCalSunday) VALUES ('$firstname','$lastname','$username','$hashed_password','$email',0,0,0,0,0,0,0,0,0)";
                    if ($sql = $this->conn->query($query)) {
                        header("location: ../pages/login.php");
                        $query = "INSERT INTO totalcal_abs(TotalCalAbs_Monday,TotalCalAbs_Tuesday,TotalCalAbs_Wednesday,TotalCalAbs_Thursday,TotalCalAbs_Friday,TotalCalAbs_Saturday,TotalCalAbs_Sunday) VALUES (0,0,0,0,0,0,0)";
                        if($sql = $this->conn->query(($query))){
                            echo  "Debugging created totalcal_abs database";
                            $query = "INSERT INTO totalcal_arms(TotalCalArms_Monday,TotalCalArms_Tuesday,TotalCalArms_Wednesday,TotalCalArms_Thursday,TotalCalArms_Friday,TotalCalArms_Saturday,TotalCalArms_Sunday) VALUES (0,0,0,0,0,0,0)";
                            if($sql = $this->conn->query(($query))){
                                echo  "Debugging created totalcal_arms database";
                                $query = "INSERT INTO totalcal_chest(TotalCalChest_Monday,TotalCalChest_Tuesday,TotalCalChest_Wednesday,TotalCalChest_Thursday,TotalCalChest_Friday,TotalCalChest_Saturday,TotalCalChest_Sunday) VALUES (0,0,0,0,0,0,0)";
                                if($sql = $this->conn->query(($query))){
                                    echo  "Debugging created totalcal_chest database";
                                    $query = "INSERT INTO totalcal_legs(TotalCalLegs_Monday,TotalCalLegs_Tuesday,TotalCalLegs_Wednesday,TotalCalLegs_Thursday,TotalCalLegs_Friday,TotalCalLegs_Saturday,TotalCalLegs_Sunday) VALUES (0,0,0,0,0,0,0)";
                                    if($sql = $this->conn->query(($query))){
                                        echo  "Debugging created totalcal_chest database";
                                        echo  "all created database";
                                    }
                                }

                            }

                        }
                    }else{
                        echo "<script>alert('failed');</script>";
                    }

                }else{
                    echo "<script>alert('empty');</script>";
                }
            }
        }

    }
    //Post Burned calories All

    //Abs
    public function MondayTotalBurnedCalories(){

        if (isset($_POST['submit'])) {
            echo  "1";
            if (isset($_POST['jj']) && isset ($_POST['ac'])&& isset ($_POST['mc'])&& isset ($_POST['lr'])&& isset ($_POST['p'])&& isset ($_POST['ht'])) {
                if (!empty($_POST['jj'])&& !empty($_POST['ac']) && !empty($_POST['mc']) && !empty($_POST['lr']) && !empty($_POST['p']) && !empty($_POST['ht'])) {
                    echo "Working on this line";
                    $Jumping_jacks =$_POST['jj'];
                    $Adominal_Crunch =$_POST['ac'];
                    $Mountain_Climber =$_POST['mc'];
                    $Leg_Raises =$_POST['lr'];
                    $Plank =$_POST['p'];
                    $Heel_Touch =$_POST['ht'];
                    //Calac
                    $Jumping_jacks=$Jumping_jacks*1.9;
                    $Adominal_Crunch=$Adominal_Crunch*0.3;
                    $Mountain_Climber=$Mountain_Climber*0.9;
                    $Leg_Raises=$Leg_Raises*1.2;
                    $Plank = $Plank*2.5;
                    $Heel_Touch=$Heel_Touch*3.5;

                    $TotalCalAbs=$Jumping_jacks+$Adominal_Crunch+$Mountain_Climber+$Leg_Raises+$Plank+$Heel_Touch;
                    $Weekday = filter_input(INPUT_POST, 'Weekdays', FILTER_SANITIZE_STRING);
                    echo  $Weekday;
                    global  $getLogged;
                    echo  $getLogged;
                    global  $id;
                    echo  $id;


                    if($id>=1 && $Weekday =="AbsReps_Monday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_abs SET TotalCalAbs_Monday ='$TotalCalAbs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";


                        }
                        else{
                            echo  "Failed to store";
                        }
                    }
                    //Tuesday
                    elseif ($id>=1 && $Weekday =="AbsReps_Tuesday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_abs SET TotalCalAbs_Tuesday ='$TotalCalAbs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Wednesday
                    elseif ($id>=1 && $Weekday =="AbsReps_Wednesday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_abs SET TotalCalAbs_Wednesday ='$TotalCalAbs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Thursday
                    elseif ($id>=1 && $Weekday =="AbsReps_Thursday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_abs SET TotalCalAbs_Thursday ='$TotalCalAbs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Friday
                    elseif ($id>=1 && $Weekday =="AbsReps_Friday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_abs SET TotalCalAbs_Friday ='$TotalCalAbs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Saturday
                    elseif ($id>=1 && $Weekday =="AbsReps_Saturday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_abs SET TotalCalAbs_Saturday ='$TotalCalAbs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Sunday
                    elseif ($id>=1 && $Weekday =="AbsReps_Sunday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_abs SET TotalCalAbs_Sunday ='$TotalCalAbs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }

                    }
                    else{
                        echo  "No User Found";
                        //$query = "INSERT INTO reps_abs(AbsReps_Monday) VALUES ('$TotalAbsRep')";
                    }

                }
            }
        }
    }

    //Arms
    public function ArmsTotalBurnedCalories(){

        if (isset($_POST['submit'])) {
            echo  "1";
            if (isset($_POST['td']) && isset ($_POST['dpu'])&& isset ($_POST['dp'])&& isset ($_POST['iw'])&& isset ($_POST['pu'])&& isset ($_POST['wpu'])) {
                if (!empty($_POST['td'])&& !empty($_POST['dpu']) && !empty($_POST['dp']) && !empty($_POST['iw']) && !empty($_POST['pu']) && !empty($_POST['wpu'])) {
                    echo "Working on this line";
                    $Triceps_Dips =$_POST['td'];
                    $Diamond_PushUps =$_POST['dpu'];
                    $Diagonal_Plank =$_POST['dp'];
                    $Inch_Worms =$_POST['iw'];
                    $Push_Ups =$_POST['pu'];
                    $Wall_PushUps =$_POST['wpu'];
                    //Calau
                      $Triceps_Dips=$Triceps_Dips*2.3;
                      $Diamond_PushUps=$Diamond_PushUps*2.9;
                      $Diagonal_Plank=$Diagonal_Plank*3.7;
                      $Inch_Worms=$Inch_Worms*2.1;
                      $Push_Ups=$Push_Ups*2.8;
                      $Wall_PushUps=$Wall_PushUps*0.6;






                    $TotalCalArms=$Triceps_Dips+$Diamond_PushUps+$Diagonal_Plank+$Inch_Worms+$Push_Ups+$Wall_PushUps;
                    $Weekday = filter_input(INPUT_POST, 'Weekdays', FILTER_SANITIZE_STRING);
                    echo  $Weekday;
                    global  $getLogged;
                    echo  $getLogged;
                    global  $id;
                    echo  $id;


                    if($id>=1 && $Weekday =="ArmsReps_Monday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_arms SET TotalCalArms_Monday ='$TotalCalArms' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";
                            global $TotalCalArmsMonday;
                            $TotalCalArmsMonday =$TotalCalArms;
                        }
                        else{
                            echo  "Failed to store";
                        }
                    }
                    //Tuesday
                    elseif ($id>=1 && $Weekday =="ArmsReps_Tuesday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_arms SET TotalCalArms_Tuesday ='$TotalCalArms' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Wednesday
                    elseif ($id>=1 && $Weekday =="ArmsReps_Wednesday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_arms SET TotalCalArms_Wednesday ='$TotalCalArms' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Thursday
                    elseif ($id>=1 && $Weekday =="ArmsReps_Thursday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_arms SET TotalCalArms_Thursday ='$TotalCalArms' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Friday
                    elseif ($id>=1 && $Weekday =="ArmsReps_Friday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_arms SET TotalCalArms_Friday ='$TotalCalArms' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Saturday
                    elseif ($id>=1 && $Weekday =="ArmsReps_Saturday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_arms SET TotalCalArms_Saturday ='$TotalCalArms' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Sunday
                    elseif ($id>=1 && $Weekday =="ArmsReps_Sunday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_arms SET TotalCalArms_Sunday ='$TotalCalArms' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }

                    }
                    else{
                        echo  "No User Found";
                        //$query = "INSERT INTO reps_abs(AbsReps_Monday) VALUES ('$TotalAbsRep')";
                    }

                }
            }
        }
    }

    //Chest
    public function ChestTotalBurnedCalories(){

        if (isset($_POST['submit'])) {
            echo  "1";
            if (isset($_POST['ipu']) && isset ($_POST['kpu'])&& isset ($_POST['pu'])&& isset ($_POST['wapu'])&& isset ($_POST['cos'])&& isset ($_POST['ces'])) {
                if (!empty($_POST['ipu'])&& !empty($_POST['kpu']) && !empty($_POST['pu']) && !empty($_POST['wapu']) && !empty($_POST['cos']) && !empty($_POST['ces'])) {
                    echo "Working on this line";
                    $Incline_Pushup =$_POST['ipu'];
                    $Knee_Pushups =$_POST['kpu'];
                    $Push_Ups =$_POST['pu'];
                    $WideArms_Pushups =$_POST['wapu'];
                    $Cobra_Strech =$_POST['cos'];
                    $Chest_streach =$_POST['ces'];
                    //Calac
                      $Incline_Pushup=$Incline_Pushup*1.6;
                      $Knee_Pushups=$Knee_Pushups*1.3;
                      $Push_Ups=$Push_Ups*2.8;
                      $WideArms_Pushups=$WideArms_Pushups*1.4;
                      $Cobra_Strech=$Cobra_Strech*0.5;
                      $Chest_streach=$Chest_streach*0.7;


                    $TotalCalChest=$Incline_Pushup+$Knee_Pushups+$Push_Ups+$WideArms_Pushups+$Cobra_Strech+$Chest_streach;
                    $Weekday = filter_input(INPUT_POST, 'Weekdays', FILTER_SANITIZE_STRING);
                    echo  $Weekday;
                    global  $getLogged;
                    echo  $getLogged;
                    global  $id;
                    echo  $id;


                    if($id>=1 && $Weekday =="ChestReps_Monday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_chest SET TotalCalChest_Monday ='$TotalCalChest' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";
                            global $TotalCalChestMonday;
                            $TotalCalChestMonday =$TotalCalChest;
                        }
                        else{
                            echo  "Failed to store";
                        }
                    }
                    //Tuesday
                    elseif ($id>=1 && $Weekday =="ChestReps_Tuesday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_chest SET TotalCalChest_Tuesday ='$TotalCalChest' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Wednesday
                    elseif ($id>=1 && $Weekday =="ChestReps_Wednesday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_chest SET TotalCalChest_Wednesday  ='$TotalCalChest' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Thursday
                    elseif ($id>=1 && $Weekday =="ChestReps_Thursday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_chest SET TotalCalChest_Thursday ='$TotalCalChest' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Friday
                    elseif ($id>=1 && $Weekday =="ChestReps_Friday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_chest SET TotalCalChest_Friday ='$TotalCalChest' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Saturday
                    elseif ($id>=1 && $Weekday =="ChestReps_Saturday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_chest SET TotalCalChest_Saturday ='$TotalCalChest' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Sunday
                    elseif ($id>=1 && $Weekday =="ChestReps_Sunday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_chest SET TotalCalChest_Sunday ='$TotalCalChest' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }

                    }
                    else{
                        echo  "No User Found";
                        //$query = "INSERT INTO reps_abs(AbsReps_Monday) VALUES ('$TotalAbsRep')";
                    }

                }
            }
        }
    }

    //
    public function LegsTotalBurnedCalories(){

        if (isset($_POST['submit'])) {
            echo  "1";
            if (isset($_POST['sd']) && isset ($_POST['s'])&& isset ($_POST['bl'])&& isset ($_POST['dkl'])&& isset ($_POST['dkr'])&& isset ($_POST['wkr'])) {
                if (!empty($_POST['sd'])&& !empty($_POST['s']) && !empty($_POST['bl']) && !empty($_POST['dkl']) && !empty($_POST['dkr']) && !empty($_POST['wkr'])) {
                    echo "Working on this line";
                    $SideHops =$_POST['sd'];
                    $Squats =$_POST['s'];
                    $Backward_Lunge =$_POST['bl'];
                    $DonkeyKicks_Left =$_POST['dkl'];
                    $DonkeyKicks_Right =$_POST['dkr'];
                    $WallCalf_Raises =$_POST['wkr'];
                    //cal
                    $SideHops=$SideHops*2.2;
                    $Squats=$Squats*3.3;
                    $Backward_Lunge=$Backward_Lunge*1.7;
                    $DonkeyKicks_Left=$DonkeyKicks_Left*1.1;
                    $DonkeyKicks_Right=$DonkeyKicks_Right*1.1;
                    $WallCalf_Raises=$WallCalf_Raises*2.1;

                    $TotalCalLegs=$SideHops+$Squats+$Backward_Lunge+$DonkeyKicks_Left+$DonkeyKicks_Right+$WallCalf_Raises;
                    $Weekday = filter_input(INPUT_POST, 'Weekdays', FILTER_SANITIZE_STRING);
                    echo  $Weekday;
                    global  $getLogged;
                    echo  $getLogged;
                    global  $id;
                    echo  $id;


                    if($id>=1 && $Weekday =="LegsReps_Monday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_legs SET TotalCalLegs_Monday ='$TotalCalLegs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }
                        else{
                            echo  "Failed to store";
                        }

                    }
                    //Tuesday
                    elseif ($id>=1 && $Weekday =="LegsReps_Tuesday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_legs SET TotalCalLegs_Tuesday ='$TotalCalLegs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Wednesday
                    elseif ($id>=1 && $Weekday =="LegsReps_Wednesday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_legs SET TotalCalLegs_Wednesday ='$TotalCalLegs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Thursday
                    elseif ($id>=1 && $Weekday =="LegsReps_Thursday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_legs SET TotalCalLegs_Thursday ='$TotalCalLegs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Friday
                    elseif ($id>=1 && $Weekday =="LegsReps_Friday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_legs SET TotalCalLegs_Friday ='$TotalCalLegs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Saturday
                    elseif ($id>=1 && $Weekday =="LegsReps_Saturday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_legs SET TotalCalLegs_Saturday ='$TotalCalLegs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Sunday
                    elseif ($id>=1 && $Weekday =="LegsReps_Sunday"){
                        echo "User Found";
                        $query ="UPDATE totalcal_legs SET TotalCalLegs_Sunday ='$TotalCalLegs' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }

                    }
                    else{
                        echo  "No User Found";
                        //$query = "INSERT INTO reps_abs(AbsReps_Monday) VALUES ('$TotalAbsRep')";
                    }

                }
            }
        }
    }






    //CRUD For AdminPanel


    //User Data

    public function fetchAllUserData(){
        $data = null;
        $query ="SELECT * FROM records";
        if($sql = $this->conn->query($query)){
            while (($row = mysqli_fetch_assoc($sql))) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function fetchUserData(){
        $data = null;

        $query = "SELECT * FROM records WHERE username =:username";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }


    //Fetch Abs Data from Abs table
    public function fetch(){
        $data = null;

        $query = "SELECT * FROM abs_data";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    //Fetch Arms Data from Arms Table
    public function fetchArms(){
        $data = null;

        $query = "SELECT * FROM arms_data";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    //Fetch Chest Data from Chest Table
    public function fetchChest(){
        $data = null;

        $query = "SELECT * FROM chest_data";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

   //Fetch Legs Data from Legs Table
    public function fetchLegs(){
        $data = null;

        $query = "SELECT * FROM legs_data";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }



   //Fetching Calories excises
    public function getLowCal(){
        $data = null;
        $query= "SELECT abs_data.exercise,abs_data.calories FROM abs_data WHERE abs_data.calories BETWEEN 0.1 and 1.0 UNION SELECT arms_data.exercise,arms_data.calories FROM arms_data WHERE arms_data.calories BETWEEN 0.1 and 1.0 UNION SELECT chest_data.exercise,chest_data.calories FROM chest_data WHERE chest_data.calories BETWEEN 0.1 and 1.0 UNION SELECT legs_data.exercise,legs_data.calories FROM legs_data WHERE legs_data.calories BETWEEN 0.1 and 1.0 ORDER BY exercise";
           if ($sql = $this->conn->query($query)) {
               while ($row = mysqli_fetch_assoc($sql)) {
                   $data[] = $row;
               }
           }
         return $data;
    }
    public function getNormalCal(){
        $data = null;
        $query= "SELECT abs_data.exercise,abs_data.calories FROM abs_data WHERE abs_data.calories BETWEEN 1.0 and 1.5 UNION SELECT arms_data.exercise,arms_data.calories FROM arms_data WHERE arms_data.calories BETWEEN 1.0 and 1.5 UNION SELECT chest_data.exercise,chest_data.calories FROM chest_data WHERE chest_data.calories BETWEEN 1.0 and 1.5 UNION SELECT legs_data.exercise,legs_data.calories FROM legs_data WHERE legs_data.calories BETWEEN 1.0 and 1.5 ORDER BY exercise";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function getOverCal(){
        $data = null;
        $query= "SELECT abs_data.exercise,abs_data.calories FROM abs_data WHERE abs_data.calories BETWEEN 1.5 and 2.0 UNION SELECT arms_data.exercise,arms_data.calories FROM arms_data WHERE arms_data.calories BETWEEN 1.5 and 2.0 UNION SELECT chest_data.exercise,chest_data.calories FROM chest_data WHERE chest_data.calories BETWEEN 1.5 and 2.0 UNION SELECT legs_data.exercise,legs_data.calories FROM legs_data WHERE legs_data.calories BETWEEN 1.5 and 2.0 ORDER BY exercise";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function getObeseCal(){
        $data = null;
        $query= "SELECT abs_data.exercise,abs_data.calories FROM abs_data WHERE abs_data.calories BETWEEN 2.0 and 3.0 UNION SELECT arms_data.exercise,arms_data.calories FROM arms_data WHERE arms_data.calories BETWEEN 2.0 and 3.0 UNION SELECT chest_data.exercise,chest_data.calories FROM chest_data WHERE chest_data.calories BETWEEN 2.0 and 3.0 UNION SELECT legs_data.exercise,legs_data.calories FROM legs_data WHERE legs_data.calories BETWEEN 2.0 and 3.0 ORDER BY exercise";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }


    public function delete($id){

        $query = "DELETE FROM records where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

    public function fetch_single($id){

        $data = null;

        $query = "SELECT * FROM records WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function edit($id){

        $data = null;

        $query = "SELECT * FROM records WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){

        $query = "UPDATE records SET name='$data[name]', email='$data[email]', mobile='$data[mobile]', address='$data[address]' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

    //Secriticy Features
    function validateEmail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        else{
            return true;
        }
    }

    function check_user($id){
        $query = "select id from records where id = '$id'";

        $id = 0;
        if($stmt = $this->conn->prepare($query)){
            $stmt->execute();
            $stmt->bind_result($id);
            $stmt->fetch();
            $stmt->close();

        }
        return $id;
    }

    function getFirstName($id){
        $query = "select firstname from records where id = $id";

        $firstname = "";
        if($stmt = $this->conn->prepare($query)){
            $stmt->execute();
            $stmt->bind_result($firstname);
            $stmt->fetch();
            $stmt->close();
        }
        return $firstname;
    }

    function validate_login($username){
        $query = "Select id ,username,password from records where username=?";
        $password = $_POST ['password'];
        $id = 0;
        if($stmt = $this->conn->prepare($query)){
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id,$username,$hashed_password);
            $stmt->fetch();
            password_verify($password,$hashed_password);
            $stmt->close();
        }
        return $id;
    }















}


?>

