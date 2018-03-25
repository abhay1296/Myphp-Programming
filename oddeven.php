
<html>  
<body>

<form action="" method="post">

	<p><label> Enter number:</label>
    <input type="number" name="num1"></p>
	<p><input type="submit" name="result" value="click me"></p>
	</form> 

<?php
if(isset($_POST['result']))
{
	$num=$_POST['num1'];
	?>
	
	
	<table width="50%" height="auto" border="0" align="center">
	<tr>
	<th colspan="2">odd or even number</th>
	</tr>
	<tr><th>odd</th><th>even no.</th></tr>
	<?php
	for($i="1";$i<=$num;$i++)
	{
		if($i%2!=0)
		{echo"<tr><td><center>$i</center</td>";
	if($i%2==0)
	{
		echo"<td><center>$i</center></td></tr>";
	}
		}
	}
	?>
	</table>
		


	
</body>  
</html>