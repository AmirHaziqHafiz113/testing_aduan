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

    function hasServices ($val) {
        global $arr_services;
        if (in_array($val, $arr_services)) {
            return 'TRUE';
        } else {
            return 'FALSE';
        }
    }
?>