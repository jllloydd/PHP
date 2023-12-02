<?php
    $initialMessage = "This is to test the function of squaring two. <br>";
    print($initialMessage);
    $num = 2;
    print("The number to be squared is $num. <br>");

function square($num){
    $num = $num**2;
    return $num;
}

$numsquared = square($num);

print("Using the function, it will be squared to $numsquared");
?> 