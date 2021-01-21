<?php
session_start();
$username = $_POST['user_id'];
$password = $_POST['user_pass'];


$username = stripcslashes($username);
$password = stripcslashes($password);



$con = mysqli_connect("localhost", "root");
mysqli_select_db($con,"nanny_shack");

$sql1 = "DELETE FROM username WHERE userName = '$username' and password = '$password'";
if(mysqli_query($con,$sql1)){
echo "Success";
header("location:clients.php");
}

else{
  echo "Failed";
}


?>
