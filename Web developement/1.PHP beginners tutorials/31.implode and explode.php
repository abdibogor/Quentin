<?php 
       $people = array('Quentin','Courtney','Samantha','Sean');
       //$newstring = implode(' : ',$people);
       //echo $newstring;

       $string = 'The key to immortality, not dying';
       $new_array = explode(' ',$string);
       foreach($new_array as $value){
       	echo $value.'<br/>';
       }
?>