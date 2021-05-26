<?php
/*
INSERT INTO `voter`(`voter_id`, `first_name`, `last_name`, `DOB`, `Aadhar_card_no`, `email_id`, `mobile_no`, `gender`, `address`, `Constituency`, `City`, `State`, `Country`, `district`, `pincode`)

*/

$first_name='';
$last_name='';
$DOB='';
$Aadhar_card_no='';
$email_id='';
$mobile_no='';
$gender='';
$address='';
$constituency='';
$city='';
$state='';
$country='';
$district='';
$pincode='';


$conn=new mysqli('localhost','root','','voting') or die($conn);


if(isset($_POST['submit']))
{      
$first_name=mysqli_real_escape_string($conn,$_POST['first_Name']);
$last_name=mysqli_real_escape_string($conn,$_POST['last_Name']);
$DOB=mysqli_real_escape_string($conn,$_POST['dob']);
$Aadhar_card_no=mysqli_real_escape_string($conn,$_POST['Aadhar_card_no']);
$email_id=mysqli_real_escape_string($conn,$_POST['email_id']);
$mobile_no=mysqli_real_escape_string($conn,$_POST['mobile_no']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$address=mysqli_real_escape_string($conn,$_POST['email_id']);
$constituency=mysqli_real_escape_string($conn,$_POST['address']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$state=mysqli_real_escape_string($conn,$_POST['state']);
$country=mysqli_real_escape_string($conn,$_POST['country']);
$district=mysqli_real_escape_string($conn,$_POST['district']);
$pincode=mysqli_real_escape_string($conn,$_POST['pincode']);

$sql="INSERT INTO voter(first_name,last_name, DOB, Aadhar_card_no, email_id, mobile_no, gender, address, Constituency, City, State, Country, district, pincode)
      Values('$first_name','$last_name','$DOB','$Aadhar_card_no','$email_id','$mobile_no','$gender','$address','$constituency','$city','$state','$country','$district','$pincode')";
if($conn->query($sql)== TRUE)
{
   echo "Data inserted succesfully";
}
else
{
    echo "Database error".$conn->error;
}


}

$conn->close();
?>
