<?php
session_start();

$con = mysqli_connect("localhost", "root");
mysqli_select_db($con,"nanny_shack");

$fields = array('date', 'start', 'end', 'pName', 'pContact', 'cName', 'cAge', 'spco','email');

$error = false;
foreach($fields AS $field) {
  if(!isset($_POST[$field]) || empty($_POST[$field])) {

    $error = true;
  }
}

if(!$error) {
	$date = mysqli_real_escape_string($con,$_POST['date']);
	$start = mysqli_real_escape_string($con,$_POST['start']);
	$end= mysqli_real_escape_string($con,$_POST['end']);

	$pName = mysqli_real_escape_string($con,$_POST['pName']);
	$pContact = mysqli_real_escape_string($con,$_POST['pContact']);
	$cName = mysqli_real_escape_string($con,$_POST['cName']);
	$cAge = mysqli_real_escape_string($con,$_POST['cAge']);
	$spco = mysqli_real_escape_string($con,$_POST['spco']);
	$email = mysqli_real_escape_string($con,$_POST['email']);

	
	$sql = "INSERT INTO booking(Date,Start,End,ParentName,Contact,ChildName,ChildAge,Special_Condition,email) VALUES ('$date','$start','$end','$pName','$pContact','$cName','$cAge','$spco','$email')";
		mysqli_query($con,$sql);
		while($start <= $end){
		if($cAge < 3){
		$sql1 = "UPDATE current_schedule SET  Availability =  Availability  - 40 WHERE Date = '$date' and Hour = '$start'";
		$result = mysqli_query($con,$sql1);
		$res = mysqli_fetch_assoc($result);
	
		}

		else if($cAge <6){
			$sql2 = "UPDATE current_schedule SET  Availability =  Availability  - 24 WHERE Date = '$date' and Hour = '$start'";
			mysqli_query($con,$sql2);
			$result = mysqli_query($con,$sql2);
			$res = mysqli_fetch_assoc($result);
		
		}


		else {
			$sql3 = "UPDATE current_schedule SET  Availability =  Availability  - 15 WHERE Date = '$date' and Hour = '$start'";
			mysqli_query($con,$sql3);
			$result = mysqli_query($con,$sql3);
		$res = mysqli_fetch_assoc($result);
		
		}

		$start = $start + 1;
	}
	
		
		
		header("location: index.php");
		
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
      <li> <a href="index.php" >Home</a> </li>
      <li> <a href="information.php" >About Us</a>

      </li>


      <li> <a href="photo_gallery.php" >Photo Gallery</a> </li>
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
  <h1 class="headingBrown">BOOK US</h1>
 <div id = "frm2">
<form  method="POST">
        <table border="0.5" >

            <tr>

                <td><label for="date">DATE</label></td><br>
                <td><input type="date" name="date"></td><br>
            </tr>
           <tr>

                <td><label for="start">Start Time</label>
			<select name="start">
			<?php for($i = 0; $i < 24; $i++): ?>
			<option value="<?= $i; ?>"><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
			<?php endfor ?>
			</select>
               </td>
            </tr>
			<tr>

                <td><label for="end">End Time</label>
			<select name="end">
			<?php for($i = 0; $i < 24; $i++): ?>
			<option value="<?= $i; ?>"><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
			<?php endfor ?>
			</select>
               </td>
            </tr>
			<tr>
                <td><label for="pName">Parent's Name</label></td>
				<td><input type="text" name="pName"></td>
            </tr>
			<tr>
                <td><label for="pContact">Phone Number</label></td>
                <td><input type="number" name="pContact"></td>
            </tr>
			<tr>

                <td><label for="cName">Child Name</label></td><br>
                <td><input type="text"name="cName"></td><br>
            </tr>
			<tr>

                <td><label for="cAge">Child Age</label></td><br>
                <td><input type="text" name="cAge"></td><br>
            </tr>
			<tr>

                <td><label for="spco">Special Condition</label></td><br>
                <td><input type="text" name="spco"></td><br>
            </tr>

			<tr>

                <td><label for="email">Email</label></td><br>
                <td><input type="email" name="email"></td><br>
            </tr>
            <tr>

                <td><input type="submit" name = "regBtn" value="BOOK" id = "button" /><br>



            </tr>
        </table>
    </form>
</div>
</div>
<div id="footer">
  <p> Copyright&copy; 2014. <br>

  <a href="mailto:kazia1@educbe.ab.ca" class="a">Contact Webmaster</a> </p></div>
  </div>

</body>

</html>
