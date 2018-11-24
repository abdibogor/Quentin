<?php
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  $data = $_POST['data'];
?>

<!DOCTYPE html > 
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
<meta charset="UTF-8">
<meta name="description" content="Web developpement">
<meta name="keywords" content="PHP">
<meta name="author" content="abdibogoreh">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

		<h2>Handling your data</h2>
        <?php 

 echo 'Welcome '.$username.' your password is '.$password.'<br/>'.' your data is:<br/>'.$data;

        ?>
</body>
</html> 

