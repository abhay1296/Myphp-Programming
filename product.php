<!DOCTYPE html>
<html> 
<head>
	<title>Dropdown</title>
</head> 
<body bgcolor="pink">
<form>
<select>
<option selected="selected">choose one</option>
<?php
$products= array("mobile", "laptop", "tablet", "camera");

foreach($products as $iteam)
{
	?>
<option value="<?php echo strtolower($iteam);?>"><?php echo $iteam;?></option>
<?php
}
?>
</select>
<input type="submit" value="submit">
</form>
</body>
</html>