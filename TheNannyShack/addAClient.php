<?php
session_start();

$con = mysqli_connect("localhost", "root");
mysqli_select_db($con,"nanny_shack");

if((!empty($_POST['regBtn'])) && (!empty($_POST['pass1'])) && (!empty($_POST['user']))){
	$user_id = mysqli_real_escape_string($con,$_POST['user']);
	$user_pass = mysqli_real_escape_string($con,$_POST['pass1']);
	$user_pass2 = mysqli_real_escape_string($con,$_POST['pass2']);

	$contact = mysqli_real_escape_string($con,$_POST['contact']);

	if($user_pass == $user_pass2){
		$sql = "INSERT INTO username(userName,password,contact) VALUES ('$user_id','$user_pass','$contact')";
		mysqli_query($con,$sql);

		header("location: clients.php");
	}
	else{
		$_SESSION['message'] = "Passwords do not match";
		header("location:addAClient.php");
	}
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Nanny Shack</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/styleGuide.css" rel="stylesheet" type="text/css">
</head>


<body>
<div id="container">
<div id="banner"></div>
<div class="navBar-wrap">
  <div class ="navBar">
    <ul>
			<li> <a href="clients.php" >Clients</a> </li>
      <li> <a href="nannies.php" >Nannies</a>

      </li>


      <li> <a href="childData.php" >Children</a> </li>
		 <li> <a href="seebookings.php" >Bookings</a> </li>

      <li> <a href="contacts.php" >Contact Us</a> </li>


			<li> <a href="logout.php" >Log Out</a>
			</ul></li>
    </ul>


  </div>
</div>


<div id="content">
  <h1 class="headingBrown">ADD A NEW CLIENT</h1>
 <div id = "frm2">
<form  method="POST">
        <table border="0.5" >

            <tr>

                <td><label for="user">User Name</label></td><br>
                <td><input type="text" name="user"></td><br>
            </tr>
            <tr>

                <td><label for="pass1">Password</label></td><br><br>
                <td><input type="password" name="pass1"></input></td>
            </tr>
			<tr>
			<br>
                <td><label for="pass2">Retype Password</label></td>
                <td><input type="password" name="pass2"></td>
            </tr>

			<tr>
                <td><label for="contact">Phone Number</label></td>
                <td><input type="number" name="contact"></td>
            </tr>
            <tr>

                <td><input type="submit" name = "regBtn" value="ADD" id = "button" /><br>



            </tr>
        </table>
    </form>
</div>
</div>
<div id="footer">
  <p> Copyright&copy; 2018. <br>

  <a href="mailto:kazia1@educbe.ab.ca" class="a">Contact Webmaster</a> </p></div>
  </div>

</body>

</html>
