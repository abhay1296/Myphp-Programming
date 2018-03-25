<?php
if(isset($_POST['response']))
{
	 
	 $newvalue = $_POST['text1'];
	echo $newvalue;
	/*$s=$text;
	echo "hi";*/
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Variable</title>
</head>
<body>
	
		<fieldset>
			<legend align="center"><h3>Value....</h3></legend>
			<form action="" method="post">
			<p><label>Enter Value :</label>
                         <input type="text" name="text1" value="" placeholder="" required><?php echo "$text";?></p>
			<p><input type="submit" name="response" value="submit"></p>
		</fieldset>
	</form>

</body>
</html>