<?php
if(isset($_POST['response']))
	{
		$n=$_POST['number'];
$count = 0 ;
$f1 = 0;
$f2 = 1;
echo $f1." <br/> ";
echo $f2." <br/> ";
while ($count < $n )
{
$f3 = $f2 + $f1 ;
echo $f3." <br/> ";
$f1 = $f2 ;
$f2 = $f3 ;
$count = $count + 1;
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