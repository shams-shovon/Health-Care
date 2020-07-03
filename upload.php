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

//print_r($GLOBALS);
$errors=0;
$source=$_FILES['fileToUpload']['tmp_name'];
if($source){
	$file_name = $_FILES['fileToUpload']['name'];
	$file_ext_temp = explode('.',$_FILES['fileToUpload']['name']);
	$file_ext=strtolower(end($file_ext_temp));
	$target="uploads/".(int) round(microtime(true) * 1000).".".$file_ext;
	move_uploaded_file($source,$target);
	$sql="update image set url='".$target."' where id='".$_SESSION['uname']."'";
	$conn = mysqli_connect("localhost", "root", "","web_tech");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn)){
		echo "File uploaded";
	}
}else{
	echo "File not found";
}
?>