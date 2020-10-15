<?php
$conn = mysqli_connect("localhost", "root", "", "crud"); // DATABASE name is crud and TABLE name is cruddata

if($conn){
    echo "";
}
else{
    die("ERROR: COULD NOT CONNECT" .mysqli_connect_error());
}
?>