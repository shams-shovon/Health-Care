<?php
session_start();
/*$_SESSION["valid"]="";
unset($_SESSION["valid"]);
header("Location:login.php");*/
if(isset($_SESSION['uname']))
{
	session_destroy();
	echo "<script>location.href='login.php'</script>";
	setcookie("timestamp", "", time() - 3600);
}
else
{
	session_destroy();
	setcookie("timestamp", "", time() - 3600);
	echo"<script>location.href='login.php'</script>";
}
?>