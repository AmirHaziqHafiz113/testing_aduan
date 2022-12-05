<?php
  $conn = mysqli_connect("localhost", "root", "", "aduan");

  if (isset($_POST['submit-btn'])) {

    $Nama_Pengadu = $_POST['Nama_Pengadu'];
    $Aduan_Info = $_POST['Aduan_Info'];
    $No_Tel = $_POST['No_Tel'];
    $Email = $_POST['Email'];
    $sent = 1;

    // Create a prepared statement with placeholders for the values
    $insert = "INSERT INTO aduan_tb (Nama_Pengadu,Aduan_Info,No_Tel,Email,Status_ID)
    VALUES(?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $insert);

    // Bind the values to the placeholders in the prepared statement
    mysqli_stmt_bind_param($stmt, "sssis", $Nama_Pengadu, $Aduan_Info, $No_Tel, $Email, $sent);

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) === 1) {
      $_SESSION['status'] = "Sign Up Completed";
      echo "<script>
      alert('Aduan telah daftar');
      window.open('index.php','_self');</script>";
    } else {
      echo "Failed. Try again";
    }
  }
  ?>