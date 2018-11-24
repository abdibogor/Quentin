<?php
      for($i=0; $i<1000; $i++){
      	echo "hey I'am going to do this 1000 times and you cant stop me!!!<br/>";
      	if($i==10){
      	break;
        }
      }

      echo"<br/>";
      for($i=0; $i<10; $i++){
          echo $i.'<br/>';
      	}

      echo"<br/>";
      for($i=0; $i<10; $i++){
      	if($i%2 ==0){
      		continue;
      	}
          echo $i.'<br/>';
      	}	
?>