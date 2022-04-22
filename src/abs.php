<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abs</title>
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
    
<section class="abs-section-page">
    <h1 class="main-section-title">Abs</h1>
    <a class="start-btn" onclick="playAudio()">Start</a>
    <?php
    include '../lib/model.php';

    $model = new Model();
    $rows = $model->fetch();
    $insert=$model->MondayTotalBurnedCalories();
    $i = 1;

    if(!empty($rows)){
        foreach($rows as $row){
    ?>
        <div class="excrise-section">
            <img src="<?php echo $row['Videolink'];?>" class="gif">
            <div class="excises-section-inner">
                <h2 class="exercise-title"><?php echo $row['exercise'];?></h2>
                <h2 class="exercise-cal">1 rep = <?php echo $row['calories']; ?> calories</h2>
                <a href="../pages/AdminPanel.php" class="btn admin-btn">Admin Panel</a>
            </div>
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
        <div class="jj-section exSection">
            <h2 class="jj">Jumping Jacks:</h2>
            <input class="jjInput exInput" type="text" name="jj" id="jj" required/>
        </div>
        <div class="ac-section exSection">
            <h2 class="ac">Abdominal Crunches:</h2>
            <input class="acInput exInput" type="text" name="ac" id="ac" required/>
        </div>
        <div class="mc-section exSection">
            <h2 class="mc">Mountain Climber:</h2>
            <input class="mcInput exInput" type="text" name="mc" id="mc" required/>
        </div>
        <div class="lr-section exSection">
            <h2 class="lr">Leg Raises:</h2>
            <input class="lrInput exInput" type="text" name="lr" id="lr" required/>
        </div>
        <div class="p-section exSection">
            <h2 class="p">Plank:</h2>
            <input class="pInput exInput" type="text" name="p" id="p" required/>
        </div>
        <div class="ht-section exSection">
            <h2 class="ht">Heel Touch:</h2>
            <input class="htInput exInput" type="text" name="ht" id="ht" required/>
        </div>

        <select name="Weekdays" >
            <option value="">--- Choose a Day ---</option>
            <option value="AbsReps_Monday">Monday</option>
            <option value="AbsReps_Tuesday">Tuesday</option>
            <option value="AbsReps_Wednesday">Wednesday</option>
            <option value="AbsReps_Thursday">Thursday</option>
            <option value="AbsReps_Friday">Friday</option>
            <option value="AbsReps_Saturday">Saturday</option>
            <option value="AbsReps_Sunday">Sunday</option>
        </select>
        <button type="submit" name="submit" class="btn center-btn">Send</button>

    </form>
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
</section>
<?php 
    require "../layout/footer.php";
?>
</body>
<script src="../src/scripts.js"></script>
</html>