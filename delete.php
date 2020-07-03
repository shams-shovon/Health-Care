
<?php
session_start();
if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
if ($_SESSION['position'] == "doctor")
	{
		echo "<a href ='Doctor_home_page.html'>Home</a><br/>";
	}
	else if ($_SESSION['position'] == "donor")
	{
		echo "<a href ='Donor_home_page.html'>Home</a><br/>";
	}
	else if ($_SESSION['position'] == "patient")
	{
		echo "<a href ='Patient_home_page.html'>Home</a><br/>";
	}
		//print_r($_SESSION['uname']);
        //echo " <script>location.href='Login_server.php'</script>";
     else {
        echo "<script>alert('username or passord incorrect')</script>";
        echo "<script>location.href='login.php'</script>";
    }

?>

<html>

<body>

<form id ="frm" style= "color:DodgerBlue"   action="deletecon.php" method="post" name="frm" >
<p><b>Are you sure to delete your Account?</b></p>

<p id="txtHint"></p>



<input type="submit" onclick="return validate()" name="sbt" value="Delete" /></br>
</form>
</body>
</html>