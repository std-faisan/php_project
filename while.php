<?php


// echo $num."<br>";
// echo ++$num."<br>";
// echo ++$num."<br>";
// echo ++$num."<br>";
// echo ++$num."<br>";
// echo ++$num."<br>";

$num1 = 1;
// เเสดงเลข 1-5
while($num1 <= 5){
    echo $num1."<br>";
    $num1++;
}
echo "<hr color='red'>";


$num2 = 10;
// เเสดงเลข 10-1
while($num2 >=1){
    echo $num2."<br>";
    $num2--;
}
echo "<hr color='red'>";

$num3 = 10;
// เเสดงเลข 10-100
while($num3 <=100){
    echo $num3."<br>";
    $num3 = $num3 +5;
    // $num3 +=5;
}
echo "<hr color='red'>";

$num4 = 100;
// เเสดงเลข 100-10
while($num4 >=10){
    echo $num4."<br>";
    $num4 = $num4 -10;
    // $num4 -=10;
}
echo "<hr color='red'>";


// สูตรคูณเเม่99
// จาก 1 x 12
$pre = 1;
$m = 99;
$n =12;
while($pre <= $n){
    echo $m." X ".$pre." = ".($m * $pre);
    echo "<br>";
    $pre++;
}









?>