<!DOCTYPE html>
<html> 
<head>
	<title>About Me</title>
</head> 
<body bgcolor="pink">


<?php
	 $name=base64_encode("ABHAY KUMAR");
	 $email=base64_encode("abhaykr12121996@gmail.com");
	 $mobile=base64_encode("+918295179127");
	 $pass=base64_encode("ab0001");

?>

<a href="function.php?name=<?php echo $name;?>& email=<?php echo $email;?> &mobile=<?php echo $mobile;?>&pass=<?php echo $pass;?>"><h1>SEND URL</h1></a>
</body>
</html> 