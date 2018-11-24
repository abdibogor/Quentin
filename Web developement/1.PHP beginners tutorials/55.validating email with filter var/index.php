<!DOCTYPE html > 
<html dir="ltr" lang="en">
<head>
<title>validate email with filter_var</title>
</head>
<body>
		<?php 
			  if(isset($_GET['email'])&& !empty($_GET['email'])){
			  	//validate email
			  	if(filter_var($_GET['email'],FILTER_VALIDATE_EMAIL)){
			  		echo 'The email is valid';
			  	}
			  	  else{
			  	 	echo 'Invalid email, try again';
			  	 }
			  }
			else{
				echo 'please enter an email';
			}

		   ?>
		<form action='' method="post">
			email: <input type='text' name='email' /> 		 
			 <input type='submit' value='submit' /> 
		</form>
  
</body>
</html> 

