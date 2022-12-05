<?php
$conn = mysqli_connect("localhost", "root", "", "aduan");

$type = $_GET['type'];


if ($type == 'role') {
    $role_name = $_POST['role_name'];
    $role_description = $_POST['role_description'];

    $insert_role = "INSERT INTO roles (name, description) VALUES('$role_name','$role_description')";
    $run_insert_role = mysqli_query($conn, $insert_role);

    if ($run_insert_role === true) {
        echo "<script> alert('Record inserted successfully'); window.open('roles.php','_self');</script>";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}
?>