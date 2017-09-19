<?php
   $ar = array(2,5,1,4,6);
   $num = count($ar);
   for ($i = ($num - 1); $i >= 0; $i--)
   {
      for ($j = 1; $j <= $i; $j++)
      {
         if ($ar[$j-1] > $ar[$j])
         {
              $temp = $ar[$j-1];
              $ar[$j-1] = $ar[$j];
              $ar[$j] = $temp;
        }
      } 
  } 
   foreach ($ar as $value) {
   	echo $value;
   }

?>