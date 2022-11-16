<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "aduan");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }


  $conn = mysqli_connect("localhost", "root", "", "aduan");

  if (isset($_POST['submit-btn'])) {

    $Nama_Pengadu = $_POST['Nama_Pengadu'];
    $Aduan_Info = $_POST['Aduan_Info'];
    $No_Tel = $_POST['No_Tel'];
    $Email = $_POST['Email'];
    $insert = "INSERT INTO aduan_tb (Nama_Pengadu,Aduan_Info,No_Tel. Email) VALUES ('$Nama_Pengadu','$Aduan_Info','$No_Tel','$Email')";	
    $run_insert = mysqli_query($conn, $insert);
    if ($run_insert === true) {
      $_SESSION['status'] = "Complaint has been submitted";
      echo "<script>window.open('display_data.php','_self');</script>";
    } else {
      echo "Failed. Try again";
    }
  }


  ?>
</body>
</html>