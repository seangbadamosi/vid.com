<?php
$host_name = "localhost";
$username = "sean";
$password = "4321";
$database = "vid_db";


$connect = mysqli_connect($host_name, $username, $password, $database);

if ( !$connect ) {
    echo "could not connect" . mysqli_connect_error();
}

else {
    echo "connection successful";
}

?>