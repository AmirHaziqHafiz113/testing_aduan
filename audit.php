<?php
//audit function
function audittrail($conn, $action, $username)
{
    $sql = "INSERT INTO audit_trail (action, Add_By) VALUES ('" . $action . "', '" . $username . "')";
    $result = mysqli_query($conn, $sql);
    //echo $sql.'<br>';
    return $result;
}
?>