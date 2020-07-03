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
<li><a style="text-decoration: none" href="Home.html"> <h3 style="color: DodgerBlue;">Home</h3> </a></li>
</ul>
</nav>
</body>
</html>

<?php
//$file=fopen('file_donor.txt','a') or die("file open error");
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

if (strlen($_REQUEST["lbday"])==0)
{
	echo "<p style= 'color:red'> Must type last donation Day</p>";
	$confirm++;
}

if (empty($_REQUEST["gender"]))
{
	echo "<p style= 'color:red'> Must input gender</p>";
	$confirm++;
}

if (strlen($_REQUEST["bloodgroup"])==0)
{
	echo "<p style= 'color:red'> Must input bloodgroup</p>";
}

if (strlen($_REQUEST["bloodgroup"])==0)
{
	echo "<p style= 'color:red'> Must input bloodgroup</p>";
	$confirm++;
}

if (strlen($_REQUEST["phn"])!=11)
{
	echo "<p style= 'color:red'> Must input number</p>";
	$confirm++;
}

if (strlen($_REQUEST["pass"])<7)
{
	echo "<p style= 'color:red'> Must input password</p>";
	$confirm++;
}
$x = strpos($_REQUEST["email"],"@");
$y = strripos($_REQUEST["email"],".");
if (($x > $y) || ($x<0) || strlen($_REQUEST["email"])<3)
{
	echo "<p style= 'color:red'> Must input email</p>";
	$confirm++;
}
?>


<?php
if($_REQUEST["pass"]==$_REQUEST["confpass"]  &&  strlen($_POST["phn"])== 11 && $confirm == 0){
	
	$conn = mysqli_connect("localhost", "root", "","web_tech");
		$a =rand(100,1000)."-dn-".rand(100,1000);
		$d = "donor";
		
		$sql = "INSERT INTO `donor`( `id`, `first_name`, `last_name`, `address`, `dob`, `gender`, `blood_group`, `last_donate_date`, `phone`, `email`, `password`) VALUES('".$a."','".$_POST["firstname"]."','".$_POST["lastname"]."', '".$_POST["address"]."', '".$_POST["bday"]."','".$_POST ["gender"]."', '".$_POST ["bloodgroup"]."','".$_POST ["lbday"]."','".$_POST ["phn"]."','".$_POST ["email"]."','".md5($_POST["pass"])."');";

		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		echo "user append";
		echo "<p style= 'color:red'> your user id: ".$a;
		$sql1 = "INSERT INTO `login`( `id`, `passord`, `role`) VALUES ('".$a."','".md5($_POST["pass"])."','".$d."');";
		$result = mysqli_query($conn, $sql1)or die(mysqli_error($conn));
		$sql2 = "INSERT INTO `image`( `id`) VALUES ('".$a."');";
		$result = mysqli_query($conn, $sql2)or die(mysqli_error($conn));
		
		
}

else
echo " User does not appended";
?>