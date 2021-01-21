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
  <h1 class="headingBrown">DELETE</h1>
  <div id = "frm">
  <form  method="POST" action="clientdeleteauto.php" >
          <table border="0.5" >
              <tr>
                  <td><label for="child_name">Child Name</label></td><br>
                  <td><input type="text" name="child_name" id="child_name"></td>
              </tr>
              <tr>
                  <td><label for="child_age">Child Age</label></td><br>
                  <td><input type="password" name="child_age" id="child_age"></input></td>
              </tr>
              <tr>
                  <td><label for="child_contact">Child Contact</label></td><br>
                  <td><input type="text" name="child_contact" id="child_contact"></td>
              </tr>

              <tr>

                  <td><input type="submit" value="DELETE" id = "button" /><br>



              </tr>
          </table>
      </form>
</div>
<div id="footer"><p> Copyright&copy; 2018. <br>

  <a href="mailto:kazia1@educbe.ab.ca" class="a">Contact Webmaster</a> </p></div>
  </div>

</body>

</html>
