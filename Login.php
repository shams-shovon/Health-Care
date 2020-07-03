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
<div class="login-box">
<form action="Login_server.php" method="post">
<h1>Login</h1>
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="User id" name="uname" value="">
</div>
<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="password" name="pass" value="">
</div>
<input type="submit" name="sbt" value="Login" /><br>
<br><br><br>
<button class="button"><a style="text-decoration: none" href="Registration.html">Create New Account</a></button>
</form>
</div>
</body>
</html>