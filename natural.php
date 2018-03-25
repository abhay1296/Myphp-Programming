<?php
if(isset($_POST['result']))
	$num=$_POST['number'];
	for($i=1;$i<=$num;$i++)
	
	{
	
	echo $i."<br/>"; 
	

	}
?>


<html>  
<body>

<form action="" method="post">
<fieldset>
	<legend align="center"><h3>NATURAL NO</h3></legend>
	Enter a number:  
    <input type="number" name="number">  
    <input type="submit" value="Submit" name="result">  
</fieldset>  
    
</form>  
</body>  
</html>  