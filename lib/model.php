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


                    $query = "INSERT INTO records (firstname,lastname,username,password,email) VALUES ('$firstname','$lastname','$username','$password','$email')";
                    if ($sql = $this->conn->query($query)) {
                        header("location: ../pages/login.php");
                        $query = "INSERT INTO reps_abs(AbsReps_Monday) VALUES (0)";
                        if($sql = $this->conn->query(($query))){
                            echo  "Debugging created rep_abs database";
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
                    $TotalAbsRep=$Jumping_jacks+$Adominal_Crunch+$Mountain_Climber+$Leg_Raises+$Plank+$Heel_Touch;
                    $Weekday = filter_input(INPUT_POST, 'Weekdays', FILTER_SANITIZE_STRING);
                    echo  $Weekday;
                    global  $getLogged;
                    echo  $getLogged;
                    global  $id;
                    echo  $id;
                  

                    if($id>=1 && $Weekday =="AbsReps_Monday"){
                        echo "User Found";
                        $query ="UPDATE reps_abs SET AbsReps_Monday ='$TotalAbsRep' WHERE id = '$id'";
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
                        $query ="UPDATE reps_abs SET AbsReps_Tuesday ='$TotalAbsRep' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Wednesday
                    elseif ($id>=1 && $Weekday =="AbsReps_Wednesday"){
                        echo "User Found";
                        $query ="UPDATE reps_abs SET AbsReps_Wednesday ='$Weekday' ='$TotalAbsRep' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Thursday
                    elseif ($id>=1 && $Weekday =="AbsReps_Thursday"){
                        echo "User Found";
                        $query ="UPDATE reps_abs SET AbsReps_Thursday='$Weekday' ='$TotalAbsRep' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Friday
                    elseif ($id>=1 && $Weekday =="AbsReps_Friday"){
                        echo "User Found";
                        $query ="UPDATE reps_abs SET AbsReps_Friday ='$TotalAbsRep' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Saturday
                    elseif ($id>=1 && $Weekday =="AbsReps_Saturday"){
                        echo "User Found";
                        $query ="UPDATE reps_abs SET AbsReps_Saturday ='$TotalAbsRep' WHERE id = '$id'";
                        if ($sql = $this->conn->query($query)) {
                            echo "Calories Burned has been stored";

                        }else{
                            echo  "Failed to store";
                        }


                    }
                    //Sunday
                    elseif ($id>=1 && $Weekday =="AbsReps_Sunday"){
                        echo "User Found";
                        $query ="UPDATE reps_abs SET AbsReps_Sunday ='$TotalAbsRep' WHERE id = '$id'";
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



    //Thursday





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

    function validate_login($username, $password){
        $query = "Select id from records where username=? and password=?";

        $id = 0;
        if($stmt = $this->conn->prepare($query)){
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $stmt->bind_result($id);
            $stmt->fetch();
            $stmt->close();
        }
        return $id;
    }















}


?>

