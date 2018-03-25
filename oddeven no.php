<?php
if(isset($_POST['send']))
 {
		error_reporting(0);
		$min=$_POST['num1'];
		$max=$_POST['num2'];
		for($n=$min; $n<=$max;$n++)
	 
  {
	
		if($n%2==0)
	
	{
		echo "Even no=".$n."<br/>";
	
	}
		else
	
	{
		echo "Odd no=".$n."<br/>";
	
	}
  }

 }
?>




<html>  
<body>

<form action="" method="post">

	<p><label> Enter first number:</label>
    <input type="number" name="num1"></p>
	
    <p><label> Enter second number:</label>
	<input type="number" name="num2"></p>
	<input type="submit" name="send" value="Result"></p>
    
</form>  
</body>  
</html>