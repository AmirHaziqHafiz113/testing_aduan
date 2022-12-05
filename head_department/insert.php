<?php
  $conn = mysqli_connect("localhost", "root", "", "aduan");

  if (isset($_POST['submit-btn'])) {

    $Nama_Pengadu = $_POST['Nama_Pengadu'];
    $Aduan_Info = $_POST['Aduan_Info'];
    $No_Tel = $_POST['No_Tel'];
    $Email = $_POST['Email'];
    $insert = "INSERT INTO aduan_tb (Nama_Pengadu,Aduan_Info,No_Tel,Email,Status_ID)
    VALUES('$Nama_Pengadu','$Aduan_Info','$No_Tel','$Email', '1')";
    $run_insert = mysqli_query($conn, $insert);
    if ($run_insert === true) {
      $_SESSION['status'] = "Sign Up Completed";
      echo "<script>
      alert('Aduan telah daftar');
      window.open('index.php','_self');</script>";
    } else {
      echo "Failed. Try again";
    }
  }
  ?>
  