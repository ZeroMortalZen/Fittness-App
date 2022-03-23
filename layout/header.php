<link rel="stylesheet" href="../css/home.css">
<header class="header">
    <section class="header-inner">
        <a href="../home.php" class="top-logo"></a>
        <div class="top-menu">
            <ul class="menu">
                <li class="menu__list">
                    <a href="../src/abs.php" class="menu__link">Abs</a>
                </li>
                <li class="menu__list">
                    <a href="../src/chest.php" class="menu__link">Chest</a>
                </li>
                <li class="menu__list">
                    <a href="../src/arms.php" class="menu__link">Arms</a>
                </li>
                <li class="menu__list">
                    <a href="../src/legs.php" class="menu__link">Legs</a>
                </li>
            </ul>
        </div>
        <?php
          if(!isset($_SESSION['username'])){
        ?>


        <div class="top-reg-log-buttons">
            <a href="./pages/register.php" class="top-register-btn">Register</a>
            <a href="./pages/login.php" class="top-login-btn">Login</a>
        </div>
        <?php
        }else{
        ?>
        <a href="../pages/logout.php" class="top-login-btn">Logout</a>
        <?php
        }
         ?>
        <a href="../pages/Dashboard.php" class="icons__acc" title="Login"></a>
        <div class="burger">
            <div class="lines line_one"></div>
            <div class="lines line_two"></div>
            <div class="lines line_three"></div>
        </div>
    </section>
