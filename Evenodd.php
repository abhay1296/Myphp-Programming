<?php   
    if(isset($_POST['response']))
    {  
        $number = $_POST['number'];   
        //Divide entered number by 2 
        //If the reminder is 0 then the number is even otherwise the number is odd  
        if(($number % 2) == 0){  
            echo "$number is an Even number";  
        }
        if(($number % 2) == 1){   
            echo "$number is Odd number";  
        }  
    }  
?>

<html> 
<head>
	<title>EVEN OR ODD</title>
</head> 
<body>  
<form action="" method="post">
<fieldset>
	<legend align="center"><h3>Even or odd</h3></legend>
	Enter a number:  
    <input type="number" name="number">  
    <input type="submit" value="Submit" name="response">  
</fieldset>  
    
</form>  
</body>  
</html>  