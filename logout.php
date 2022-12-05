<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "aduan");
$query = "SELECT * FROM aduan_tb ORDER BY Aduan_ID DESC";
$result = mysqli_query($connect, $query);

echo "<script>window.open('index.php','_self');</script>";
session_destroy();
