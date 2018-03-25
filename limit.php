<?php
if(isset($_POST['send']))
{
	$num=$_POST['number'];
	for($i=1;$i<=4;$i++)
	{
	for($j=1;$j<=4;$j++)
	{
	echo $j.""; 
	}
	echo"<br/><br/>";
	}
}
?>



<html>  
<body>

<form action="" method="post">

	<p><label> Enter first number:</label>
    <input type="number" name="num1"></p>
	
    <p><label> Enter second number:</label>
	<input type="number" name="number"></p>
	<input type="submit" name="send" value="Result"></p>
    
</form>  
</body>  
</html>