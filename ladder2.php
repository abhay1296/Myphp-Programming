<?php
if(isset($_POST['receive']))
{
	$num=$_POST['send'];
	for($i=1;$i<=$num;$i++)
	{
	for($j=1;$j<=$num-$i;$j++)
	{	
	echo "    &nbsp;"; 
	}
	for($k=$i;$k>=1;$k--)
	{
	echo $k."";
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