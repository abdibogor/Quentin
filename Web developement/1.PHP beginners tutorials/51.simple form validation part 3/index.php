<?php
	 //empty($_POST)
	/*if(!empty($_POST['username']) )*/
	if(!empty($_POST['username'])&& !empty($_POST['password'])&& !empty($_POST['password_again'])&& !empty($_POST['gender'])&& !empty($_POST['info']) ){
		  $username = $_POST['username'];
		  $password = $_POST['password'];
		  $password_again = $_POST['password_again'];
		  $gender = $_POST['gender'];
		  $info = $_POST['info'];

		  if(strlen($username)>32){
		  	echo 'your username is too long';
		  }
		   elseif($password != $password_again){
		   	 echo 'your passwords do not match';
	      }
	      elseif(strlen($password)>32){
	  	   echo 'your password is too long';
	      }
	      elseif(strlen($info)>32){
	  	 echo 'your info is too long';
          }
          else{
          	    echo "the following data has been submitted <br/>
          	        Username : $username <br/>
          	        Password : $password <br/>
          	        Gender :   $gender <br/>
          	        info :     $info <br/>
          	    ";
          }
        }
	      else{
	 	//echo 'you need to fill in a username';
	 	echo 'You need to fill in all fields';
	      }	 	
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

		<form method="post">
		 <h2> Register </h2>
		 Username: <input type="text" name="username"><br/>
		 password: <input type="password" name="password"><br/>
		 password_again: <input type="password" name="password_again"><br/>
		 Gender: male<input type="radio" value="male" name="gender">
		 female<input type="radio" value="female" name="gender"><br/>
		 Tell us about yourself
		 <textarea name="info">

		 </textarea>
		   <input type="submit" value="submit"/><br/>
		</form>
     
</body>
</html> 

