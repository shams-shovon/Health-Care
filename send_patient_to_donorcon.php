<?php
session_start();

if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>

<nav>

<ul>
<li><a style="text-decoration: none" href="Patient_home_page.html"> <h3 style="color: DodgerBlue;">Home</h3> </a></li>
</ul>
</nav>
</body>
</html>

<?php

$c=0;
$confirm = 0;



if (strlen($_REQUEST["bday"])==0)
{
	echo "<p style= 'color:red'> Must type Need blood date</p>";
	$confirm++;
}

if (strlen($_REQUEST["lctn"])==0)
{
	echo "<p style= 'color:red'> Must type Need blood date</p>";
	$confirm++;
}

/*echo $_REQUEST["bday"];
echo $_REQUEST["dctr"];
echo $_SESSION['uname'];*/
if($confirm == 0){
	
	$conn = mysqli_connect("localhost", "root", "","web_tech");

		
		$sql = "INSERT INTO `patient_donor_request`(`patient_id`, `donor_id`,`location`, `date`, `status`) VALUES ('".$_SESSION['uname']."','".$_REQUEST["dnr"]."','".$_REQUEST["lctn"]."','".$_REQUEST["bday"]."','Request');";

		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		echo "Request send";
		
		

}

else
echo " Request is not send";
?>

