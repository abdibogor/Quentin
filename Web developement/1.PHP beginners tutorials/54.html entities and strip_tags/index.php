<!DOCTYPE html > 
<html dir="ltr" lang="en">
<head>
<title>html entities / strip tags</title>
<meta charset="UTF-8">
<meta name="description" content="Web developpement">
<meta name="keywords" content="PHP">
<meta name="author" content="abdibogoreh">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
		<?php 
			  if(isset($_GET['input'])){
			  	//echo ($_GET['input']);
			  	//echo htmlentities ($_GET['input']);
			 echo strip_tags($_GET['input']);
			  }
		   ?>
		<form action='' method="post">
			 <input type='text' name='input' /> 
			 <input type='submit' value='submit' /> 
		</form>
  
</body>
</html> 

