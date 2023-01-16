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
  $service_id = $_POST['service_id'];
  $recaptcha = $_POST['g-recaptcha-response'];
  $secret_key = '6Lc7ImcjAAAAAI0WdaxwxJp04yrgPsoW4TEr44dD';
  $url = 'https://www.google.com/recaptcha/api/siteverify?secret='. $secret_key . '&response=' . $recaptcha;
  $response = file_get_contents($url);
  $response = json_decode($response);
  if ($response->success == true) {
    $insert = "INSERT INTO aduan_tb (Service_ID,Nama_Pengadu,Aduan_Info,No_Tel,Email,Status_Desc)
    VALUES(?,?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $insert);
  } else {
    echo "<script>
      alert('Google reCAPTCHA failed. Please try again.');
      window.open('index.php','_self');</script>";
  }
  $sent = 'New';

  // Check if the prepared statement was created successfully
  if ($stmt === false) {
    // If the prepared statement was not created successfully, print an error message
    printf("Error: %s\n", mysqli_error($conn));
    exit();
  }

  // Bind the values to the placeholders in the prepared statement
  mysqli_stmt_bind_param($stmt, "sssiss", $service_id, $Nama_Pengadu, $Aduan_Info, $No_Tel, $Email, $sent);

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