<?php
//error _reporting(0);
if(isset($_POST['submit']))
{
	echo $_POST['text'];
	echo $_POST['number'];
	echo $_POST['email'];
	echo $_POST['DOB'];
	
	echo $_GET['number'];

}
if(isset($_POST['submit']))
{
	
	echo $_GET['number'];

}
?>
<?php
if(isset($_GET['send']))
	$K=$_GET['msg'];
$K=$_GET['name'];
$r=$_GET['email'];
$s=$_GET['pass'];
$t=$_GET['mob'];
{
	echo $k;
}
{
	echo $r;
}
{
	echo $r;
}
{
	echo $t;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>TABLE</title>
</head>
<body bgcolor="lightblue">
	<form action="" method="GET">
	<table border="1">
		<tr>
			<td>NAME</td>
			<td><input type="text" name="msg"></td>
				
		</tr>
		<tr>
			<td> MOBILE NUMBER</td>
			<td><input type="number" name="num"></td>
				
		</tr>
		<tr>
			<td>EMAIL</td>
			<td><input type="email" name="email"></td>
				
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="text" name="pass"></td>
				
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type="date" name="mob"></td>
				
		</tr>
		<tr>
			<th><input type="submit" name="send"></th>
		</tr>
	</table>
	</form>

</body>
</html>
