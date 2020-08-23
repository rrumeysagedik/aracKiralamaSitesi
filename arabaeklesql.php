<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body background="20220118_BULANIK6.jpg">
<?php 
 
include("ayar.php");
ob_start();
session_start();
 
$ad = $_POST['Adi'];
$Modeli = $_POST['Modeli'];
$Fiyati = $_POST['Fiyati'];


$sql = "INSERT INTO arabalistesi  VALUES ('".$ad."', '".$Modeli."', '".$Fiyati."')";
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
