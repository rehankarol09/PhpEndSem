<?php
function checkPrime($n){
    if ($n <= 1)
      { 
        return 0; 
      }
   // Check from 2 to half of arr[i]
   for ($i = 2; $i <= $n/2; $i++){
      if ($n % $i == 0){
         return 0;
      }
      //return 1;
   }
   return 1;
}
$array=array( 1,3,5,4,8,13,11);
$primenumber=array();
$count=0;
$isprime=0;
$sizeofarray=sizeof($array);
for($j=0;$j<$sizeofarray;$j++)
{
     $isprime=checkPrime($array[$j]);
     if($isprime == 1 )   //|| $array[$j] == 2 || $array[$j] == 3 )
     {
        array_push($primenumber, $array[$j]);
        $count++;
     }
}
echo "Total number of prime number"." ". $count ."<br>";
echo "Largest prime number in array" ." " .max($primenumber);

?>