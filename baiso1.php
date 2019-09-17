<?php include_once("header.php") ?>
<?php include_once("nav.php") ?>

<?php
define('PI', '3.14');
/**
 * Tính diện tích hình tròn
 * @param $radius Bán kính hình tròn
 * @return Diện tích hình tròn có bán kính là $radius
 */
function squareOfCircle($radius)
{
    $s = M_PI * pow($radius, 2);
    return $s;
}
function sum($n)
{
    $s = 0;
    for ($i = 0; $i <= $n; $i++) {
        $s += $i;
    }
    return $s;
}
function displayToDay()
{
    $dayOfWeek = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wendesday",
        "Thursday",
        "Friday",
        "Saturday"
    ];
    $day = date("w");
    return $dayOfWeek[$day];
}
$r = 5;
$s = squareOfCircle($r);
echo "<h3>Diện tích hình tròn bán kính $r là $s</h3>";
$n = 5;
$tong = sum($n);
echo "<h3>Tổng của $n số đầu tiên là $tong</h3>";
echo "Hôm nay là " . displayToDay();
?>

<?php include_once("footer.php") ?>