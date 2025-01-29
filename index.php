<?php
$page = $_GET['page'];
$act = $_GET['act'];
?>
<!doctype html>
<html lang="en">


<?php require_once "includes/head.php"; ?>
<?php require_once "includes/conn.php"; ?>

<body>
    <?php require_once "includes/navbar.php"; ?>

    
    <?php
    if ($page == "" || $page == 'home') {
        include "home.php";
    } else if ($page == "organization") {
        include "organization.php";
    } else if ($page == "lecturer") {
        include "lecturer.php";
    } else if ($page == "project") {
        include "project.php";
    }
    ?>

    <?php require_once "includes/footer.php"; ?>
    
</body>
</html>