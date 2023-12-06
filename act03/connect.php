<?php
$con=new mysqli('localhost', 'root', '', 'studentinfo');

if($con){
    echo "";

}
else
{
    die(mysqli_error($con));

}

?>