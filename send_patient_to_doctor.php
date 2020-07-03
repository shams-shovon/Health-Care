<?php
session_start();

if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
?>



<script type="text/javascript">
function dob(){
	var un=document.frm.bday.value;
	if(un.length<3){
		document.frm.bday.style.color="red";
		document.getElementById("msg").innerHTML="invalid DOB";
	}
	else{
		document.frm.bday.style.color="black";
		document.getElementById("msg").innerHTML="valid DOB";
	}
	
}

function validate(){
		
	var flag=true;

	var bday=document.frm.bday.value;
	else if(bday.length==0){
		flag=false;
		str="must choose Date";
	}
}



</script>

<html>
<head>


</head>
<body>
<a href = "Patient_home_page.html"> Home</a> <br/><br/>
<form id ="frm" style= "color:DodgerBlue"   action="send_patient_to_doctorcon.php" method="post" name="frm" >
<h1  > <b> Appoinment Form <b></h1>
<br><br>
Doctor id : <input  type="text" name="dctr" value="<?php echo $_GET['doctor_id']?>" readonly><br>

Appoinment Date: <input onkeyup="dob()" type="date" name="bday" id="txt" required><span id="msg"  ></span> <br><br>
  
<input type="submit" onclick="return validate()" name="sbt" value="submit" /></br>

</form>
</body>
</html>

<?php 

if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}




?>




