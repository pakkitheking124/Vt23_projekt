
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
        <li><a href="<?php
            if (isset($_SESSION['userid'])){
                echo "/account.php";
            } else {
                echo "/login.php";
            }
            ?>">Account</a></li>
    </ul>

    <div class="hamburger-btn"><a>☰</a></div>
</div>

<div class="mobile-nav">
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="/store.php">Store</a></li>
        <li><a href="#">About</a></li>
        <li><a href="<?php
            if (isset($_SESSION['userid'])){
                echo "/account.php";
            } else {
                echo "/login.php";
            }
            ?>">Account</a></li>
    </ul>
</div>