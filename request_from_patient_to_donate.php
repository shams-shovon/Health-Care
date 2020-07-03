<?php
session_start();

if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
?>

<html>
<body>
<a href = "Donor_home_page.html"> Home</a> <br/><br/>
</body>
</html>

<table border="1px">
<tr>
<th>Patient Id</th><th>Location</th><th>Date</th><th>Status</th><th>Accept</th><th>Decline</th>
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

$sql = "SELECT * FROM `patient_donor_request` WHERE status ='Request'  && donor_id = '".$_SESSION['uname']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {?>
	<tr>
		
		<td><?php echo $row["patient_id"]; ?></td>
		<td><?php echo $row["location"]; ?></td>
		<td><?php echo $row["date"]; ?></td>
		<td><?php echo $row["status"]; ?></td>
		<td>
		<?php $row["id"] = "a";?>
		<?php $url = "donor_accept_patient.php?patient_id=".$row["patient_id"];?>
			
			<a href= <?php echo $url?>>
				<input type="button" value="Accept" />
			</a>
		</td>
		<td>
		<?php $url = "donor_decline_patient.php?patient_id=".$row["patient_id"];?>
			
			<a href= <?php echo $url?>>
				<input type="button" value="Decline" />
			</a>
		</td>

	</tr>
    <?php }

} else {
    echo "0 results";
}?>

</table>