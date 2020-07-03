<html>
<body>
<a href = "Doctor_home_page.html"> Back</a>
</body>
</html>

<table border="1px">
<tr>
<th>Name</th><th>Address</th><th>DOB</th><th>Gender</th><th>BG</th><th>Phone</th><th>Email</th>
</tr>
<?php
	$file=fopen("file_donor.txt","r") or die("file error");
	$login=array();
	while($c=fgets($file)){
		$ar=explode("-",$c);
		$dar["0"]=$ar[0];
		$dar["1"]=$ar[1];
		$dar["2"]=$ar[2];
		$dar["3"]=$ar[3];
		$dar["4"]=$ar[4];
		$dar["5"]=$ar[5];
		$dar["6"]=$ar[6];
		$dar["7"]=$ar[7];
		$dar["8"]=$ar[8];
		$dar["9"]=$ar[9];
		$dar["10"]=$ar[10];
		$login[]=$dar;
	}
	echo "<pre>";
		
	echo "</pre>";
	
	foreach($login as $v){ ?>
	<tr>
	<td><?php echo $v["0"]." ".$v["1"]; ?></td>
	<td><?php echo $v["2"]." ".$v["3"]; ?></td>
	<td><?php echo $v["4"]." ".$v["5"]." ".$v["6"]; ?></td>
	<td><?php echo $v["7"]; ?></td>
	<td><?php echo $v["8"]; ?></td>
	<td><?php echo $v["9"]; ?></td>
	<td><?php echo $v["10"]; ?></td>
	</tr>
<?php
	}

?>
</table>