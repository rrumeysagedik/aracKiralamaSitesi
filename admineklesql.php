<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body background="thumb-1920-307910.jpg">
<?php 
 
include("ayar.php");
ob_start();
session_start();
 
$ad = $_POST['Adi'];
$sifre = $_POST['Sifre'];


$sql = "INSERT INTO musteri_girisi  VALUES ('".$ad."', '".$sifre."')";
if (mysql_query($sql))
    echo "Başarılı";
else {
	echo "basarısız";
}

 header("Refresh: 2; url=adminn.php");

ob_end_flush();
?>
</body>
</html>
