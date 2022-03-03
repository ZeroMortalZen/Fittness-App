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
        <header class="header">
            <a href="home.html" class="logo">Logo</a>
            <div class="reg-log-buttons">
                <a href="src/register.php" class="register-btn">Register</a>
                <a href="src/login.php" class="login">Login</a>
            </div>
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="pop-menu" id="pop-menu">
                <span class="cross"></span>
                <a href="home.html" class="home-page">Home</a>
                <a href="" class="account-page">Account</a>
                <a href="" class="graph-page">Graph</a>
            </div>
        </header>
    
        <div class="section">
            <a href="src/abs.php" class="abs-section">
                <h1 class="abs-title">Abs</h1>
                <img src="img/abs.png" alt="Abs Picture">
            </a>
            <a href="src/chest.php" class="chest-section">
                <h1 class="chest-title">Chest</h1>
                <img src="img/chest.png" alt="Chest Picture">
            </a>
            <a href="src/arms.php" class="arms-section">
                <h1 class="arms-title">Arms</h1>
                <img src="img/arms.png" alt="Arms Picture">
            </a>
            <a href="src/legs.php" class="legs-section">
                <h1 class="legs-title">Legs</h1>
                <img src="img/legs.png" alt="Legs Picture">
            </a>
        </div>
    </div>
    
</body>

<script src="src/scripts.js"></script>

</html>