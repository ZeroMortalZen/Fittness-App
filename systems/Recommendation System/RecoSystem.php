<?php
if ($bmi== "underweight"){
    $UserWeight= $Underweight;
    if($UserWeight== $Underweight ){

        //if your in abs page do this
        $url = $_SERVER["REQUEST_URI"];
        $pos = strrpos($url, "abs.php");

        if($pos != false) {
            include '../lib/model.php';
            $model = new Model();
            $rows = $model->getAbsLowCal(); //Return a table of Low Calories excricse & Checks for Calories between 0.1 - 1.0
            $i=1;
            if(!empty($rows)){
                //alert them Like javascript or something
                echo$row['exercise'];



            }
        }

     }
}