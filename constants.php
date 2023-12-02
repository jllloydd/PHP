<?php

define("maxnum", 1000);
echo maxnum;
echo "<br>";
echo constant("maxnum");
echo "<br>";

$num = 1;
function addFive(){
    GLOBAL $num;
    $num = $num + 5;
}
addFive();
echo $num;

echo "<br>";

function staticVar() {
    STATIC $num = 12;
    $num++;
    print $num;
    print("<br>");
}
staticVar();
staticVar();
staticVar();
?>