<?php
$dataSource="mysql";
function loadFromText(){
	global $data;
	$myfile = fopen("cred.txt", "r") or die("Unable to open file!");
	$data=array();
	while($line=fgets($myfile)) {	// read all lines until end-of-file
		$ar=explode(" ",$line);
		$data[]=array("id"=>$ar[0],"uname"=>$ar[1],"pass"=>$ar[2],"email"=>$ar[3]);
	}
	//print_r($auth);
}
function loadFromXML(){
	global $data;$data=array();
	$xml=simplexml_load_file("cred.xml") or die("Error: Cannot create object");

	foreach($xml->user as $st){
		$ar=array();
		$ar["id"]=(string)$st->id;
		$ar["uname"]=(string)$st->uname;
		$ar["pass"]=(string)$st->pass;
		$ar["email"]=(string)$st->email;
		$data[]=$ar;
	}
	//print_r($auth);
}
function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","web_tech");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$ar["id"]=$row["id"];
		$ar["passord"]=$row["passord"];
		$ar["role"]=$row["role"];
		$data[]=$ar;
	}
}
?>