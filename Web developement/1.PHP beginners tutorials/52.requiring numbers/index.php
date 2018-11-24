<?php
	  if(!empty($_POST['age'])){
	  	if(is_numeric($_POST['age'])){
	  		echo 'Yes that is numeric';
	  	}
	  	else {
	  		echo 'No that is not numeric, please enter a numeric value';
	  	}
	  }
?>

<!DOCTYPE html > 
<html dir="ltr" lang="en">
<head>
<title>form validation - requiring numbers </title>
<meta charset="UTF-8">
<meta name="description" content="Web developpement">
<meta name="keywords" content="PHP">
<meta name="author" content="abdibogoreh">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

		<form method="post">
		    age:<input type="text" name="age">

		   <input type="submit" value="submit"/><br/>
		</form>
     
</body>
</html> 

