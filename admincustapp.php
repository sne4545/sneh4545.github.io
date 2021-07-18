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

<body bgcolor= #ffddaa>
<img src="images/head4.png"> <br><br>


<table align=center border=4 width=80% cellpadding=5 cellspacing=5>
<tr><td><h3> ACNo </h3> </td><td><h3> Name </h3></td><td><h3> Address </td><td><h3> MobileNo</h3></td><td><h3> Email </h3></td><td><h3> Actype</h3></td></tr>
<?php
include("connfile.php");

	$sqlvar="select * from CustAcTab where custapp='N'";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td><a href=adminapp.php?acno=".$row[0].">".$row[0]." </a></td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>");
		
	}
	
?>

</table>
<a href=adminmainpage.php> Back </a> 
<table width=100%>
<tr height=400> <td></td> </tr>
</table>
<img src="images/head3.png">
</body>
</html>