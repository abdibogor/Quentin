<?php

?>

<!DOCTYPE html > 
<html dir="ltr" lang="en">
<head>
<title>Retrieving data from forms</title>
<meta charset="UTF-8">
<meta name="description" content="Web developpement">
<meta name="keywords" content="PHP">
<meta name="author" content="abdibogoreh">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

		<form action="handler.php" method="post">
		   What are your favourite foods?<br/>
		   Burger<input type="checkbox" value="burger" name="food[]"><br/>
		   steak<input type="checkbox" value="steak" name="food[]"><br/>
		   salad<input type="checkbox" value="salad" name="food[]"><br/>
		   macaroni<input type="checkbox" value="macaroni" name="food[]"><br/>
		<input type="submit" value="submit"/><br/>
		</form>
     
</body>
</html> 

