<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
	
	table{
  font-family: Calibri; 
  color:black; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  width: 40%;
  border-collapse: collapse; 
  border: 2px solid navy
}
td{
	border-collapse: collapse;
	border:1px solid black;
}
</style>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
$dateofbirth=date('Y-m-d',strtotime($_POST['dateofbirth']));

echo "<table align='center' cellpadding = '10'>";
echo "<tr >";
echo "<td colspan='2' align='center'><h3>Student details</h3></td>";
echo "</tr>";
echo "<tr>";
echo "<td>FIRST NAME</td>";
echo "<td>".$_POST['First_Name'];
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>LAST  NAME</td>";
echo "<td>".$_POST['Last_Name'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Date of Birth</td>";
echo "<td>".$dateofbirth;
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Email id</td>";
echo "<td>".$_POST['Email_Id'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Contact NUmber</td>";
echo "<td>".$_POST['Mobile_Number'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Gender</td>";
echo "<td>".$_POST['Gender'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>City</td>";
echo "<td>".$_POST['City'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>State</td>";
echo "<td>".$_POST['State'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Country</td>";
echo "<td>".$_POST['Country'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Pincode</td>";
echo "<td>".$_POST['Pin_Code'];
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>";
 
echo "<td>";
echo "<table>";
 
echo "<tr>";
echo "<td align='center'><b>Sl.No.</b></td>";
echo "<td align='center'><b>Examination</b></td>";
echo "<td align='center'><b>Board</b></td>";
echo "<td align='center'><b>Percentage</b></td>";
echo "<td align='center'><b>Year of Passing</b></td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>1</b></td>";
echo "<td><b>Class X</b></td>";
echo "<td><b>" .$_POST['ClassX_Board']  ."</b></td>";
echo "<td><b>" .$_POST['ClassX_Percentage']. "</b></td>";
echo "<td><b>" .$_POST['ClassX_YrOfPassing']. "</b></td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>1</b></td>";
echo "<td><b>Class XII</b></td>";
echo "<td><b>" .$_POST['ClassXII_Board']  ."</b></td>";
echo "<td><b>" .$_POST['ClassXII_Percentage']. "</b></td>";
echo "<td><b>" .$_POST['ClassXII_YrOfPassing']. "</b></td>";
echo "</tr>";

echo "</table>";
 
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Course Applied</td>";
echo "<td>".$_POST['course'];
echo "</td>";
echo "</tr>";

echo "</table>";
}

?>
</body>
</html>
