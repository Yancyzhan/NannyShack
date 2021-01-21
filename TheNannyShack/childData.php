<?php
$con = mysqli_connect("localhost", "root");
mysqli_select_db($con,"nanny_shack");

$sql = "SELECT * FROM children";

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
      <li> <a href="clients.php" >Clients</a> </li>
      <li> <a href="nannies.php" >Nannies</a>

      </li>


      <li> <a href="childData.php" >Children</a> </li>
		 <li> <a href="seebookings.php" >Bookings</a> </li>

     <li> <a href="#" >Search</a>
		<ul>
			<li> <a href="search.php" >Search By Parent</a> </li>

			<li> <a href="searchChild.php" >Search By Child</a>
			</li>

			</ul></li>
			<li> <a href="logout.php" >Log Out</a>
			</li>
    </ul>


  </div>
</div>


<div id="content">
  <h1 class="headingBrown">CHILDREN INFORMATION</h1><br>
 <table width = "900" border = "2" cellpadding = "1" cellspacing = "1" id = "clients">
 <tr>
 <th>Parent Name</th>
  <th>Child Name</th>

    <th>Child's Age</th>
	 <th>Special Condition</th>
	  <th>Emergency Contact</th>


  </tr>

  <?php
  while($child = mysqli_fetch_assoc($result)){
  $pName = $child['PID'];

  $name = mysqli_query($con,"select * from username where ID = '$pName'");
  $parent = mysqli_fetch_assoc($name);
  echo  "<tr>";
   echo "<td>".$parent['userName']."</td>";
  echo "<td>".$child['ChildName']."</td>";
  echo "<td>".$child['ChildAge']."</td>";

  echo "<td>".$child['childcondition']."</td>";
   echo "<td>".$child['econtact']."</td>";
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
