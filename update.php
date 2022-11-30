<?php
$conn = mysqli_connect("localhost", "root", "", "aduan");

if (isset($_POST['update-btn'])) {
    $langkah_pencegahan = $_POST['langkah_pencegahan'];
    $insert = "INSERT INTO pencegahan (Description) VALUES('$langkah_pencegahan)";
    $run_insert = mysqli_query($conn, $insert);
    if ($run_insert === true) {
        $_SESSION['form'] = "Sign Up Completed";
        echo "<script>
      alert('Aduan telah daftar');
      window.open('display_data.php','_self');</script>";
    } else {
        echo "Failed. Try again";
    }
}

if (isset($_POST['update-btn'])) {
    $langkah_pembetulan = $_POST['langkah_pembetulan'];
    $insert2 = "INSERT INTO pembetulan (Description) VALUES('$langkah_pembetulan)";
    $run_insert1 = mysqli_query($conn, $insert2);
    if ($run_insert1 === true) {
        $_SESSION['form'] = "Sign Up Completed";
        echo "<script>
      alert('Aduan telah daftar');
      window.open('display_data.php','_self');</script>";
    } else {
        echo "Failed. Try again";
    }
}
?>