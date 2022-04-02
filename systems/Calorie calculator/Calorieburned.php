<?php
require "./lib/model.php";
$model = new model();
$model ->MondayTotalBurnedCalories();
class Calorieburned
{
public  function buttonSystem(){
     $input = array( "buttonDay1","buttonDay2","buttonDay3","buttonDay4","buttonDay5","buttonDay6","buttonDay7");
    if(isset($_POST['buttonDay1'])){

        $model = new model();

        if($model->MondayTotalBurnedCalories() == true){//Checks if function has return true
            echo "";
            $output = array_slice($input,0,1);
            $ArrayValue =array_values($output);
            if($ArrayValue == "buttonDay1"){
                //Change Button name to Day 2
                $output = array_slice($input,1,1);
                $ArrayValue = array_values($output);
                if($ArrayValue =="buttonDay2"){
                    //Submit button is activated
                    if(isset($_POST['buttonDay2'])){
                        echo"Successful submitted calories";//Pop out gui
                        if($model->TuesdayTotalBurnedCalories() ==true){
                            echo "";
                            $output = array_slice($input,2,1);
                            $ArrayValue =array_values($output);
                            if($ArrayValue == "buttonDay3"){
                                //Submit button is activated

                            }
                        }

                    }
                }
            }
        }
        else{
            echo "Error has occurred";
        }
    }
}

}