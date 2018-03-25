<?php   
    if(isset($_POST['response']))
    {  
        $number = $_POST['number'];   
         
        if($number>0)
        {  
            echo "$number is positive";  
        }
        if($number <0)
        {   
            echo "$number is negetive";  
        } 
        if($number ==0)
        {
            echo "$number is neither negetive nor positive";
        } 
    }  
?>

<html>  
<body>  
<form action="" method="post">
<fieldset>
	<legend align="center"><h3>POSITIVE OR NEGATIVE</h3></legend>
	Enter a number:  
    <input type="number" name="number">  
    <input type="submit" value="Submit" name="response">  
</fieldset>  
    
</form>  
</body>  
</html>  