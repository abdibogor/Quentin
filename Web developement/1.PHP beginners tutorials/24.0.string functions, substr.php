<?php
     $pizza = 'it\'s like you want to be thin and healthy but there is pizza'; 
     $find = 'healthy';

     $start = strpos($pizza,$find);
     $end = strlen($find);

     //echo substr($pizza,5,4);
     echo substr($pizza,$start,$end);
     
?>