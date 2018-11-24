<?php
     $value = 4;

     function scoper(){
     	    global $value;
     	    //$value = 800;
     	    //echo $value;
     	    echo 'function value is : '.$value.'<br/>';
    }

    scoper();

    echo 'global value is : '.$value;
?>