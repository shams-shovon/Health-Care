<?php

$cred = array();
$file = fopen("cred.txt", "r") or die("file error");
while ($c = fgets($file)) {
    $ar = explode("-", $c);
    $cred[$ar[0]] = $ar[1];

}

session_start();

if (isset ($_REQUEST['uname'])) {
    foreach ($cred as $k => $v) {
        if ($_REQUEST["uname"] == $k && md5($_REQUEST["pass"]) == $v) {
            $uname = $_REQUEST["uname"];
            $pass = $_REQUEST["pass"];
            break;
        }
    }
}


/*if($flag==0){
	echo "<p style='color:red'>Wrong credentials</p>";
}
if($flag==1){
	header("Location:home.php");
}
echo "<br/>I am from PHP";*/

if (isset ($_SESSION['uname'])) {
    echo "<h1>Welcome " . $_SESSION['uname'] . "</h1>";

    echo "<a href ='home.php'>Home</a><br/>";
    echo "<br/><a href ='logout.php'><input type=button value= logout name=logout></a>";
} else {
    if (($_POST['uname'] && $_POST['pass']) && $_POST['uname'] == $uname && $_POST['pass'] == $pass) {
        $cred = array();
        $file = fopen("cred.txt", "r") or die("file error");
        while ($c = fgets($file)) {
            $ar = explode("-", $c);
            $cred[$ar[0]] = $ar[2];
            print_r($ar);
            echo "asdfghjk";
        }
        echo 'asdf';
        die();
        foreach ($cred as $k => $v) {
            if ($_REQUEST["uname"] == $uname) {

                break;
            }
        }


        $_SESSION['uname'] = $uname;
        echo "asdfghjk";
        echo " <script>location.href='server.php'</script>";
    } else {
        echo "<script>alert('username or passord incorrect')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}

?>

