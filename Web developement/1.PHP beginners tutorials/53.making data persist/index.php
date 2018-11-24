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
			<?php 
			  if(isset($_POST['first_name'])){
			  	    $first_name = $_POST['first_name'];
			  }
			  else{
			  	    $first_name = "";
			  }
			  if(isset($_POST['last_name'])){
			  	    $last_name = $_POST['last_name'];
			  }
			  else{
			  	    $last_name = "";
			  }


			echo"
		  first name:<input type='text' name='first_name' value='$first_name' /><br/><br/> 
          last name: <input type='text' name='last_name' value='$last_name' /><br/><br/>
		   <input type='submit' value='submit'/><br/>
		   ";
		   ?>
		</form>
     
</body>
</html> 

