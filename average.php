<?php
if(isset($_POST['response']))
{
	 
	$avalue = $_POST['num1'];
	$bvalue = $_POST['num2'];
	$cvalue = $_POST['num3'];
	$dvalue = $_POST['num4'];
	$evalue = $_POST['num5'];
	$s=$_POST['num1']+$_POST['num2']+$_POST['num3']+$_POST['num4']+$_POST['num5'];
	echo $average=$s/5;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AVERAGE</title>
</head>
<body>
	<form action="" method="post">
<p><label>ENTER 1<sup>st</sup>Number :</label>
<input type="number" name="num1" value="" placeholder="ENTER New number..."></p>
<p><label>ENTER 2<sup>nd</sup>Number :</label>
<input type="number" name="num2" value="" placeholder="ENTER New number..."></p>
<p><label>ENTER 3<sup>rd</sup>Number :</label>
<input type="number" name="num3" value="" placeholder="ENTER New number..."></p>
<p><label>ENTER 4<sup>th</sup>Number :</label>
<input type="number" name="num4" value="" placeholder="ENTER New number..."></p>
<p><label>ENTER 5<sup>th</sup>Number :</label>
<input type="number" name="num5" value="" placeholder="ENTER New number..."></p>
<p><input type="submit" name="response" value="Result"></p>
</form>
</body>
</html>