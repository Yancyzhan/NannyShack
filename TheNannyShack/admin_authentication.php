<?php
$username = $_POST['user_id'];
$password = $_POST['user_pass'];


$username = stripcslashes($username);
$password = stripcslashes($password);



$con = mysqli_connect("localhost", "root");
mysqli_select_db($con,"nanny_shack");



$result = mysqli_query($con,"select * from admin where admin_name = '$username' and admin_pass = '$password'") or die("Operation failed".mysqli_error());

$row = mysqli_fetch_array($result);


if($row['admin_name'] == $username && $row['admin_pass'] == $password){
	
//echo "Login success";

header("location: clients.php");
	
}

else{
	echo "Failed";
}

?>
