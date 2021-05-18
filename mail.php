<!DOCTYPE html>
<html>
<head>
	<title>SEND MAIL</title>
</head>
<body>
<form id="basic-form" action="mail_handler.php" method="post">
	<p>
      <label for="email1">TO:<span></span></label>
      <input id="email1" name="email1">
    </p>
    <p>
      <label for="email2">FROM  :<span></span></label>
      <input id="email2" name="email2">
    </p>
    <p>
      <label for="subject">SUBJECT:<span></span></label>
      <input id="subject" name="subject">
    </p>
	<p>
  		<label for="message">MESSAGE:<span></span></label>
  		<textarea name="message" rows="5" cols="40"></textarea>
  	</p> 
    <p>
      <input class="submit" type="submit" name="esubmit" value="SUBMIT">
    </p>
</form>
</body>
</html>