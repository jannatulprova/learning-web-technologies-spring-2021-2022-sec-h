<?php
  function print_pattern($num)
  {
  	for($i=0;$i<$num;$i++)
  	{
  		for($j=0;$j<$i;$j++)
  		{
  			echo "*";
  		}
  		echo"\n";
  	}
  }
  $num=4;
  print_pattern($num);

?>