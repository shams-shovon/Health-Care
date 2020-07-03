
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

?>

<?php
//$file=fopen('file_donor.txt','a') or die("file open error");
$c=0;
$confirm = 0;

if (strlen($_REQUEST["pass"])<7)
{
	echo "<p style= 'color:red'> Must input password</p>";
	$confirm++;
}

?>


<?php
if($_REQUEST["pass"]==$_REQUEST["confpass"]  && $confirm == 0){
	

		
	$conn = mysqli_connect("localhost", "root", "","web_tech");

	$sql ="UPDATE `login` SET `passord`='".md5($_POST["pass"])."' WHERE id = '".$_SESSION['uname']."'";
	
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	echo "Password is updated";
		
		
}

else
echo " Password is not updated";
?>