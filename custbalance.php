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
<tr> <td colspan=2> <h1> Balance Amount </h1> </tr>
<?php
include("connfile.php");
session_start();
$v1=$_SESSION['acno'];

	$sqlvar="select (sum(dbamt) - sum(cramt) ) as Balance from TranTab where acno=$v1";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td> Balance Amt </td><td>".$row[0]." </td></tr>");
		
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