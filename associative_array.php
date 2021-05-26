<?php
//declaring associative array
//one way
$student_marks=array("Maths"=>78,"Physics"=>90);

//second way
$student_age['one']=18;
$student_age['two']=20;
$student_age['three']=21;


//displaying array
echo $student_marks['Maths']."<br>";
echo $student_age['one']."<br>";


//looping through array

foreach ($student_marks as $key => $value) {
	echo "Marks of Student in ".$key ." = ".$value;
	echo "<br>";
}

foreach ($student_age as $key => $value) {
	echo "Student age of First Student".$key."=".$value;
	echo "<br>";
}
?>