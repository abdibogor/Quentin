<?php 
		/*
       $apples = 'fudge you noob! Fudge this and fudge that!';
        echo strtoupper($apples);
		*/

	$apples = 'fudge you noob! Fudge this and fudge that!';
	$apples_lower = strtolower($apples);
	$new_apples = str_replace('fudge','****',$apples_lower);
	echo $new_apples;

?>