<?php
session_start();

if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
?>

<html>
<body>
<a href = "Admin_home_page.html"> Home</a> <br/><br/>
</body>
</html>

<table border="1px">
<tr>
<th>ID</th><th>Name</th><th>Address</th><th>DOB</th><th>Gender</th><th>Catagory</th><th>Experience</th><th>Hospital</th><th>Duration</th><th>Phone</th><th>Email</th><th>Request</th>
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

$sql = "SELECT * FROM doctor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {?>
	<tr>
		<td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
		<td><?php echo $row["address"]; ?></td>
		<td><?php echo $row["dob"]; ?></td>
		<td><?php echo $row["gender"]; ?></td>
		<td><?php echo $row["catagory"]; ?></td>
		<td><?php echo $row["experience"]; ?></td>
		<td><?php echo $row["location"]; ?></td>
		<td><?php echo $row["timing"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td>
			<?php $url = "delete_doctor.php?doctor_id=".$row["id"];?>
			
			<a href= <?php echo $url?>>
				<input type="button" value="Delete" />
			</a>
		</td>
	</tr>
    <?php }

} else {
    echo "0 results";
}?>

</table>