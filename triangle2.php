<?php
if(isset($_POST['receive']))
{
	$num=$_POST['send'];
	for($i=1;$i<=10; $i++)
	{
	for($j=1;$j<=10-$i; $j++)
	{
		echo "&nbsp;&nbsp;";
	}
	for($k<=1;$k<=$i; $k++)
	{
		echo"*&nbsp;&nbsp;";
	} 
	
	echo"<br>";
	
}
}
?>

<html>  
<body>

<form action="" method="post">

	<p><label> Enter number:</label>
    <input type="number" name="send"></p>
	<p><input type="submit" name="receive" value="click me"></p>
	
    
</form>  
</body>  
</html>