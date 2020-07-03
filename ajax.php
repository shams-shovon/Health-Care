
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

<html>
<head>
<script>
function pass1(){
	var un=document.frm.pass.value;
	if(un.length<7){
		document.frm.pass.style.color="red";
		document.getElementById("msg").innerHTML="input at least 8 character";
	}
	else{
		document.frm.pass.style.color="black";
		document.getElementById("msg").innerHTML="valid password";
	}
	
}

function confpass1(){
	var un=document.frm.confpass.value;
	var an=document.frm.pass.value;
	if(un != an){
		document.frm.confpass.style.color="red";
		document.getElementById("msg").innerHTML="input proper password";
	}
	else{
		document.frm.confpass.style.color="black";
		document.getElementById("msg").innerHTML="valid password";
	}
	
}




xmlhttp = new XMLHttpRequest();
var currentpass;
function showHint() {
	var str=document.getElementById('mytext').value;
	var pstr=document.getElementById('txt').value;
	var cstr=document.getElementById('txt1').value;
	document.getElementById("spinner").style.visibility="visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			//console.log(xmlhttp.responseText);
			currentpass = xmlhttp.responseText;
			document.getElementById("spinner").style.visibility="hidden";
		}
	};
	var url="fetch.php";
	//data sent to fetch.php using post method
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	//xmlhttp.send("id="+str /*& "pid="+pstr*/);
	xmlhttp.send('id='+ encodeURIComponent(str) + '&pid='+ encodeURIComponent(pstr) + '&cid='+ encodeURIComponent(cstr));
}

function validate(){
		
	var flag=true;
	var pass=document.frm.pass.value;	
	var cpass=document.frm.confpass.value;
	console.log(currentpass);
	
	var str="";
	
	if(pass!=cpass || pass.length==0){
		flag=false;
		str="passwords must match";
	}
	if(currentpass != "Matched"){
		flag=false;
		str="Current password is not OK";
	}
	
	document.getElementById("msg").innerHTML=str;
	return flag;
}
</script>
</head>
<body>

<form id ="frm" style= "color:DodgerBlue"   action="changepass.php" method="post" name="frm" >
<p><b>First you must type your current password:</b></p>
Current Password : <input type="password" placeholder="Type your current password" onkeyup="showHint()" id="mytext"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">

<p id="txtHint"></p>

New Password:
<input onkeyup="pass1()" type="password" placeholder="Type your new password" name="pass" id="txt"><span id="msg"></span>
   <br><br> 
Confirm Password:
<input onkeyup="confpass1()" type="password" placeholder="confirm your password" name="confpass" id="txt1"><span id="msg"></span>
  <br><br>

<input type="submit" onclick="return validate()" name="sbt" value="Change" /></br>
</form>
</body>
</html>