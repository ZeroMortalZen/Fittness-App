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
                    }else{
                        echo "<script>alert('failed');</script>";
                    }

                }else{
                    echo "<script>alert('empty');</script>";
                }
            }
        }
    }
    //CRUD For AdminPanel


    //User Data
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

        $query = "SELECT * FROM recordsAdmin WHERE id = '$id'";
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

    function check_user($username){
        $query = "select id from records where username = '$username'";

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

        $first_name = "";
        if($stmt = $this->conn->prepare($query)){
            $stmt->execute();
            $stmt->bind_result($first_name);
            $stmt->fetch();
            $stmt->close();
        }
        return $first_name;
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

