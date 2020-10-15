<?php

include("connection.php");

    $id = $_GET['id'];
    $query = "DELETE FROM `cruddata` WHERE id = $id";
    mysqli_query($conn,$query);
    header('location:display.php'); // Redirect the display page
?>