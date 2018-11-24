<?php

?>

<!DOCTYPE html > 
<html dir="ltr" lang="en">
<head>
<title>form validation</title>
<meta charset="UTF-8">
<meta name="description" content="Web developpement">
<meta name="keywords" content="PHP">
<meta name="author" content="abdibogoreh">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

		<form action="handler.php" method="post">
		 <h2> Register </h2>
		 Username: <input type="text" name="username"><br/>
		 password: <input type="password" name="password"><br/>
		 password_again: <input type="password" name="password_again"><br/>
		 Gender: male<input type="radio" name="gender">
		 female<input type="radio" name="gender"><br/>
		 Tell us about yourself
		 <textarea name="info">

		 </textarea>
		   <input type="submit" value="submit"/><br/>
		</form>
     
</body>
</html> 

