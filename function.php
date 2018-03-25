<!DOCTYPE html>
<html> 
<head>
	<title>Encryption/Decreption</title>
</head> 
<body bgcolor="pink">

<?php
echo $name==base64_decode($_GET['name']);
?>
<table width="50%" height="auto" border="1">
<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>EMAIL</th>
	<th>MOBILE</th>
	<th>PASSWORD</th>
</tr>
<tr>	
<th><?php echo 0001;?></th>
<td><?php echo base64_decode($_GET['name']);?></td>
<td><?php echo base64_decode($_GET['email']);?></td>
<td><?php echo base64_decode($_GET['mobile']);?></td>
<td><?php echo base64_decode($_GET['pass']);?></td>
</tr>
</table>
</body>
</html>