<?php
if(isset($_POST['response']))
	{
		$n=$_POST['number'];
$i=$n;
while($i>=1)
{
	echo "<br/>$i";
	$i--;
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