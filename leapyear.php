<?php   
    if(isset($_POST['response']))
    {  
        $number = $_POST['number'];   
        //Divide entered number by 4 
        //If the reminder is 0 then it is leap year else it is not a leap year  
        if(($number % 4) == 0){  
            echo "$Year is leap year";  
        }
        if(($number % 4) == 1){   
            echo "$Year is not leap year";  
        }  
    }  
?>

<html> 
<head>
    <title>LEAP YEAR</title>
</head> 
<body>  
<form action="" method="post">
<fieldset>
	<legend align="center"><h3>Leap Year</h3></legend>
	Enter a Year:  
    <input type="number" name="number">  
    <input type="submit" value="Submit" name="response">  
</fieldset>  
    
</form>  
</body>  
</html>  