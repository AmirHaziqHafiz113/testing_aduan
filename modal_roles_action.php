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
} else if ($type == 'permission') {
    $permission_name = $_POST['permission_name'];
    $permission_description = $_POST['permission_description'];

    $insert_permission = "INSERT INTO permissions (name, description) VALUES('$permission_name','$permission_description')";
    $run_insert_permission = mysqli_query($conn, $insert_permission);

    if ($run_insert_permission === true) {
        echo "<script> alert('Record inserted successfully'); window.open('permission.php','_self');</script>";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
} else if ($type == 'role_perm') {
    $role_id = $_POST['role_id'];
    $perm_id = $_POST['perm_id'];

    $insert_role_perm = "INSERT INTO permission_role (role_id, permission_id) VALUES('$role_id','$perm_id')";
    $run_insert_role_perm = mysqli_query($conn, $insert_role_perm);

    if ($run_insert_role_perm === true) {
        echo "<script> alert('Record inserted successfully'); window.open('roles_perm.php','_self');</script>";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
} else if ($type == 'user') {
    $user_id = $_POST['user_id'];
    $role_id = $_POST['role_id'];

    $insert_user_role = "INSERT INTO user_role (user_id, role_id) VALUES('$user_id','$role_id')";
    $run_insert_user_role = mysqli_query($conn, $insert_user_role);

    if ($run_insert_user_role === true) {
        echo "<script> alert('Record inserted successfully'); window.open('user.php','_self');</script>";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
} else if ($type == 'user_list') {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $department = $_POST['department'];
    $add_by = $_POST['add_by'];

    $insert_users = "INSERT INTO users (U_Name, email, password, U_Dept, Add_By) VALUES('$user_name', '$email', '$password', '$department', '$add_by')";
    $run_insert_users = mysqli_query($conn, $insert_users);

    if ($run_insert_users === true) {
        echo "<script> alert('Record inserted successfully'); window.open('user_list.php','_self');</script>";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
} else if ($type == 'category') {
    $desc = $_POST['description'];
    $add_by = $_POST['add_by'];

    $insert_desc = "INSERT INTO category (Description, Add_By) VALUES('$desc', '$add_by')";
    $run_insert_desc = mysqli_query($conn, $insert_desc);

    if ($run_insert_desc === true) {
        echo "<script> alert('Record inserted successfully'); window.open('category.php','_self');</script>";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}
?>