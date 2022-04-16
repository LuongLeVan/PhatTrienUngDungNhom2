<?php
include_once './Controller/cTaiKhoan.php';
session_start();
$account = new cTaiKhoan();
if (isset($_POST['username'])) {
    $us = $_POST['username'];
}
if (isset($_POST['password'])) {
    $pw = $_POST['password'];
}
if (isset($_POST['submit'])) {
    $account->login($us, $pw);
}
if(isset($_REQUEST['logout'])){
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Image/lms-learning-management-system-concept-with-big-vector-27335395.jpg">
    <link rel="stylesheet" href="./bootrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/fontawesome.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="./CSS/header_footer.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="./bootrap/fontawesome-free-5.15.3-web/js/all.js"></script>
    <script src="./bootrap/JS/jquery.min.js"></script>
    <script src="./bootrap/JS/popper.min.js"></script>
    <script src="./bootrap/JS/bootstrap.min.js"></script>
    <title>Hệ thống học tập trực tuyến</title>
</head>

<body>
    <?php include_once './Views/header.php'; ?>
    <?php
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'dn':
                include_once './Views/vDangNhap.php';
                break;
            default:
                echo 'nothing';
                break;
        }
    } else {
    }
    ?>
    <?php include_once './Views/footer.php'; ?>
</body>

</html>