<?php
session_start();
$date = $_POST['pDate'];
$con = mysqli_connect("localhost", "root");
mysqli_select_db($con,"nanny_shack");

$sql ="select * from current_schedule where Date = '$date'";

$result = mysqli_query($con,$sql);

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
      <li> <a href="index.php" >Home</a> </li>
      <li> <a href="information.php" >About Us</a>

      </li>


      <li> <a href="index.php" >Photo Gallery</a> </li>
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


<div id="content">
  <h1 class="headingBrown">CHECK AVAILABILITY</h1><br>
 <table width = "900" border = "2" cellpadding = "1" cellspacing = "1" id = "clients">
 <tr>
 <th>Date</th>
  <th>Hour</th>

    <th>Availability</th>

  </tr>

  <?php
  while($cal = mysqli_fetch_assoc($result)){
   $d = $cal['Date'];
   $h = $cal['Hour'];
   $a = $cal['Availability'];
 if($a >= 40){
	 $a = "Available";
 }
 else{

	 $a = "Unavailable";
 }


 if($h <= 12){
	$hS = (string)$h;
	$hS  .= " am";
 }
 else {
	 $hS = (string)($h - 12);
	 $hS .= " pm";
 }

  echo  "<tr>";
  echo "<td>".$d."</td>";
  echo "<td>".$hS."</td>";

  echo "<td>".$a."</td>";
  echo  "</tr>";

  }
  ?>

  </table>

<p><a href="bookings.php" ><button name="insert" id="button">BOOK</button> </a>



</div>
<div id="footer">
  <p> Copyright&copy; 2014. <br>

  <a href="mailto:kazia1@educbe.ab.ca" class="a">Contact Webmaster</a> </p></div>
  </div>

</body>

</html>
