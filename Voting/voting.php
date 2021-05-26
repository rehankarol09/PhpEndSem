<?php
   include('file.php');
?>

<html>
<head>
<title>VOTER REGISTRATION FORM</title>
<style type="text/css">
	h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:SlateBlue;
  text-align: center; 
  text-decoration: underline;

}

table{
  font-family: Calibri; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  background-color: SlateBlue; 
  border-collapse: collapse; 
  border: 2px solid navy;
}

td{
  border-collapse: collapse; 
  border: 2px solid navy;
}

form table
{
  width:50%;
}

table.inner{
  border: 0px
}
</style>
</head>
 
<body>
<h3>VOTER REGISTRATION FORM</h3>

<form method="Post" action="file.php">
 
<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="first_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="last_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
  <input type="date" name="dob" value="<?php date('Y-m-d') ?>">
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="email_id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="mobile_no" maxlength="10" />
</td>
</tr>

<!----- Previous  Experinece ---------------------------------------------------------->
<tr>
<td>Aadharno</td>
<td><input type="text" name="Aadhar_card_no"  />
</td>
</tr>

 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="gender" value="Male" />
Female <input type="radio" name="gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS</td>
<td><input type="textarea" name="address"  />

</td>
</tr>
 

<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="city" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- District ---------------------------------------------------------->
<tr>
<td>DISTRICT</td>
<td><input type="text" name="district" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>


<!----- CONSTITUENCY ---------------------------------------------------------->
<tr>
<td>CONSTITUENCY</td>
<td><input type="text" name="constituency" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>

 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="state" maxlength="30" />
</td>
</tr>


<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="pincode" maxlength="6" />
(6 digit number)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="country" value="India" readonly="readonly" /></td>
</tr>
 
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<button type="submit" name="submit">Submit</button>
</td>
</tr>
</table>
 
</form>
 
</body>
</html>