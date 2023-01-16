<?php
    $conn = mysqli_connect("localhost", "root", "", "aduan");
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if (!isset($_SESSION['id'])) {
        echo "<script>alert('No Permission');</script>";
        // session_destroy();
        echo "<script>window.open('login.php','_self')</script>";
    }

    $id = $_SESSION['id'];
    $q_check_user = "SELECT * FROM users WHERE id = $id";
    $result_check_user = mysqli_query($conn, $q_check_user);
    $arr_permissions = [];
    $arr_roles = [];
    $arr_services = [];

    if ((mysqli_num_rows($result_check_user) > 0)) {
        $q_check_roles = "SELECT user_role.id, user_role.role_id, roles.id, roles.name AS role_name FROM user_role INNER JOIN roles ON user_role.role_id = roles.id WHERE user_id = $id";
        $result_check_roles = mysqli_query($conn, $q_check_roles);
        
        if ((mysqli_num_rows($result_check_roles) > 0)) {

            while ($row = mysqli_fetch_assoc($result_check_roles)) {
                array_push($arr_roles, $row["role_name"]);

                $role_id = $row["role_id"];

                $q_check_service = "SELECT service_role.id, service_role.Service_ID, service.Description, service_role.role_id, roles.id, roles.name AS role_name FROM service_role INNER JOIN roles ON service_role.role_id = roles.id
                INNER JOIN service ON service.Service_ID = service_role.Service_ID WHERE service_role.role_id = $role_id;";
                $result_check_service = mysqli_query($conn, $q_check_service);
                if ((mysqli_num_rows($result_check_service) > 0)) {
                    while ($row = mysqli_fetch_assoc($result_check_service)) {
                        array_push($arr_services, $row["Service_ID"]);
                    }
                }
                $q_check_permission = "SELECT permission_role.permission_id, permissions.id, permissions.name AS perm_name FROM permission_role INNER JOIN permissions ON permission_role.permission_id = permissions.id WHERE permission_role.role_id = $role_id";
                $result_check__permission = mysqli_query($conn, $q_check_permission);
                while ($row_perm = mysqli_fetch_assoc($result_check__permission)) {
                    array_push($arr_permissions, $row_perm["perm_name"]);
                }
            }
        } else {
            echo "<script>alert('No Permission');</script>";
            session_destroy();
            echo "<script>window.open('login.php','_self')</script>";
        }
    } else {
        echo "<script>alert('No Permission');</script>";
        session_destroy();
        echo "<script>window.open('login.php','_self')</script>";
    }
?>