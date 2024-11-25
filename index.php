<?php

include("./connect.php");

$fetch_query = "SELECT * FROM `uploads_tb`";

$send_query = mysqli_query($connect, $fetch_query);

$recipes = mysqli_fetch_all($send_query,MYSQLI_ASSOC) ;
?>