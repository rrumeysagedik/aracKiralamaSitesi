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
 
$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];
 
$sql_check = mysql_query("select * from admin where kul_adi='".$kadi."' and sifre='".$sifre."' ") or die(mysql_error());
$sql_check2=mysql_query("select * from musteri_girisi where kullanici_adi='".$kadi."' and kullanici_sifre='".$sifre."' ") or die(mysql_error());

if(mysql_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    header("Location:adminn.php");
}
else if(mysql_num_rows($sql_check2))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    header("Location:musteri.php");
}

else {
    if($kadi=="" or $sifre=="") {
        echo "$kadi   $sifre";
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
 
ob_end_flush();
?>
</body>
</html>
