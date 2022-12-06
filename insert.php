<?php
// Start the session if it hasn't already been started
if (!isset($_SESSION)) {
  session_start();
}

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "aduan");

// Check if the form has been submitted
if (isset($_POST['submit-btn'])) {

  // Get the values from the form
  $Nama_Pengadu = $_POST['Nama_Pengadu'];
  $Aduan_Info = $_POST['Aduan_Info'];
  $No_Tel = $_POST['No_Tel'];
  $Email = $_POST['Email'];
  $sent = 'New';

  // Create a prepared statement with placeholders for the values
  $insert = "INSERT INTO aduan_tb (Nama_Pengadu,Aduan_Info,No_Tel,Email,Status_Desc)
    VALUES(?,?,?,?,?)";
  $stmt = mysqli_prepare($conn, $insert);

  // Check if the prepared statement was created successfully
  if ($stmt === false) {
    // If the prepared statement was not created successfully, print an error message
    printf("Error: %s\n", mysqli_error($conn));
    exit();
  }

  // Bind the values to the placeholders in the prepared statement
  mysqli_stmt_bind_param($stmt, "sssss", $Nama_Pengadu, $Aduan_Info, $No_Tel, $Email, $sent);

  // Execute the prepared statement
  mysqli_stmt_execute($stmt);

  // Check if the insert was successful
  if (mysqli_stmt_affected_rows($stmt) === 1) {
    // If the insert was successful, set a session variable and show a success message
    $_SESSION['status'] = "Sign Up Completed";
    echo "<script>
      alert('Aduan telah daftar');
      window.open('index.php','_self');</script>";
  } else {
    // If the insert was not successful, show an error message
    echo "Failed. Try again";
  }
}
?>