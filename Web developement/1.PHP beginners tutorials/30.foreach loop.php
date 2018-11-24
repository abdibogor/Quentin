<?php 
     /*$array['Kylie']*/
	
	/*
	$normal_array = array('Sandra','Courtney','Samantha');
	$assoc_array = array('Ryan'=>150,'Kyle'=>21.95,'Sean'=>0.99);
	  foreach($normal_array as $value){
	  	  echo 'Value : '.$value.'<br/>';
	  }
	  */

	  $normal_array = array('Sandra','Courtney','Samantha');
	$assoc_array = array('Ryan'=>150,'Kyle'=>21.95,'Sean'=>0.99);
	foreach($assoc_array as $key => $value)
	  {
	  	  echo $key.' owes you '.$value.'<br/>';
	  }
?>