<?php
session_start();
if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
if ($_SESSION['position'] == "doctor")
	{
		//echo "<a href ='Doctor_home_page.html'>Home</a><br/>";
		
		$conn = mysqli_connect("localhost", "root", "","web_tech");

		$sql ="DELETE FROM `login` WHERE id = '".$_SESSION['uname']."'";
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		
		$sql1 ="DELETE FROM `doctor` WHERE id = '".$_SESSION['uname']."'";
		$result = mysqli_query($conn, $sql1)or die(mysqli_error($conn));
		echo "<script>location.href='logout.php'</script>";
	}
	else if ($_SESSION['position'] == "donor")
	{
		//echo "<a href ='Donor_home_page.html'>Home</a><br/>";
		$conn = mysqli_connect("localhost", "root", "","web_tech");

		$sql ="DELETE FROM `login` WHERE id = '".$_SESSION['uname']."'";
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		
		$sql1 ="DELETE FROM `donor` WHERE id = '".$_SESSION['uname']."'";
		$result = mysqli_query($conn, $sql1)or die(mysqli_error($conn));
		echo "<script>location.href='logout.php'</script>";
	}
	else if ($_SESSION['position'] == "patient")
	{
		//echo "<a href ='Patient_home_page.html'>Home</a><br/>";
		$conn = mysqli_connect("localhost", "root", "","web_tech");

		$sql ="DELETE FROM `login` WHERE id = '".$_SESSION['uname']."'";
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		
		$sql1 ="DELETE FROM `patient` WHERE id = '".$_SESSION['uname']."'";
		$result = mysqli_query($conn, $sql1)or die(mysqli_error($conn));
		echo "<script>location.href='logout.php'</script>";
	}
		//print_r($_SESSION['uname']);
        //echo " <script>location.href='Login_server.php'</script>";
     else {
        echo "<script>alert('username or passord incorrect')</script>";
        echo "<script>location.href='login.php'</script>";
    }


?>