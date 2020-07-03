<?php
//$_REQUEST["id"]
session_start();
$data=array();
include("lib.php");
$sql="select * from login where id='".$_SESSION["uname"]."'";


loadFromMySQL($sql);

//loadFromText($sql);

//echo $data[0]['passord'] ;



if ($data[0]['passord'] == md5($_REQUEST["id"]))
{
	echo "Matched";
}

else
	echo "Not Matched";
//print_r($data);


?>