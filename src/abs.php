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
    <?php
    include '../lib/model.php';
    $model = new Model();
    $rows = $model->fetch();
    $i = 1;

    if(!empty($rows)){
        foreach($rows as $row){
    ?>

        <div class="excrise-section">
            <iframe width="80" height="80" src=<?php echo $row['Videolink']; ?> title="YouTube video player" frameborder="0" allowfullscreen></iframe>
            <div class="excises-section-inner">
                <h2 class="exercise-title"><?php echo $row['exercise'];?></h2>
                <h2 class="exercise-cal">1 rep = <?php echo $row['calories']; ?> calories</h2>
                <div class="admin-panel-btn">
                <a href="../pages/AdminPanel.php" class="btn">Admin Panel</a>
             </div>
         </div>
         
        </div>

            <?php
        }
    }else{
        echo "no data";
    }
    ?>
    <a href="" class="start-btn">Start</a>
</section>
<?php 
    require "../layout/footer.php";
?>
</body>
<script src="../src/scripts.js"></script>
</html>