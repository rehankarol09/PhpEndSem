<?php

//defining constant 
//consant are global and can be accesed from anywhere
//constant are declare using define function
//value of constant remains same

define("number",9);
echo number."<br>";


function add($a)
{
	echo "Addition of " .$a ." +".number."=".$a+number;
}

add(7);

?>