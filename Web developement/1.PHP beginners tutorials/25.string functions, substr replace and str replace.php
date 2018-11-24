<?php
      $apples = 'fudge you noob! Fudge this and fudge that!';
      //$new_apples = substr_replace($apples,'****',0,5);
      $new_apples = str_replace('fudge','*****',$apples);
      echo $new_apples;
?> 