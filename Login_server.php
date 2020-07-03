<?php

/*$cred = array();
$file = fopen("file_login.txt", "r") or die("file error");
while ($c = fgets($file)) {
    $ar = explode("-", $c);
    $cred[$ar[0]] = $ar[2];

}*/
session_start();
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
$uname = $_REQUEST["uname"];
$pass ;
$position;
$sql = "SELECT * FROM login where id = '".$_REQUEST["uname"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<pre>";
    while($row = $result->fetch_assoc()) {
        $pass =  ($row['passord']);
		$position = ($row['role']);
    }
	
}
// echo $uname ."  ".$pass ."  ".$position;


/*
if (isset ($_REQUEST['uname'])) {
    foreach ($cred as $k => $v) {
        if ($_REQUEST["uname"] == $k && md5($_REQUEST["pass"]) == trim($v)) {
            $uname = $_REQUEST["uname"];
            $pass = $_REQUEST["pass"];
            break;
        }
    }
}*/
//print_r($_SESSION);
//echo "outside--";
if (isset ($_SESSION['uname'])) {
	//echo "session set";
    echo "<h1>Welcome " . $_SESSION['uname'] . "</h1>";
	
    echo "<br/><a href ='logout.php'><input type=button value= logout name=logout></a>";
	
} 
else {
	//echo "session not set";
    if (($_POST['uname'] && $_POST['pass']) && $_POST['uname'] == $uname && md5($_POST['pass']) == $pass) {
        $date = new DateTime();
		setcookie("timestamp", $date->getTimestamp());
		
        $_SESSION['uname'] = $uname;
		$_SESSION['position'] = $position;
		echo "<h1>Welcome " . $_SESSION['uname'] . "</h1>";
		//echo "<h1>Welcome " . $_SESSION['position'] . "</h1>";
	
    echo "<br/><a href ='logout.php'><input type=button value= logout name=logout></a><br/><br/><br/>";
       // echo 'Loggedig';
		/*$cred = array();
	$file = fopen("file_login.txt", "r") or die("file error");
	while ($c = fgets($file)) {
		$ar = explode("-", $c);
		$cred[$ar[0]] = $ar[1];
	   // print_r($cred);
	}
	foreach ($cred as $k => $v) {
		if ($k == $_SESSION['uname']) {
			$_SESSION['position'] =$v;
			break;
		}
	}*/
	//print_r($_SESSION['position']);
	if ($position == "doctor")
	{
		echo "<a href ='Doctor_home_page.html'>Home</a><br/>";
	}
	else if ($position == "donor")
	{
		echo "<a href ='Donor_home_page.html'>Home</a><br/>";
	}
	else if ($position == "patient")
	{
		echo "<a href ='Patient_home_page.html'>Home</a><br/>";
	}
	
	else if ($position == "admin")
	{
		echo "<a href ='Admin_home_page.html'>Home</a><br/>";
	}
	
	
		//print_r($_SESSION['uname']);
        //echo " <script>location.href='Login_server.php'</script>";
    } else {
        echo "<script>alert('username or passord incorrect')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}

?>

