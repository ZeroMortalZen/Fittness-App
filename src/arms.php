<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arms</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <?php 
            require "../layout/header.php";
        ?>
        <nav class="mobile">
            <ul class="mobile-menu">
                <li class="mobile-menu__list">
                    <a href="../home.php" class="mobile-menu__link">Home</a>
                </li>
                <li class="mobile-menu__list">
                    <a href="../pages/Dashboard.php" class="mobile-menu__link">Account</a>
                </li>
                <li class="mobile-menu__list">
                    <a href="" class="mobile-menu__link">Graph</a>
                </li>
            </ul>
        </nav>
        </header>
    </div>
    <section class="arms-section-page">
        <h1 class="main-section-title">Arms</h1>
        <a class="start-btn" onclick="playArmsAudio()">Start</a>
        <?php
        include '../lib/model.php';
        $model = new Model();
        $rows = $model->fetchArms();
        $insert=$model->ArmsTotalBurnedCalories();
        $i = 1;

        if(!empty($rows)){
            foreach($rows as $row){
                ?>

            <div class="excrise-section">
                <img src="<?php echo $row['Videolink'];?>" class="gif">
                <div class="excises-section-inner">
                    <h2 class="exercise-title"><?php echo $row['exercise'];?></h2>
                    <h2 class="exercise-cal">1 rep = <?php echo $row['calories']; ?> calories</h2>
                    <?php
                    global $getLogged;
                    if( $getLogged == "Admin"){
                        ?>
                        <a href="../pages/AdminPanel.php" class="btn admin-btn">Admin Panel</a>
                        <?php
                    }
                    ?>
                </div>
            </div>



                <?php
            }
        }else{
            echo "no data";
        }
        ?>


        <h1 class="amount-reps">Please Enter Amount of Repetition Done per Exercise</h1>
        <form name="exercises-form" class="ex-form" method="post">
            <div class="td-section exSection">
                <h2 class="td">Triceps Dips:</h2>
                <input class="tdInput exInput" type="number" name="td" id="td" required/>
            </div>
            <div class="dpu-section exSection">
                <h2 class="dpu">Diamond Push-Ups:</h2>
                <input class="dpuInput exInput" type="number" name="dpu" id="dpu" required/>
            </div>
            <div class="dp-section exSection">
                <h2 class="dp">Diagonal Plank:</h2>
                <input class="dpInput exInput" type="number" name="dp" id="dp" required/>
            </div>
            <div class="iw-section exSection">
                <h2 class="iw">Inch-Worms:</h2>
                <input class="iwInput exInput" type="number" name="iw" id="iw" required/>
            </div>
            <div class="pu-section exSection">
                <h2 class="pu">Push-Ups:</h2>
                <input class="puInput exInput" type="number" name="pu" id="pu" required/>
            </div>
            <div class="wpu-section exSection">
                <h2 class="wpu">Wall Push-Ups:</h2>
                <input class="wpuInput exInput" type="number" name="wpu" id="wpu" required/>
            </div>
            
            <!-- Script For Top Burger -->
            <script src="../src/scripts.js"></script>

            <select name="Weekdays" >
                <option value="">--- Choose a Day ---</option>
                <option value="ArmsReps_Monday">Monday</option>
                <option value="ArmsReps_Tuesday">Tuesday</option>
                <option value="ArmsReps_Wednesday">Wednesday</option>
                <option value="ArmsReps_Thursday">Thursday</option>
                <option value="ArmsReps_Friday">Friday</option>
                <option value="ArmsReps_Saturday">Saturday</option>
                <option value="ArmsReps_Sunday">Sunday</option>
            </select>

            <button type="submit" name="submit" class="btn center-btn">Send</button>
        </form>
    </section>
    <?php 
        require "../layout/footer.php";
    ?>
    <?php
    $Weekday = filter_input(INPUT_POST, 'Weekdays', FILTER_SANITIZE_STRING);
    global $Weekday;
    //echo $Weekday;

    if($id>=0){
        return true;
    }
    else{
        $Update = false;
    }
    echo $id;


    ?>
</body>

<script src="../src/scripts.js"></script>
</html>