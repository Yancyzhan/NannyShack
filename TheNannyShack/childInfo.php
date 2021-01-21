<?php
session_start();

$pid = $_SESSION['id'];



$con = mysqli_connect("localhost", "root");
mysqli_select_db($con,"nanny_shack");



if(isset($_POST['regBtn'])){

	$name = mysqli_real_escape_string($con,$_POST['childName']);
	$age = mysqli_real_escape_string($con,$_POST['age']);
	$spCo = mysqli_real_escape_string($con,$_POST['condition']);

	$econtact = mysqli_real_escape_string($con,$_POST['eContact']);

	$sql2 = "INSERT INTO children(PID,ChildName,ChildAge,childcondition,eContact) VALUES ('$pid','$name','$age','$spCo','$econtact')";
	if(mysqli_query($con,$sql2)){


	header("location: clientchild.php");
}

}


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
  <h1 class="headingBrown">TELL US MORE ABOUT YOUR CHILD</h1>
 <div id = "frm2">
<form  method="POST" action="childInfo.php" >
        <table border="0.5" >

            <tr>

                <td><label for="childName">NAME</label></td><br>
                <td><input type="text" name="childName"></td><br>
            </tr>
            <tr>

                <td><label for="age">AGE</label></td><br><br>
                <td><input type="number" name="age"></input></td>
            </tr>
			<tr>
			<br>
                <td><label for="condition">CONDITION</label></td><
                <td><input type="text" name="condition"></td>
            </tr>

			<tr>
                <td><label for="emergency">EMERGENCY CONTACT NUMBER</label></td>
                <td><input type="number" name="eContact"></td>
            </tr>
            <tr>

                <td><input type="submit" name = "regBtn" value="Add your child" id = "button" /></td><br>



            </tr>
        </table>

    </form>
	<p> <a href = "childInfo.php"> <button id = "button"> Add another child </button></a></p>
</div>
</div>
<div id="footer">
  <p> Copyright&copy; 2018. <br>

  <a href="mailto:kazia1@educbe.ab.ca" class="a">Contact Webmaster</a> </p></div>
  </div>

</body>

</html>
