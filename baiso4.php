<?php include_once("header.php") ?>
<?php include_once("nav.php") ?>

<?php
#Code bài số 4
include_once("model/book.php");
$book = new Book(50, "OOP in PHP", "ndungithue", 2019);
$book->display();
?>

<?php include_once("footer.php") ?>