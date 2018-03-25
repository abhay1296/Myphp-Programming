<?php
if(isset($_POST['response']))
{
    $num=$_POST['number'];
echo "<pre>";
for ($i = 1; $i < $num; $i++) {
    for ($j = $i; $j < $num; $j++)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
    echo "<br>";
}
$n = $num;
for ($i = $num; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
    echo "<br>";
}
echo "</pre>";
}
?>
<html> 
<head>
    <title>DIAMOND</title>
</head> 
<body bgcolor="lightblue">  
<form action="" method="post">
<fieldset>
    <legend align="center"><h3>DIAMOND</h3></legend>
    Enter a number:  
    <input type="number" name="number">  
    <input type="submit" value="Submit" name="response">  
</fieldset>  
    
</form>  
</body>  
</html>  