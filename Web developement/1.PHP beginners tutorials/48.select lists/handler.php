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
              $food = $_POST['food'];
              foreach($food as $value){
              	echo $value.'<br/>';
              }
        ?>
</body>
</html> 
