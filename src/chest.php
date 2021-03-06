<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chest</title>
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
    <section class="chest-section-page">
        <h1 class="main-section-title">Chest</h1>
        <a class="start-btn" onclick="playChestAudio()">Start</a>
        <?php
        include '../lib/model.php';
        $model = new Model();
        $rows = $model->fetchChest();
        $insert=$model->ChestTotalBurnedCalories();
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
            <div class="ipu-section exSection">
                <h2 class="ipu">Incline Push-Ups:</h2>
                <input class="ipuInput exInput" type="number" name="ipu" id="ipu" required/>
            </div>
            <div class="kpu-section exSection">
                <h2 class="kpu">Knee Push-Ups:</h2>
                <input class="kpuInput exInput" type="number" name="kpu" id="kpu" required/>
            </div>
            <div class="pu-section exSection">
                <h2 class="pu">Push-Ups:</h2>
                <input class="puInput exInput" type="number" name="pu" id="pu" required/>
            </div>
            <div class="wapu-section exSection">
                <h2 class="wapu">Wide Arms Push-Ups:</h2>
                <input class="wapuInput exInput" type="number" name="wapu" id="wapu" required/>
            </div>
            <div class="cs-section exSection">
                <h2 class="cos">Cobra Strech:</h2>
                <input class="cosInput exInput" type="number" name="cos" id="cos" required/>
            </div>
            <div class="ces-section exSection">
                <h2 class="ces">Chest Strech:</h2>
                <input class="cesInput exInput" type="number" name="ces" id="ces" required/>
            </div>
            <!-- Script For Top Burger -->
            <script src="../src/scripts.js"></script>

            <select name="Weekdays" >
                <option value="">--- Choose a Day ---</option>
                <option value="ChestReps_Monday">Monday</option>
                <option value="ChestReps_Tuesday">Tuesday</option>
                <option value="ChestReps_Wednesday">Wednesday</option>
                <option value="ChestReps_Thursday">Thursday</option>
                <option value="ChestReps_Friday">Friday</option>
                <option value="ChestReps_Saturday">Saturday</option>
                <option value="ChestReps_Sunday">Sunday</option>
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