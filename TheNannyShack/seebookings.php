<?php
$con = mysqli_connect("localhost", "root");
mysqli_select_db($con,"nanny_shack");

$sql = "SELECT * FROM booking";

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
  <h1 class="headingBrown">Booking information</h1><br>
 <table width = "900" border = "2" cellpadding = "1" cellspacing = "1" id = "clients">
 <tr>
 <th>Booking ID</th>
  <th>Date</th>

    <th>Start time</th>
    <th>End time</th>
    <th>Parent Name</th>
    <th>Contact</th>
    <th>Child Name</th>
    <th>Child Age</th>
    <th>Special Condition</th>
    <th>Email</th>

  </tr>

  <?php
  while($booking = mysqli_fetch_assoc($result)){
  echo  "<tr>";
  echo "<td>".$booking['BookingID']."</td>";
  echo "<td>".$booking['Date']."</td>";

  echo "<td>".$booking['Start']."</td>";
  echo "<td>".$booking['End']."</td>";
  echo "<td>".$booking['ParentName']."</td>";
  echo "<td>".$booking['Contact']."</td>";
  echo "<td>".$booking['ChildName']."</td>";
  echo "<td>".$booking['ChildAge']."</td>";
  echo "<td>".$booking['Special_Condition']."</td>";
  echo "<td>".$booking['email']."</td>";
  echo  "</tr>";

  }
  ?>

  </table>

<p><a href="datePick.php" ><button name="insert" id="button">Booking </button> </a>
</p>


</div>
<div id="footer">
  <p> Copyright&copy; 2018. <br>

  <a href="mailto:kazia1@educbe.ab.ca" class="a">Contact Webmaster</a> </p></div>
  </div>

</body>

</html>
