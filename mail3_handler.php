<?php
 echo "hello";
  if(isset($_POST['esubmit']))
  {
    $to="shariquekalam10@gmail.com,tamimarshad7@gmail.com";
    $from=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $headers= "From : $from". "\r\n";

    if(mail($to, $subject, $message,$headers));
    
     echo '<script>alert("SENT SUCCESSFULLY")</script>';
  } 
?>