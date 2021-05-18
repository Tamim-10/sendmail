<?php
	if(isset($_POST['esubmit']))
	{
		$to=$_POST['email1'];
		$from=$_POST['email2'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		$headers= "From : $from". "\r\n";

		if(mail($to, $subject, $message,$headers))
		{
			echo '<script>alert("SENT SUCCESSFULLY")</script>';
		}
		else
		{
			echo '<script>alert("MAIL NOT SENT ")</script>';

		}	
			
	} 
 ?>