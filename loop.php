<?php
if(isset($_POST['receive']))
{
	$num=$_POST['send'];
	$i=1;
	while($i<=10)
	{
	echo $i;
	$i++;
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