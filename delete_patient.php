<?php
session_start();

if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
?>

<html>
<body>
<a href= "Admin_home_page.html">home</a><br/><br/>
</body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "","web_tech");

		$sql ="DELETE FROM `login` WHERE id = '".$_GET['patient_id']."'";
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		
		$sql1 ="DELETE FROM `patient` WHERE id = '".$_GET['patient_id']."'";
		$result = mysqli_query($conn, $sql1)or die(mysqli_error($conn));
?>