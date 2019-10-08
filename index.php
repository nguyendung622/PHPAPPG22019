<?php
session_start();
include_once("model/user.php");
if (!isset($_SESSION["user"]))
    header("location:login.php");
include_once("header.php")
?>
<?php include_once("nav.php") ?>
<?php
//Mã php của trang chủ
$user = unserialize($_SESSION["user"]);
echo "Xin chào bạn " . $user->fullName;
?>

<?php include_once("footer.php") ?>