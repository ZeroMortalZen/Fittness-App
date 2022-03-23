<?php

    //This Post the weight to  database
    //Note:Need to make an extra table to  user data

    //Note Weight is in Pounds
    //Note Height is  in Inches

    $index =0;
    if($height !=0 && $weight !=0)
        $index = round($weight/($height*$height)* 703,2);

    $bmi="";
    $bmiStyle="alert alert-primary";
    if ($index < 18.5) {
        $bmi="underweight";

    } else if ($index < 25) {
        $bmi="normal";

    } else if ($index < 30) {
        $bmi="overweight";

    } else {
        $bmi="obese";

    }

