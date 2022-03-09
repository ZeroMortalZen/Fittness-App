

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abs</title>
    <link rel="stylesheet" href="../css/home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="container">
    <header class="header">
        <a href="../home.php" class="logo">Logo</a>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="pop-menu" id="pop-menu">
            <span class="cross"></span>
            <a href="../home.php" class="home-page">Home</a>
            <a href="" class="account-page">Account</a>
            <a href="" class="graph-page">Graph</a>
        </div>
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
            <div class="update-delete-buttons">
                <a href="../pages/AdminPanel.php" class="btn">Control Panel</a>
            </div>
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
        
    
</body>

<script src="../src/scripts.js"></script>
</html>