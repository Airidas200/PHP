<?php


$a = array("-10","0","2","9","-5");

rsort($a);

$arrlength = count($a);
for($x = 0; $x < $arrlength; $x++) {
    echo $a[$x];
    echo ",";
}
?>