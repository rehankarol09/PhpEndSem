<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="factusingrecursion.php">
	<input type="number" name="integer">
	<button type="submit" name="submit">Submit</button>
</form>

<?php
 function fact($n)
     {
	    if($n<1)
	    {
	     	return 1;
	    }
	else{
		return $n*fact($n-1);
	}
	
}

if(isset($_POST['submit']))
{
  $integer=$_POST['integer'];
  $y=fact($integer);
  echo "Factorial of ".$integer."is  ".$y;
}
?>

</body>
</html>
