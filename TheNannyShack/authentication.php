<?php
session_start();
$username = $_POST['user_id'];
$password = $_POST['user_pass'];


$username = stripcslashes($username);
$password = stripcslashes($password);



$con = mysqli_connect("localhost", "root");
mysqli_select_db($con,"nanny_shack");



$result = mysqli_query($con,"select * from username where userName = '$username' and password = '$password'") or die("Operation failed".mysqli_error());

$row = mysqli_fetch_assoc($result);


if($row['userName'] == $username && $row['password'] == $password){

	$_SESSION['id'] = $row['ID'];
	$_SESSION['pd'] = $row['ID'];

//echo "Login success";

header("location: clientInfo.php");

}

else{

	header("location: login.php");
}

?>
