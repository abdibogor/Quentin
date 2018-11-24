<?php
      $fruit = array('fruit'=>'oranges','fruit 2 '=>'apples','fruit 3 '=>'strawberries');
      //sort($fruit);
      //rsort($fruit);
      ksort($fruit);
      foreach($fruit as $key => $name){
      	  //echo $name.'<br>';
      	echo $key.' '.$name. '<br/>';
      }
?>