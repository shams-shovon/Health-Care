<?php
session_start();

if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
?>

<html>
<body>
<a href = "Patient_home_page.html"> Home</a> <br/><br/>
</body>
</html>

<table border="1px">
<tr>
<th>Doctor Id</th><th>Date</th><th>Status</th>
</tr>
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

$sql = "SELECT * FROM `doctor_request` WHERE patient_id = '".$_SESSION['uname']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {?>
	<tr>
		
		<td><?php echo $row["doctor_id"]; ?></td>
		<td><?php echo $row["date"]; ?></td>
		<td><?php echo $row["status"]; ?></td>

	</tr>
    <?php }

} else {
    echo "0 results";
}?>

</table>