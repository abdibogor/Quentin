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
		    What your favourite food?
		      <select multiple name="food[]">
		      	 <option value="steak"> steak </option>
		      	 <option value="Salad"> Salad </option>
		      	 <option value="Hamburgers"> Hamburgers </option>
		      	 <option value="macaroni"> macaroni </option>
		      </select>
		      <br/>
		   <input type="submit" value="submit"/><br/>
		</form>
     
</body>
</html> 

