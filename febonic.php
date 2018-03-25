<?php  

if(isset($_POST['response']))
{
	$n=$_POST['number'];
	$a=0;
	$b=1;
	echo $a."<br>".$b."<br>";
	for($i=1;$i<$n-1;$i++)
	{
		$s=$a+$b;
		echo $s."<br/>";
		$a=$b;
		$b=$s;
	}
}
?>
<html> 
<head>
	<title>Febonic number</title>
</head> 
<body bgcolor="lightblue">  
<form action="" method="post">
<fieldset>
	<legend align="center"><h3>Febonic number</h3></legend>
	Enter a number:  
    <input type="number" name="number">  
    <input type="submit" value="Submit" name="response">  
</fieldset>  
    
</form>  
</body>  
</html>