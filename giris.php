<!DOCTYPE html>
<html>
<head>
	<title>Hosgeldiniz</title>
	<meta charset="UTF-8"/>
	 <style type="text/css">
    #deneme {
    width: 600px;
    height: 840px;
    padding: 20px;
    margin: auto;
    position: relative;
    background-color: #EDAFEB;
}
      </style>
</head>

<body background="thumb-1920-307910.jpg">
<div id="deneme" >

	<form action="login.php" method="POST" style="font-size: 20px ;top: 300px; position: absolute; margin-left: 80px;  " >
<table align="center">
<tr>
<td>Kullanici Adi :</td>
<td><input type="text" name="kadi" style="font-size: 20px"></td>
</tr>
<tr>
<td>Sifre :</td>
<td><input type="password" name="sifre" style="font-size: 20px"></td>
</tr>
<tr>
<td></td>
<td width="60px" height="40px"><input type="submit" value="Giris" style="font-size: 20px" ></td>
<td><a href="?<?php  ?>"><input type="button" value="Kayit Ol" style="font-size: 20px;"></a></td>
</tr>
</table>
</form>

</div>

</body>


</html>