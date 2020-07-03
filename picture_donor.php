<?php
session_start();
if(isset($_SESSION["uname"])){?>
	<form action="upload_donor.php" method="post" enctype="multipart/form-data" name="mfm"><pre>
	Select image to upload : <input type="file" name="fileToUpload">
	<input type="submit" value="Upload File" name="sbt"></pre>
</form>
<?php
}
else{
	header("Location:logout.php");
}
?>