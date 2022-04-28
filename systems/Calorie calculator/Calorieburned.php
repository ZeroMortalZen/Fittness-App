<?php


class Calorieburned
{
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "fitnessDB";
    private $conn;
    var $mysqli;

    public function __construct()
    {
        try {

            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }


    public function fetchTotalBurnedCalMonday()
    {
        global $id;
        echo $id;
        $data = null;

        $query = "SELECT totalcal_abs.TotalCalAbs_Monday as '' FROM totalcal_abs WHERE totalcal_abs.id ='$id' UNION SELECT totalcal_arms.TotalCalArms_Monday as '' FROM totalcal_arms WHERE totalcal_arms.id ='$id' UNION SELECT totalcal_chest.TotalCalChest_Monday as '' FROM totalcal_chest WHERE totalcal_chest.id ='$id' UNION SELECT totalcal_legs.TotalCalLegs_Monday as '' FROM totalcal_legs WHERE totalcal_legs.id ='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }


//Tuesday
    public function fetchTotalBurnedCalTuesday()
    {
        global $id;
        echo $id;
        $data = null;

        $query = "SELECT totalcal_abs.TotalCalAbs_Tuesday as '' FROM totalcal_abs WHERE totalcal_abs.id ='$id' UNION SELECT totalcal_arms.TotalCalArms_Tuesday as '' FROM totalcal_arms WHERE totalcal_arms.id ='$id' UNION SELECT totalcal_chest.TotalCalChest_Tuesday as '' FROM totalcal_chest WHERE totalcal_chest.id ='$id' UNION SELECT totalcal_legs.TotalCalLegs_Tuesday as '' FROM totalcal_legs WHERE totalcal_legs.id ='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    //Wednesday
    public function fetchTotalBurnedCalWednesday()
    {
        global $id;
        echo $id;
        $data = null;

        $query = "SELECT totalcal_abs.TotalCalAbs_Wednesday as '' FROM totalcal_abs WHERE totalcal_abs.id ='$id' UNION SELECT totalcal_arms.TotalCalArms_Wednesday as '' FROM totalcal_arms WHERE totalcal_arms.id ='$id' UNION SELECT totalcal_chest.TotalCalChest_Wednesday as '' FROM totalcal_chest WHERE totalcal_chest.id ='$id' UNION SELECT totalcal_legs.TotalCalLegs_Wednesday as '' FROM totalcal_legs WHERE totalcal_legs.id ='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    //Thursday
    public function fetchTotalBurnedCalThursday()
    {
        global $id;
        echo $id;
        $data = null;

        $query = "SELECT totalcal_abs.TotalCalAbs_Thursday as '' FROM totalcal_abs WHERE totalcal_abs.id ='$id' UNION SELECT totalcal_arms.TotalCalArms_Thursday as '' FROM totalcal_arms WHERE totalcal_arms.id ='$id' UNION SELECT totalcal_chest.TotalCalChest_Thursday as '' FROM totalcal_chest WHERE totalcal_chest.id ='$id' UNION SELECT totalcal_legs.TotalCalLegs_Thursday as '' FROM totalcal_legs WHERE totalcal_legs.id ='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    //Friday
    public function fetchTotalBurnedCalFriday()
    {
        global $id;
        echo $id;
        $data = null;

        $query = "SELECT totalcal_abs.TotalCalAbs_Friday as '' FROM totalcal_abs WHERE totalcal_abs.id ='$id' UNION SELECT totalcal_arms.TotalCalArms_Friday as '' FROM totalcal_arms WHERE totalcal_arms.id ='$id' UNION SELECT totalcal_chest.TotalCalChest_Friday as '' FROM totalcal_chest WHERE totalcal_chest.id ='$id' UNION SELECT totalcal_legs.TotalCalLegs_Friday as '' FROM totalcal_legs WHERE totalcal_legs.id ='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    //Saturday
    public function fetchTotalBurnedCalSaturday()
    {
        global $id;
        echo $id;
        $data = null;

        $query = "SELECT totalcal_abs.TotalCalAbs_Saturday as '' FROM totalcal_abs WHERE totalcal_abs.id ='$id' UNION SELECT totalcal_arms.TotalCalArms_Saturday as '' FROM totalcal_arms WHERE totalcal_arms.id ='$id' UNION SELECT totalcal_chest.TotalCalChest_Saturday as '' FROM totalcal_chest WHERE totalcal_chest.id ='$id' UNION SELECT totalcal_legs.TotalCalLegs_Saturday as '' FROM totalcal_legs WHERE totalcal_legs.id ='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    //Sunday
    public function fetchTotalBurnedCalSunday()
    {
        global $id;
        echo $id;
        $data = null;

        $query = "SELECT totalcal_abs.TotalCalAbs_Sunday as '' FROM totalcal_abs WHERE totalcal_abs.id ='$id' UNION SELECT totalcal_arms.TotalCalArms_Sunday as '' FROM totalcal_arms WHERE totalcal_arms.id ='$id' UNION SELECT totalcal_chest.TotalCalChest_Sunday as '' FROM totalcal_chest WHERE totalcal_chest.id ='$id' UNION SELECT totalcal_legs.TotalCalLegs_Sunday as '' FROM totalcal_legs WHERE totalcal_legs.id ='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

}