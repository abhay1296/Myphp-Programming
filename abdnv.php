<?php
if(isset($_POST['send']))
 {
		error_reporting(0);
		$min=$_POST['num1'];
		$max=$_POST['num2'];
		for($year=$min; $year<=$max; $year++)
	 
  {
	
		if($year%4==0 || $year%100!=0 && $year%400==0)
	
	{
		echo "year is leapyear=".$year."<br/>";
	
	}
		else
	
	{
		echo "not leapyear=".$year."<br/>";
	
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