<?php
$servername = "localhost";
$username = "id8990209_akademik";
$password = "akademik";
$dbname = "id8990209_akademik";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>