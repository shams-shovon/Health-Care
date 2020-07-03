<?php
session_start();

if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
?>

<html>
<body>
<a href = "Doctor_home_page.html"> Home</a> <br/><br/>
</body>
</html>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "web_tech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
		
		$sql = "UPDATE `doctor_request` SET `status`= 'Accept' WHERE patient_id = '".$_GET['patient_id']."' && doctor_id = '".$_SESSION['uname']."'";

		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		echo "Accept";
?>