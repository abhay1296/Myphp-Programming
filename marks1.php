<!DOCTYPE html>
<html>
<head>
<title>PERFORMANCE REPORT</title>
</head>

<body bgcolor="pink">
<form action="" method="post">
	<fieldset>
			<legend align="center"><h3>PERFORMANCE REPORT</h3></legend>

<table width="50%" height="auto" border="1" align="center" bgcolor="lightblue">
	<tr>
		<th colspan="3">STUDENT'S PERFORMANCE REPORT</th>
	</tr>
	<tr>
	<th>subject</th>
	<th>full marks</th>
	<th>marks obtained</th>
	</tr>
	<tr>
		<th>ENGLISH</th>
		<th>100</th>
				<th><input type="number" name="a" value=""/></th>
	</tr>
	<tr>
		<th>HINDI</th>
		<th>100</th>
				<th><input type="number" name="b" value=""/></th>

	</tr>
	<tr>
		<th>SCIENCE</th>
		<th>100</th>
				<th><input type="number" name="c" value=""/></th>

	</tr>
	<tr>
		<th>SOCIAL SCIENCE</th>
		<th>100</th>
				<th><input type="number" name="d" value=""/></th>

	</tr>
	<tr>
		<th>MATHEMATICS</th>
		<th>100</th>
				<th><input type="number" name="e" value=""/></th>

				</tr>
				<tr>
					<th colspan="3"><input type="submit" name="submit" value="SUBMIT"/></th>
				</tr>

				<tr>
						<?php
	if(isset($_POST['submit']))
	{

       $avalue = $_POST['a'];
       $bvalue = $_POST['b'];
       $cvalue = $_POST['c'];
       $dvalue = $_POST['d'];
       $evalue = $_POST['e'];
       $sum=$_POST['a']+$_POST['b']+$_POST['c']+$_POST['d']+$_POST['e'];
       }
       
      
		

		?>
							<th colspan="2">Total :</th>
								<th><input type="text" name="ntext" value="<?php echo $sum; ?>">
								</th>
								
							</tr>
							<?php
	if(isset($_POST['submit']))
	{	
	 
	$avalue = $_POST['a'];
	$bvalue = $_POST['b'];
	$cvalue = $_POST['c'];
	$dvalue = $_POST['d'];
	$evalue = $_POST['e'];
	$sum=$_POST['a']+$_POST['b']+$_POST['c']+$_POST['d']+$_POST['e'];
}
	?>
	

								<tr>
							<th colspan="2">Average :</th>
								<th><input type="text" name="num6" value="<?php echo $sum/5; ?>%"></th>
								
							</tr>
							<?php
							if(isset($_POST['submit']))
	{	
	
	

	if($sum/5>=90)
	{
		echo'<tr>
							<th colspan="2">Remarks  :</th>
								<th><input type="text" name="num7" value="EXCELLENT"></th>
							</tr>';
	}
	elseif ($sum/5>=80)
	{
			echo'<tr>
							<th colspan="2">Remarks  :</th>
								<th><input type="text" name="num7" value="VERY GOOD"></th>
							</tr>';	
	}
	elseif ($sum/5>=70)
	 { 
	 			echo'<tr>
							<th colspan="2">Remarks  :</th>
								<th><input type="text" name="num7" value="GOOD"></th>
							</tr>';
	 }
	 elseif ($sum/5>=60)
	  {
	 			echo'<tr>
							<th colspan="2">Remarks  :</th>
								<th><input type="text" name="num7" value="AVERAGE"></th>
							</tr>';
	 }
	 elseif ($sum/5>=50)
	  {
	 		echo'<tr>
							<th colspan="2">Remarks  :</th>
								<th><input type="text" name="num7" value="POOR"></th>
							</tr>';
	 }
	 elseif ($sum/5<=49)
	  {
	 			echo'<tr>
							<th colspan="2">Remarks  :</th>
								<th><input type="text" name="num7" value="FAIL"></th>
							</tr>';
	 }
	}

	?>
				
</table>
</fieldset>
</form>
</body>
</html>
