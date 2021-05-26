<?php
$array=array();
 function large_number($array)
 {
    for($i=1;$i<sizeof($array);$i++)
    {
       if($array[0] < $array[$i])
          {
            $array[0]=$array[$i];
          }
    }
    return $array[0];

 }
 
 $array=array(89,90,1,4,104);
 $y=large_number($array);
 echo "Largest number is"." " .$y;


?>