<!DOCTYPE html>
 <html> 
<head>
	<title>Three Form</title>
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
</form>

  
    
</form>  
</body>  
</html>