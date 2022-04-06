<?php


class Calorieburned
{
    public function buttonSystem()
    {
        $input = array("buttonDay1", "buttonDay2", "buttonDay3", "buttonDay4", "buttonDay5", "buttonDay6", "buttonDay7");
        if (isset($_POST['buttonDay1'])) {

            $model = new model();

            if ($model->MondayTotalBurnedCalories() == true) {//Checks if function has return true
                $rows = $model->fetchAllUserData();
                $i = 1;
                if (!empty($rows)) {

                    foreach ($rows as $row) {
                        $CalBurnedMonday = $row['BurnedCalMonday'];
                    }

                    $output = array_slice($input, 0, 1);
                    $ArrayValue = array_values($output);

                } else {
                    echo "Error has occurred";
                }
            }
        }

    }
}