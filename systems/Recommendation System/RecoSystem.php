<?php

if ($bmi== "underweight" ||$bmi =="normal"||$bmi =="overweight"||$bmi =="obese"){
    $message ="If your $bmi you should try this exercise";
    if($bmi== "underweight" ){

        //if your in abs page do this
            include '../lib/model.php';
            $model = new Model();
            $rows = $model->getLowCal(); //Return a table of Low Calories excricse & Checks for Calories between 0.1 - 1.0
            $i=1;
           ?>
        <p> We Recommend these exercises </p>
        <div class="row">
        <div class="col-md-12">
            <table class="table">

                <thead>
                <tr>

                    <th>exercise </th>
                    <th>Calories</th>

                </tr>
                </thead>
                <tbody>
        <?php
            if(!empty($rows)){

                foreach($rows as $row) {
                    ?>

                    <thead>
                    <tr>
                        <td> <?php echo $row['exercise'] ?></td>
                        <td><?php echo $row['calories']; ?></td>

                    </tr>
                    </thead>



<?php
                }
            }
            else{
                echo "no Data";
            }


     }
    //Normal Section
    elseif ($bmi == "normal"){
        include '../lib/model.php';
            $model = new Model();
            $rows = $model->getNormalCal(); //Return a table of Low Calories excricse & Checks for Calories between 0.1 - 1.0
            $i=1;
           ?>
        <p> We Recommend these exercises </p>
        <div class="row">
        <div class="col-md-12">
            <table class="table">

                <thead>
                <tr>

                    <th>exercise </th>
                    <th>Calories</th>

                </tr>
                </thead>
                <tbody>
        <?php
            if(!empty($rows)){

                foreach($rows as $row) {
                    ?>

                    <thead>
                    <tr>
                        <td> <?php echo $row['exercise'] ?></td>
                        <td><?php echo $row['calories']; ?></td>

                    </tr>
                    </thead>



<?php
                }
            }
            else{
                echo "no Data";
            }

      }

    //Overweight
    elseif ($bmi == "overweight"){
        include '../lib/model.php';
            $model = new Model();
            $rows = $model->getOverCal(); //Return a table of Low Calories excricse & Checks for Calories between 0.1 - 1.0
            $i=1;
           ?>
        <p> We Recommend these exercises </p>
        <div class="row">
        <div class="col-md-12">
            <table class="table">

                <thead>
                <tr>

                    <th>exercise </th>
                    <th>Calories</th>

                </tr>
                </thead>
                <tbody>
        <?php
            if(!empty($rows)){

                foreach($rows as $row) {
                    ?>

                    <thead>
                    <tr>
                        <td> <?php echo $row['exercise'] ?></td>
                        <td><?php echo $row['calories']; ?></td>

                    </tr>
                    </thead>



<?php
                }
            }
            else{
                echo "no Data";
            }

      }
    //End of Overweight Section

    //Obese Section
    elseif ($bmi == "obese"){
        include '../lib/model.php';
            $model = new Model();
            $rows = $model->getObeseCal(); //Return a table of Low Calories excricse & Checks for Calories between 0.1 - 1.0
            $i=1;
           ?>
        <p> We Recommend these exercises </p>
        <div class="row">
        <div class="col-md-12">
            <table class="table">

                <thead>
                <tr>

                    <th>exercise </th>
                    <th>Calories</th>

                </tr>
                </thead>
                <tbody>
        <?php
            if(!empty($rows)){

                foreach($rows as $row) {
                    ?>

                    <thead>
                    <tr>
                        <td> <?php echo $row['exercise'] ?></td>
                        <td><?php echo $row['calories']; ?></td>

                    </tr>
                    </thead>



<?php
                }
            }
            else{
                echo "no Data";
            }

      }
    //End of obese section
    }



?>