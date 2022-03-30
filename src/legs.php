<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legs</title>
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
    <section class="legs-section-page">
        <h1 class="main-section-title">Legs</h1>
        <a href="" class="start-btn">Start</a>
        <?php
        include '../lib/model.php';
        $model = new Model();
        $rows = $model->fetchLegs();
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





                <?php
            }
        }else{
            echo "no data";
        }
        ?>


        <h1 class="amount-reps">Please Enter Amount of Repetition Done per Exercise</h1>
        <form name="exercises-form" class="ex-form" method="post">
            <div class="sd-section exSection">
                <h2 class="sd">Side Hop:</h2>
                <input class="sdInput exInput" type="text" name="sd" id="sd" required/>
            </div>
            <div class="s-section exSection">
                <h2 class="s">Squats:</h2>
                <input class="sInput exInput" type="text" name="s" id="s" required/>
            </div>
            <div class="bl-section exSection">
                <h2 class="bl">Backward Lunge:</h2>
                <input class="blInput exInput" type="text" name="bl" id="bl" required/>
            </div>
            <div class="dkl-section exSection">
                <h2 class="dkl">Donkey Kicks Left:</h2>
                <input class="dklInput exInput" type="text" name="dkl" id="dkl" required/>
            </div>
            <div class="dkr-section exSection">
                <h2 class="dkr">Donkey Kicks Right:</h2>
                <input class="dkrInput exInput" type="text" name="dkr" id="dkr" required/>
            </div>
            <div class="wkr-section exSection">
                <h2 class="wkr">Wall Calf Raises:</h2>
                <input class="wkrInput exInput" type="text" name="wkr" id="wkr" required/>
            </div>
            <button type="submit" name="submit" class="btn center-btn">Send</button>
        </form>
    </section>
    <?php 
        require "../layout/footer.php";
    ?>
</body>

<script src="../src/scripts.js"></script>
</html>