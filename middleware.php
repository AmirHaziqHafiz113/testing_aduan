<?php
    include 'auth.php';
    function hasRole ($val) {
        global $arr_roles;
        if (in_array($val, $arr_roles)) {
            return 'TRUE';
        } else {
            return 'FALSE';
        }
    }
    function hasPermission ($val) {
        global $arr_permissions;
        if (in_array($val, $arr_permissions)) {
            return 'TRUE';
        } else {
            return 'FALSE';
        }
    }
?>