<?php
session_start();
$connection = new mysqli("localhost", "root", "", "aduan");

if ($connection->connect_error) {
    die("Connection failed" . $connection->connect_error);
} else

    $username = $_REQUEST['user'];
$password = $_REQUEST['password'];
$query = "SELECT * from users WHERE U_Name='$username' AND password='$password'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

$empty = mysqli_num_rows($result);


if ($empty == 0) {
    echo '<script>
        alert("password salah");
        window.location="login.php";
    </script>';
} else {
    $_SESSION['sessionname'] = $username;
    $_SESSION['id'] = $row['id'];
    echo "<script>alert('WELCOME $username to aduan'); window.location.href='display_data.php'; </script>";

}
?>