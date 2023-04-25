<?php
include_once ('heads/head.startsida.php');
include_once ('nav.fot/navbar.php');
?>

    <div class="megaaccount-wrapped">
        <div class="account-wrapped">
            <div class="print-users">
                <h1> Username <br> <?php echo $_SESSION['userUid']; ?></h1>
                <h2> Email <br> <?php echo $_SESSION['userEmail']; ?></h2>
            </div>

            <div class="logout-css">
                <a href="/includes/logout.inc.php">Log out</a>
            </div>
        </div>
    </div>



<?php
include_once "errors.php";
include_once ('nav.fot/footer.php');
?>