<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "aduan");
$query = "SELECT * FROM content ORDER BY ID DESC";
$result = mysqli_query($connect, $query);

echo "<script>window.open('login.php','_self');</script>";
session_destroy();
