<?php
$connection = mysqli_connect('localhost', 'root', 'Bangla1971');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'nanny_shack');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>

	