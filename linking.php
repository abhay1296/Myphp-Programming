<!DOCTYPE html>
 <html> 
<head>
	<title>CONNECTING</title>
</head>
 <?php
 if (isset($_GET['send']))
 {
	 echo $val=$_GET['num'];
 }
 if (isset($_POST['recived']))
 {
	 echo $val1=$_POST['num1'];
 }
 if (isset($_REQUEST['cheak']))
 {
	 echo $val2=$_GET['num2'];
 }
 
 ?>
 
 
 
<body bgcolor="pink">
  
<form action="" method="get">
<p><input type="text" name="num">
<input type="submit" name="send"value="GET"></p>
</form>


<form action="" method="post">
<p><input type="text" name="num1">
<input type="submit" name="recived"value="POST"></p>
</form>

<form action="" method="request">
<p><input type="text" name="num2">
<input type="submit" name="cheak"value="REQUEST"></p>
<a href="threeform.php?id=ABHAY">link</a>
</form>

  
    
</form>  
</body>  