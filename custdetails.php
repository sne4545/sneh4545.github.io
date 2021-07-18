<html>
<head>
<title> Banking Project </title>
</head>
<style>
body {
	font-size:20px;
	
}
table{
	font-size:20px;
	
}
</style>

<body bgcolor= #ffdaa>
<img src="images/head4.png"> <br><br>


<table align=center border=1 width=80% cellpadding=5 cellspacing=5>

<?php
include("connfile.php");
session_start();
$v1=$_SESSION['acno'];

	$sqlvar="select * from CustAcTab where acno=$v1";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td> ACNo </td><td>".$row[0]." </td></tr><tr><td> Name </td><td>".$row[2]."</td></tr> <tr><td> Address </td><td>".$row[3]."</td></tr> <tr><td> MobileNo</td><td>".$row[4]."</td></tr> <tr><td> eMail</td><td>".$row[5]."</td></tr> <tr><td> actype</td><td>".$row[6]."</td></tr>");
		
	}
	
?>

</table>
<a href=custmainpage.php> Back </a> 
<table width=100%>
<tr height=200> <td></td> </tr>
</table>
<img src="images/head3.png">
</body>
</html>