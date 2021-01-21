<?php
session_start();
$con = mysqli_connect("localhost", "root");
mysqli_select_db($con,"nanny_shack");
$pid2 = $_SESSION['id'];
$sql = "SELECT * FROM username where ID = '$pid2'";

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
      <li> <a href="clientInfo.php" >Client</a> </li>
      <li> <a href="clientchild.php" >Child</a>

      </li>



		 <li> <a href="memberDate.php" >Booking</a> </li>



			<li> <a href="logout.php" >Log Out</a>


  </div>
</div>


<div id="content">
  <h1 class="headingBrown">CLIENTS INFORMATION</h1><br>
 <table width = "900" border = "2" cellpadding = "1" cellspacing = "1" id = "clients">
 <tr>
 <th>Client Username</th>
  <th>Client Password</th>

    <th>Client's Contact</th>

  </tr>

  <?php
  while($client = mysqli_fetch_assoc($result)){
  echo  "<tr>";
  echo "<td>".$client['userName']."</td>";
  echo "<td>".$client['password']."</td>";

  echo "<td>".$client['contact']."</td>";
  echo  "</tr>";

  }
  ?>

  </table>




</div>
<div id="footer">
  <p> Copyright&copy; 2018. <br>

  <a href="mailto:kazia1@educbe.ab.ca" class="a">Contact Webmaster</a> </p></div>
  </div>

</body>

</html>
