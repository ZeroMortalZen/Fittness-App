<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="main-page">
            <?php 
                require "layout/header.php";
            ?>
            <div class="offer">
                <h1 class="offer__title">
                    We provide a good fitness program with fast progress
                </h1>
                <p class="offer__text">
                    Interesting app that allows to view your progress, with interactive exercises 
                </p>
                <a href="#section" class="offer__btn">Fitness</a>
            </div>
            <a href="#section" class="arrow-down"></a>
            <nav class="mobile">
                <ul class="mobile-menu">
                    <li class="mobile-menu__list">
                        <a href="../home.php" class="mobile-menu__link">Home</a>
                    </li>
                    <li class="mobile-menu__list">
                        <a href="./pages/Dashboard.php" class="mobile-menu__link">Account</a>
                    </li>
                    <li class="mobile-menu__list">
                        <a href="" class="mobile-menu__link">Graph</a>
                    </li>
                </ul>
            </nav>
            </header>
        </div>
        

        <h1 class="main-home-title">Choose The Section you want</h1>
        <div class="section" id="section">
            <a href="src/abs.php" class="abs-section">
                <h1 class="abs-title">Abs</h1>
                <img src="img/abs.png" alt="Abs Picture" class="abs-image">
            </a>
            <a href="src/chest.php" class="chest-section">
                <h1 class="chest-title">Chest</h1>
                <img src="img/chest.png" alt="Chest Picture" class="chest-image">
            </a>
            <a href="src/arms.php" class="arms-section">
                <h1 class="arms-title">Arms</h1>
                <img src="img/arms.png" alt="Arms Picture" class="arms-image">
            </a>
            <a href="src/legs.php" class="legs-section">
                <h1 class="legs-title">Legs</h1>
                <img src="img/legs.png" alt="Legs Picture" class="legs-image">
            </a>
        </div>
    </div>
    <?php 
        require "layout/footer.php";
    ?>
</body>

<script src="src/scripts.js"></script>
</html>