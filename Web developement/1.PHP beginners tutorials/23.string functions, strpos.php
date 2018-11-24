<?php
      //echo strpos('Hello my name is Quentin, what is your name?','name',13);

	$offset = 0;
	$string = 'Hello my name is Quentin, What is your name?';
	$find = 'name';
	$find_length = strlen($find);

    while($string_pos = strpos($string,$find,$offset)){
    	echo $find,' was found at ',$string_pos;
    	$offset = $string_pos + $find_length;
    }
?>