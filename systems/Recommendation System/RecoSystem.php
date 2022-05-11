<?php
if ($bmi== "underweight" ||$bmi =="normal"||$bmi =="overweight"||$bmi =="obese"){
    $message = "If your $bmi you should try this exercise";
    if($bmi == "underweight"){
        //if your in abs page do this
        include '../lib/model.php';
        $model = new Model();
        $rows = $model->getLowCal(); //Return a table of Low Calories excricse & Checks for Calories between 0.1 - 1.0
        $i=1;
?>
        <div class="recommandation-section">
            <h2 class="recommandation-title">We Recommend these exercises</h2>
            <div class="table">
                <div class="exerciseANDcalories">
                    <h3 class="recom-exercise-title">Exercise</h3>
                    <h3 class="exercise-calories-title">Calories</h3>
                </div>
                <?php
                    if(!empty($rows)){
                        foreach($rows as $row) {
                ?>
                <div class="exercise-name-row">
                    <h3 class="exercise-name"><?php echo $row['exercise'] ?></h3>
                    <h3 class="exercise-calories"><?php echo $row['calories']; ?></h3>
                </div>
                <?php 
                        }
                    }
                    else{
                        echo "no Data";
                    }
                ?>
            </div>
        </div>
    <?php 
        } // if $bmi == underweight CLOSE braket

    //Normal Section
    elseif($bmi == "normal"){
        //if your in abs page do this
        include '../lib/model.php';
        $model = new Model();
        $rows = $model->getNormalCal(); //Return a table of Low Calories excricse & Checks for Calories between 0.1 - 1.0
        $i=1;
    ?>
        <div class="recommandation-section">
            <h2 class="recommandation-title">We Recommend these exercises</h2>
            <div class="table">
                <div class="exerciseANDcalories">
                    <h3 class="recom-exercise-title">Exercise</h3>
                    <h3 class="exercise-calories-title">Calories</h3>
                </div>
                <?php
                    if(!empty($rows)){
                        foreach($rows as $row) {
                ?>
                <div class="exercise-name-row">
                    <h3 class="exercise-name"><?php echo $row['exercise'] ?></h3>
                    <h3 class="exercise-calories"><?php echo $row['calories']; ?></h3>
                </div>
                <?php 
                        }
                    }
                    else{
                        echo "no Data";
                    }
                ?>
            </div>
        </div>
    <?php 
        } // if $bmi == underweight CLOSE braket

    //Overweight
    elseif($bmi == "overweight"){
        //if your in abs page do this
        include '../lib/model.php';
        $model = new Model();
        $rows = $model->getOverCal(); //Return a table of Low Calories excricse & Checks for Calories between 0.1 - 1.0
        $i=1;
    ?>
        <div class="recommandation-section">
            <h2 class="recommandation-title">We Recommend these exercises</h2>
            <div class="table">
                <div class="exerciseANDcalories">
                    <h3 class="recom-exercise-title">Exercise</h3>
                    <h3 class="exercise-calories-title">Calories</h3>
                </div>
                <?php
                    if(!empty($rows)){
                        foreach($rows as $row) {
                ?>
                <div class="exercise-name-row">
                    <h3 class="exercise-name"><?php echo $row['exercise'] ?></h3>
                    <h3 class="exercise-calories"><?php echo $row['calories']; ?></h3>
                </div>
                <?php 
                        }
                    }
                    else{
                        echo "no Data";
                    }
                ?>
            </div>
        </div>
    <?php 
        } // if $bmi == underweight CLOSE braket

    //Obese Section
    elseif($bmi == "obese"){
        //if your in abs page do this
        include '../lib/model.php';
        $model = new Model();
        $rows = $model->getObeseCal(); //Return a table of Low Calories excricse & Checks for Calories between 0.1 - 1.0
        $i=1;
    ?>
        <div class="recommandation-section">
            <h2 class="recommandation-title">We Recommend these exercises</h2>
            <div class="table">
                <div class="exerciseANDcalories">
                    <h3 class="recom-exercise-title">Exercise</h3>
                    <h3 class="exercise-calories-title">Calories</h3>
                </div>
                <?php
                    if(!empty($rows)){
                        foreach($rows as $row) {
                ?>
                <div class="exercise-name-row">
                    <h3 class="exercise-name"><?php echo $row['exercise'] ?></h3>
                    <h3 class="exercise-calories"><?php echo $row['calories']; ?></h3>
                </div>
                <?php 
                        }
                    }
                    else{
                        echo "no Data";
                    }
                ?>
            </div>
        </div>
    <?php 
        } // if $bmi == underweight CLOSE braket
    ?>
<?php 
} // First if statement CLOSE braket
?>
        
        


        