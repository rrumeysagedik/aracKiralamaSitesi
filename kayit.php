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
 
$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];

 
$sql = "INSERT INTO musteri_girisi  VALUES ('".$kadi."', '".$sifre."')";
if (mysql_query($sql))
    echo "Başarılı";
 
 header("Refresh: 2; url=index.php");
ob_end_flush();
?>
</body>
</html>
