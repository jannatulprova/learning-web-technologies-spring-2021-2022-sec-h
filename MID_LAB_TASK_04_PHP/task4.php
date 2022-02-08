<?php
      $num1=450;
      $num2=840;
      $num3=5678;
      if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else
      {
        if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
      }


?>