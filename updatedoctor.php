<!DOCTYPE html>
<html>

<head>
<style type="text/css">
@import"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
margin:0;
  padding:0;
  font-family:sans-serif;
  background-image: url("login.jpg");
  background-size:cover;
  
}
.login-box{
width:280px;
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
color:white;
}
.login-box h1{
float:left;
font-size:40px;
border-bottom:6px solid #4caf50;
margin-bottom:50px;
padding:13px 0
}
.textbox {
width:100%;
overflow:hidden;
font-family:20px;
padding:8px 0;
margin:8px 0;
border-bottom:1px solid #4caf50;; 
}
</style>
</head>

<body>

<nav>

<ul>
<li><a style="text-decoration: none" href="Doctor_home_page.html"> <h3 style="color: DodgerBlue;">Home</h3> </a></li>
</ul>
</nav>
</body>
</html>


<?php
session_start();
//$file=fopen('file_doctor.txt','a') or die("file open error");
$c=0;
$confirm = 0;

if (strlen($_REQUEST["firstname"])==0)
{
	echo "<p style= 'color:red'> Must type first name</p>";
	$confirm++;
}
if (strlen($_REQUEST["lastname"])==0)
{
	echo "<p style= 'color:red'> Must type last name</p>";
	$confirm++;
}

if (strlen($_REQUEST["address"])==0)
{
	echo "<p style= 'color:red'> Must type Address</p>";
	$confirm++;
}

if (strlen($_REQUEST["bday"])==0)
{
	echo "<p style= 'color:red'> Must type birthday</p>";
	$confirm++;
}

if (empty($_REQUEST["gender"]))
{
	echo "<p style= 'color:red'> Must input gender</p>";
	$confirm++;
}


if (strlen($_REQUEST["experience"])==0)
{
	echo "<p style= 'color:red'> Must type experience</p>";
	$confirm++;
}

if (strlen($_REQUEST["location"])==0)
{
	echo "<p style= 'color:red'> Must input location</p>";
}

if (strlen($_REQUEST["timing"])==0)
{
	echo "<p style= 'color:red'> Must input timing</p>";
	$confirm++;
}



if (strlen($_REQUEST["phn"])!=11)
{
	echo "<p style= 'color:red'> Must input number</p>";
	$confirm++;
}


//print_r($_REQUEST["email"]);
$x = strpos($_REQUEST["email"],"@");
$y = strripos($_REQUEST["email"],".");
if (($x > $y) || ($x<0) || strlen($_REQUEST["email"])<3)
{
	echo "<p style= 'color:red'> Must input email</p>";
	$confirm++;
}





if( $confirm == 0){
	
	$conn = mysqli_connect("localhost", "root", "","web_tech");
	$sql = "UPDATE `doctor` SET `first_name`='".$_POST["firstname"]."',`last_name`='".$_POST["lastname"]."', `address`='".$_POST["address"]."', `dob`='".$_POST["bday"]."' ,`gender`='".$_POST ["gender"]."', `catagory`='".$_POST ["catagory"]."', `experience`='".$_POST ["experience"]."',`location`='".$_POST["location"]."' ,`timing`='".$_POST ["timing"]."', `phone`='".$_POST ["phn"]."', `email`='".$_POST ["email"]."' WHERE id = '".$_SESSION['uname']."'";
	
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	echo "information update";
		
	
}

else
echo " Information is not update";
?>