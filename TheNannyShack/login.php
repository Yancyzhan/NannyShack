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
      <li> <a href="index.php" >Home</a> </li>
      <li> <a href="information.php" >About Us</a>

      </li>


      <li> <a href="photo_gallery.php" >Photo Gallery</a> </li>
		 <li> <a href="datePick.php" >Bookings</a> </li>

      <li> <a href="contacts.php" >Contact Us</a> </li>
		<li> <a href="#" >Login</a>
		<ul>
			<li> <a href="login.php" >Member Login</a> </li>

			<li> <a href="admin_after_login.php" >Admin Login</a> </li>
			</ul></li>
    </ul>


  </div>
</div>

<?php

if(isset($_SESSION['message'])){
	echo "<div id='error'>".$_SESSION['message']."</div>";
	unset($_SESSION['message']);

}
?>

<div id="content">
<h1 class="headingBrown">LOGIN</h1>
<div id = "frm">
<form  method="POST" action="authentication.php" >
        <table border="0.5" >
            <tr>
                <td><label for="user_id">User Name</label></td><br>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label for="user_pass">Password</label></td><br>
                <td><input type="password" name="user_pass" id="user_pass"></input></td>
            </tr>

            <tr>

                <td><input type="submit" value="Submit" id = "button" /><br>



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
