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
  <h1 class="headingBrown">DELETE</h1>
  <div id = "frm">
  <form  method="POST" action="deleteauto.php" >
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

                  <td><input type="submit" value="DELETE" id = "button" /><br>



              </tr>
          </table>
      </form>
</div>
<div id="footer">
  <p> Copyright&copy; 2018. <br>

  <a href="mailto:kazia1@educbe.ab.ca" class="a">Contact Webmaster</a> </p></div>
  </div>

</body>

</html>
