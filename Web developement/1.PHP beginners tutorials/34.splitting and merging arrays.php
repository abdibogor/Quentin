<?php
        $fruit = array('oranges','apples','strawberries','banana','blueberries');
        /*
         $new_array = array_slice($fruit,2,3);
         foreach($new_array as $value){
         	  echo $value.'<br/>';
         }
         */
    $food = array('burgers','pizza','fries','pies');
    $merged_arrays = array_merge($fruit,$food);   
    foreach($merged_arrays as $value){
		echo $value.'<br/>';
    }
?>