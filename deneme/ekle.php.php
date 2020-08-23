<?php
error_reporting(0);
$baglan=mysql_connect("localhost","root","");
$db=mysql_select_db("topluluk");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<form method="post" action="" >
<input type="text" name="ad">ad<br>

<input type="text" name="url">url
<input type="submit" value="ekle" name="ekle"/>
</form>
<?php
$ad=$_POST['ad'];
   $url=$_POST['url'];
   if($_POST['ekle']){
   $yaz=mysql_query("insert into kat(k_ad,k_url) values ('".$ad."','".$url."')");
   }
?>
</body>
</html>