<?php
$con = mysqli_connect("localhost", "root", "", "Ecommer_Fullstack");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "<script>('Connection Successful');</script>";
}

?>