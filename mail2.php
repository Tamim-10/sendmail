<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$to = "sudipta.kundu@codeclouds.in";
$subject = "TEST MAIL";
$txt = "Hello this is a simple test mail!";
$headers = "From: tamim.arshad@codeclouds.in" . "\r\n";

if(mail($to,$subject,$txt,$headers))
{
	echo '<script>alert("SENT SUCCESSFULLY")</script>';
}
else
{
	echo"mail not sent";
}

?> 

</body>
</html>