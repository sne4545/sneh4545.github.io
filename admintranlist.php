<html>
<head>
<title> Banking Project </title>
</head>
<style>
body {
	font-size:20px;
	
}
table{
	font-size:25px;
     
	
}
</style>

<body bgcolor= #ffdaa>
<img src="images/head4.png"> <br><br>


<table align=center border=5 width=90% cellpadding=5 cellspacing=5>

<tr><td colspan=5><h2 align=center> Transaction List <h2> </td></tr>
<tr><td> Tran No </td><td> Date </td><td> Ac No </td><td> Cr Amt</td><td> Db Amt</td></tr>
<?php
include("connfile.php");

	$sqlvar="select * from TranTab order by TranNo desc";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>");
		
	}
	
?>

</table>
<a href=adminmainpage.php> Back </a> 
<table width=100%>
<tr height=200%> <td></td> </tr>
</table>
<img src="images/head3.png">
</body>
</html>