<?php
session_start();





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
  <h1 class="headingBrown">SEARCH CRITERIA<h1>
<p><a href="searchCName.php" ><button name="search" id="button">SEARCH BY NAME</button> </a></p>
<p><a href="searchCAge.php" ><button name="search" id="button">SEARCH BY AGE</button> </a></p>
</div>
</div>
<div id="footer">
  <p> Copyright&copy; 2018. <br>

  <a href="mailto:kazia1@educbe.ab.ca" class="a">Contact Webmaster</a> </p></div>
  </div>

</body>

</html>
