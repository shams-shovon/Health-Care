


<?php
session_start();

if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
?>
<html>
<body>
<a href= "Admin_home_page.html">home</a><br/><br/><br/><br/>
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

$sql = "SELECT * FROM admin where id = '".$_SESSION['uname']."'";
$result = $conn->query($sql);

$userarray = array(
"Name"=>'',
"Address"=>'',
"DOB"=>'',
"Gender"=>'',
"Email"=>'',
"Phone"=>'',

);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
       $userarray["Name"] =  $row['name'];
       $userarray["Address"] =  $row['address'];
       $userarray["DOB"] =  $row['dob'];
       $userarray["Gender"] =  $row['gender'];
       $userarray["Email"] =  $row['email'];	   
       $userarray["Phone"] =  $row['phone'];	   
    }

} else {
    //echo "0 results";
}

	$myJSON = json_encode($userarray);
	echo $myJSON;

?>