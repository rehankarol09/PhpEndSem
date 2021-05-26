
<?php
if(isset($_POST['submit'])){
$First_Name = "First Name:".$_POST['first_Name']."
";
$Last_name = "Last Name:".$_POST['last_Name']." 
";
$DOB="DOB: ".$_POST['dob']." 
";
$group="Blood Group: ".$_POST['blood']." 
";
$mobile_no="Mobile Number: ".$_POST['mobile_no']." 
";
$Aadhar_card_no="Aadhar_card_no: ".$_POST['Aadhar_card_no']." 
";
$gender="Gender: ".$_POST['gender']."
 ";
$city="city:".$_POST['city']."
 ";
$state="state:".$_POST['state']." ";
$pincode="Pin code:".$_POST['pincode']." 
";
$country="Country:".$_POST['country']."
 ";

/*
Aadhar_card_no
gender
city
state
pincode
country
*/



$file=fopen("file1.txt", "a");
fwrite($file, $First_Name);
fwrite($file, $Last_name);
fwrite($file, $DOB);
fwrite($file, $group);
fwrite($file, $mobile_no);
fwrite($file, $Aadhar_card_no);
fwrite($file, $gender);
fwrite($file, $city);
fwrite($file, $state);
fwrite($file, $pincode);
fwrite($file, $country);

fclose($file);
}
?>


