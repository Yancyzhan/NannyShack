<?php

session_start();
$date = "";
$_SESSION['pDate'] = $date;

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
  <h1 class="headingBrown">BOOK US</h1>
 <div id = "frm2">
<form  method="POST" action = "memberCal.php">
        <table border="0.5" >

            <tr>

                <td><label for="date">DATE</label></td><br>
                <td><input type="date" name="pDate"></td><br>
            </tr>



            <tr>

                <td>
				<input type="submit" value="CHECK" id = "button" />
				 </td><br>



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
