<?php
$conn = mysqli_connect("localhost", "root", "", "aduan");
$current_timestamp = date('Y/m/d H:i:s');
$user_id = $_POST['user_id'];
$pencegahan = $_POST['pencegahan'];
$pembetulan = $_POST['pembetulan'];
$Aduan_ID = $_POST['Aduan_ID'];
$Nama_Pengadu = $_POST['Nama_Pengadu'];
$No_Tel = $_POST['No_Tel'];
$Email = $_POST['Email'];
$langkah = $_POST['langkah'];
$btn_val = $_POST['btn_val'];

$q_check_pembetulan = "SELECT * FROM pembetulan WHERE Aduan_ID = $Aduan_ID";
$q_check_pencegahan = "SELECT * FROM pencegahan WHERE Aduan_ID = $Aduan_ID";
$q_check_aduan = "SELECT * FROM aduan_tb WHERE Aduan_ID = $Aduan_ID";

$result_check_pembetulan = mysqli_query($conn, $q_check_pembetulan);
$result_check_pencegahan = mysqli_query($conn, $q_check_pencegahan);
$result_check_aduan = mysqli_query($conn, $q_check_aduan);
$row_aduan = mysqli_fetch_array($result_check_aduan);

if ($row_aduan['Status_Desc'] == 'Pending') {
    $sql_aduan = "UPDATE aduan_tb SET langkah = '$langkah', Timestamp_In_Progress = '$current_timestamp', Status_Desc = 'In Progress', complaint_cond = 'In Progress' WHERE Aduan_ID = $Aduan_ID";
}

if ($btn_val == 'Close')  {
    $sql_aduan = "UPDATE aduan_tb SET langkah = '$langkah', Timestamp_Closed = '$current_timestamp', Status_Desc = 'Closed', complaint_cond = 'Closed' WHERE Aduan_ID = $Aduan_ID";
} else if ($btn_val == 'Amend') {
    $sql_aduan = "UPDATE aduan_tb SET langkah = '$langkah', Timestamp_Amend = '$current_timestamp', Status_Desc = 'Pending', complaint_cond = 'Amend' WHERE Aduan_ID = $Aduan_ID";

} else if ($btn_val == 'submit') {
    $sql_aduan = "UPDATE aduan_tb SET langkah = '$langkah', Timestamp_In_Progress = '$current_timestamp', Status_Desc = 'In Progress', complaint_cond = 'Amend' WHERE Aduan_ID = $Aduan_ID";
}


if ((mysqli_num_rows($result_check_pembetulan) > 0) && (mysqli_num_rows($result_check_pencegahan) > 0)) {
    $sql_pembetulan = "UPDATE pembetulan SET description = '$pembetulan' WHERE User_ID = $user_id";
    $sql_pencegahan = "UPDATE pencegahan SET description = '$pencegahan' WHERE User_ID = $user_id";
    
    
    if ($conn->query($sql_pembetulan) === TRUE && $conn->query($sql_pencegahan) === TRUE && $conn->query($sql_aduan) === TRUE) {
        echo "<script> alert('Record updated successfully'); window.open('form.php?id=$Aduan_ID','_self');</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    $insert_pembetulan = "INSERT INTO pembetulan (Aduan_ID, User_ID, Description, Add_By) VALUES('$Aduan_ID','$user_id','$pembetulan','$Nama_Pengadu')";
    $run_insert_pembetulan = mysqli_query($conn, $insert_pembetulan);

    $insert_pencegahan = "INSERT INTO pencegahan (Aduan_ID, User_ID, Description, Add_By) VALUES('$Aduan_ID','$user_id','$pencegahan','$Nama_Pengadu')";
    $run_insert_pencegahan = mysqli_query($conn, $insert_pencegahan);

    if ($run_insert_pembetulan === true && $run_insert_pencegahan === true  && $conn->query($sql_aduan) === TRUE) {
        echo "<script> alert('Record inserted successfully'); window.open('form.php?id=$Aduan_ID','_self');</script>";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}



?>