<?php
if(isset($_POST['receive']))
{
	$num=$_POST['send'];
	for($i=1;$i<=$num;$i++)
	{
	for($j=1;$j<=$i;$j++)
	{
	echo $j.""; 
	}
	echo"<br/>";
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