<?php


class Calorieburned{
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


    public function fetchTotalBurnedCalMonday(){
        global  $id;
        echo  $id;
        $data = null;

        $query = "SELECT totalcal_abs.TotalCalAbs_Monday FROM totalcal_abs WHERE totalcal_abs.id ='$id' UNION SELECT totalcal_arms.TotalCalArms_Monday FROM totalcal_arms WHERE totalcal_arms.id ='$id' UNION SELECT totalcal_chest.TotalCalChest_Monday FROM totalcal_chest WHERE totalcal_chest.id ='$id' UNION SELECT totalcal_legs.TotalCalLegs_Monday FROM totalcal_legs WHERE totalcal_legs.id ='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

}
