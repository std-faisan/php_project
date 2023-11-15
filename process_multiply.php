<?php
$a = $_POST['a'];
$m = $_POST['m'];
$n = $_POST['n'];

while($a <= $n){
    echo $m." X ".$a." = ".($m * $a);
    echo "<br>";
    $a++;
}


?>