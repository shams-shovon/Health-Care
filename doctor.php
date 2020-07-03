
<a href = "Home.html"> Home</a>
<table border="1px">
<tr>
<th>Name</th><th>Gender</th><th>Specialist</th><th>Experience</th><th>Location</th><th>Start</th><th>End</th><th>Phone</th><th>Email</th>
</tr>
<?php
	$file=fopen("file_doctor.txt","r") or die("file error");
	$login=array();
	while($c=fgets($file)){
		$ar=explode("-",$c);
		$dar["fname"]=$ar[0];
		$dar["lname"]=$ar[1];
		$dar["gender"]=$ar[7];
		$dar["specialist"]=$ar[8];
		$dar["experience"]=$ar[9];
		$dar["Location"]=$ar[10];
		$dar["start"]=$ar[11];
		$dar["End"]=$ar[12];
		$dar["phone"]=$ar[13];
		$dar["email"]=$ar[14];
		$login[]=$dar;
	}
	echo "<pre>";
		
	echo "</pre>";
	
	foreach($login as $v){ ?>
	<tr>
	<td style="text-align: center"><?php echo $v["fname"]." ".$v["lname"]; ?></td>
	<td style="text-align: center"><?php echo $v["gender"]; ?></td>
	<td style="text-align: center"><?php echo $v["specialist"]; ?></td>
	<td style="text-align: center"><?php echo $v["experience"]; ?></td>
	<td style="text-align: center"><?php echo $v["Location"]; ?></td>
	<td style="text-align: center"><?php echo $v["start"]." pm"; ?></td>
	<td style="text-align: center"><?php echo $v["End"]." pm"; ?></td>
	<td style="text-align: center"><?php echo $v["phone"]; ?></td>
	<td style="text-align: center"><?php echo $v["email"]; ?></td>
	</tr>
<?php
	}

?>
</table>