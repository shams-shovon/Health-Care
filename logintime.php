<?php
session_start();

if (!isset ($_SESSION['uname']))
{
	 echo "<script>location.href='login.php'</script>";
}
?>
<html>
<head>
<script src="jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
</script>
</head>
<body>
<a  href="Doctor_home_page.html"> home </a><br/><br/>
<p>
<?php
echo "Login time : ";
echo date('m/d/Y H:i:s', $_COOKIE["timestamp"]);
?>
</p>
<button id="hide">Hide</button>
<button id="show">Show</button>
</body>
</html>