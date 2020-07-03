<script type="text/javascript">
function second(){
	var un=document.frm.firstname.value;
	if(un.length<3){
		document.frm.firstname.style.color="red";
		document.getElementById("msg").innerHTML="invalid first name";
	}
	else{
		document.frm.firstname.style.color="black";
		document.getElementById("msg").innerHTML="valid first name";
	}
	
}

function first(){
	var un=document.frm.lastname.value;
	if(un.length<3){
		document.frm.lastname.style.color="red";
		document.getElementById("msg").innerHTML="invalid last name";
	}
	else{
		document.frm.lastname.style.color="black";
		document.getElementById("msg").innerHTML="valid last name";
	}
	
}

function add(){
	var un=document.frm.address.value;
	if(un.length<5){
		document.frm.address.style.color="red";
		document.getElementById("msg").innerHTML="invalid address name";
	}
	else{
		document.frm.address.style.color="black";
		document.getElementById("msg").innerHTML="valid address name";
	}
	
}

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

function problem(){
	var un=document.frm.pblm.value;
	if(un.length<4){
		document.frm.pblm.style.color="red";
		document.getElementById("msg").innerHTML="invalid problem(atleast 5 character)";
	}
	else{
		document.frm.pblm.style.color="black";
		document.getElementById("msg").innerHTML="valid problem";
	}
	
}

function phne(){
	var un=document.frm.phn.value;
	if(un.length!=11){
		document.frm.phn.style.color="red";
		document.getElementById("msg").innerHTML="invalid phn number";
	}
	else{
		document.frm.phn.style.color="black";
		document.getElementById("msg").innerHTML="valid phn number";
	}
	
}

function ail(){

	var un=document.frm.email.value;
	if(un.indexOf("@") > un.lastIndexOf(".") || un.length==0 || un.indexOf("@") <1 || un.indexOf(".") < 2 ){
		document.frm.email.style.color="red";
		document.getElementById("msg").innerHTML="invalid email address";
	}
	
	else{
		document.frm.email.style.color="black";
		document.getElementById("msg").innerHTML="valid email address";
	}
	
}

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

function validate(){
		
	var flag=true;
	var un=document.frm.firstname.value;
	var ln=document.frm.lastname.value;
	var ad=document.frm.address.value;
	var bday=document.frm.bday.value;
	var pblm=document.frm.pblm.value;
	var gender=document.frm.gender.value;
	var email=document.frm.email.value;
	var phn=document.frm.phn.value;
	var pass=document.frm.pass.value;	
	var cpass=document.frm.confpass.value;
	
	
	var str="";
	if(un.length==0){
		flag=false;
		str="must type first name";
	}
	else if(ln.length==0){
		flag=false;
		str="must type last name";
	}
	
	else if(ad.length==0){
		flag=false;
		str="must type Address name";
	}
	
	else if(bday.length==0){
		flag=false;
		str="must choose DOB";
	}
	
	else if(pblm.length==0){
		flag=false;
		str="must input your problem";
	}
	
	else if(gender.length==0 ){
		flag=false;
		str="must choose Gender";
	}
	
	
	else if(phn.length!=11){
		flag=false;
		str="must type proper number";
	}
	
	else if(email.indexOf("@") > email.lastIndexOf(".") || email.length==0 || email.indexOf("@") <1 || email.indexOf(".") < 2 ){
		
		flag=false;
		str="invalid email";
	}
	

	else if(pass!=cpass || pass.length==0){
		flag=false;
		str="passwords must match";
	}
	document.getElementById("msg").innerHTML=str;
	return flag;
}


</script>



<!DOCTYPE html>
<html>

<head>

<style type="text/css">
  *{
  margin:0;
  padding:0;
  font-family:'Lato',sans-serif;
  
  }
  body{
  width:100%;
  height:100vh;
  background-image: url("Patient.jpg");
  background-size:cover;
  background-position:center;
  background-repeat:no-repeat;
 }
 
  nav {
  width:100%;
  background-color:rgba(0,0,0,0.7);
  overflow:hidden;
  }
  nav ul{
list-style-type:none;
float:right;
  }
  
  nav ul li {
  display:inline-block;
  }
  nav ul li a
  {
    text-decoration:none;
     padding:20px 35px;
text-align: center;
color:#fff;
display:block;
font-weight:700;	 
  }
  nav  ul li a:hover{
 background-color:blue;
  </style>
</head>

<body>
 
<nav>
 <left><img src="download.png" width="100" height="100"></left>

<ul>

<li><a  href="Home.html"> home </a></li>
<li><a href="RegistrationDoctor.php"> Doctor </a></li>
<li><a href="DonorRegs.php"> Donor </a></li>
<li><a href="#"Home</a></li>
<li><a href="#"Home</a></li>
<li><a href="#"Home</a></li>
<li><a href="#"Home</a></li>
<li><a href="#"Home</a></li>
<li><a href="#"Home</a></li>

<li><a href="#"Home</a></li>
<li><a  href="Registration.html">back </a></li>
</ul>
</nav>

<form id ="frm" style= "color:DodgerBlue"   action="PatientRegscon.php" method="post" name="frm" >
<h1  > <b> Patient Registration Form <b></h1>
<br><br>
  First name:
<input onkeyup="second()" type="text" placeholder="User Firstname" name="firstname" id="txt"><span id="msg"></span>
  <br><br>
  Last name:

<input onkeyup="first()" type="text" placeholder="User Lastname" name="lastname" id="txt"><span id="msg"></span> <br><br>
 Address:
<input onkeyup="add()" type="text" placeholder=" Type your Address" name="address" id="txt"><span id="msg"></span> 
  <br><br>
  Birthday: <input onkeyup="dob()" type="date" name="bday" id="txt"><span id="msg"></span> <br><br>
  
  

Gender:
<input type="radio" name="gender" value="male" > Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other" > Other<br><br>

Problem:
<input onkeyup="problem()" type="text" placeholder="Type your Problem" name="pblm" id="txt"><span id="msg"></span>
  <br><br>

Phone No:
<input onkeyup="phne()" type="text" placeholder="Type phone number" name="phn" id="txt"><span id="msg"></span>
  <br><br>
Email:
<input onkeyup="ail()" type="text" placeholder="Type Email" name="email" id="txt"><span id="msg"></span>
  <br><br>
Password:
<input onkeyup="pass1()" type="password" placeholder="Type your password" name="pass" id="txt"><span id="msg"></span>
   <br><br> 
 confirm Password:
<input onkeyup="confpass1()" type="password" placeholder="confirm your password" name="confpass" id="txt"><span id="msg"></span>
  <br><br>
  <p><h1 style= "color:DodgerBlue "font-size:40px;" align="center" > Welcome !!</h1></p>

<input type="submit" onclick="return validate()" name="sbt" value="submit" /></br>

</form>

</body>
</html>