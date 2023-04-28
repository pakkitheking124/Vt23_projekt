<?php
session_start();
?>

<div class="nav-wrapped">
    <ul>
        <li>
            <img src="../images/loga.png" alt="">
        </li>
    </ul>

    <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/store.php">Store</a></li>
        <li><a href="#">About</a></li>

        <?php
        if (isset($_SESSION['userid'])) {
            echo "<li><a href=\"/account.php\">" . $_SESSION['userUid'] . "</a></li>";
        } else {
            echo "<li><a href=\"/login.php\">Login</a></li>";
        }

        ?>

    </ul>

    <div class="hamburger-btn"><a>☰</a></div>
</div>

<div class="mobile-nav">
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="/store.php">Store</a></li>
        <li><a href="#">About</a></li>

        <?php
        if (isset($_SESSION['userid'])) {
            echo "<li><a href=\"/account.php\">" . $_SESSION['userUid'] . "</a></li>";
        } else {
            echo "<li><a href=\"/login.php\">Login</a></li>";
        }

        ?>


    </ul>
</div>