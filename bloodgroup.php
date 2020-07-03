<?php
session_start();

if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
?>

<html>
<body>
<a href = "Patient_home_page.html"> Home</a> <br/><br/><br/>
<form id ="frm" style= "color:DodgerBlue"   action="show_patient_to_donor.php" method="post" name="frm" >
Which Group do you need: <br/><br/>
BloodGroup:
 <select name="bloodgroup">
    <option  value="A+">A+</option>
    <option  value="A-">A-</option>
    <option  value="AB+">AB+</option>
    <option  value="AB-">AB-</option>
	<option  value="B+">B+</option>
    <option  value="B-">B-</option>
	<option  value="O+">O+</option>
	<option  value="O-">O-</option>
  </select>
  <br><br>
  <input type="submit"  name="sbt" value="submit" /></br>
</body>
</html>