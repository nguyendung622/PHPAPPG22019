<?php
session_start();
include_once("model/user.php");
if (!isset($_SESSION["user"]))
    header("location:login.php");
include_once("header.php")
?>
<?php include_once("nav.php") ?>
<?php
//Mã php bài số 5
echo  "<h1>Bài số 5</h1>";
?>
<button onclick="testAjax();" type="button">Test Javascript</button>
<div id="contentAjax">

</div>
<?php include_once("footer.php") ?>

<script>
    function testAjax() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("contentAjax").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "testajax.php?username=abc", true);
        xhttp.send();
    }
</script>