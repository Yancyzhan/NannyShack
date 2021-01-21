<?php
session_start();
$searc = $_POST['cAge'];
$con = mysqli_connect("localhost", "root");
mysqli_select_db($con,"nanny_shack");

$sql1 = "SELECT * FROM children where ChildAge = '$searc'";

$result = mysqli_query($con,$sql1);

//$res = mysqli_fetch_assoc($result);


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
  <h1 class="headingBrown">SEARCH RESULTS</h1><br>
 <table width = "900" border = "2" cellpadding = "1" cellspacing = "1" id = "clients">
 <tr>

  
	<th>Child's Name</th>
	<th>Child's Age</th>
	<th>Child's Condition</th>
	 <th>Emergency Contact</th>

  </tr>

  <?php
  while($client = mysqli_fetch_assoc($result)){
  echo  "<tr>";
  

  echo "<td>".$client['ChildName']."</td>";
   echo "<td>".$client['ChildAge']."</td>";
    echo "<td>".$client['childcondition']."</td>";
	echo "<td>".$client['econtact']."</td>";
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
