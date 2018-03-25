<?php   
    if(isset($_POST['response']))
    {  
        $number = $_POST['number']; 
        $number1 = $_POST['number1'];  
        //Divide entered number by 2 
        //If the reminder is 0 then the number is even otherwise the number is odd  
        if($_POST['number']==$_POST['number1']) {  
            echo "$value is equal";  
        }
        if($_POST['number']!=$_POST['number1']){   
            echo "$value is unequal";  
        }  
    }  
?>

<html> 
<head>
	<title>Equality Check</title>
</head> 
<body>  
<form action="" method="post">
<fieldset>
	<legend align="center"><h3>Equality Check</h3></legend>
	<p>Enter value 1:  
    <input type="number" name="number"> </p>
    <p>Enter value 2:
    <input type="number" name="number1"></p> 
    <input type="submit" value="Submit" name="response">  
</fieldset>  
    
</form>  
</body>  
</html>  