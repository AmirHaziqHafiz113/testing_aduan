<?php
session_start();
$connection= new mysqli("localhost","root","","aduan");

    if ($connection->connect_error){
    die("Connection failed".$connection->connect_error);
     }
    else 

    $username= $_REQUEST['user']; 
    $password=$_REQUEST['password'];
    $query="SELECT * from users WHERE U_Name='$username' AND U_Password='$password'";
	$result= mysqli_query($connection,$query);
	$empty= mysqli_num_rows($result);


if($empty==0){ 
    echo '<script>
        alert("password salah");
        window.location="login.php";
    </script>';
}

else {  
    $_SESSION['sessionname']=$username;
    echo "<script>alert('WELCOME .$username. to aduan'); window.location.href='display_data.php'; </script>";

}
?>