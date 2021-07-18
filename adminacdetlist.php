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


<table align=center border=0 width=80% cellpadding=6 cellspacing=5>
<tr><td><h3> AC Name </h3> </td><td><h3> Details </h3> </td><td><h3> Facilities </td><td> <h3> Min Bal </h3> </td></tr>
<?php
include("connfile.php");

	$sqlvar="select * from actypeTab order by actypename";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>");
		
	}
	
?>

</table>
<a href=adminmainpage.php> Back </a> 
<table width=200%>
<tr height=300> <td></td> </tr>
</table>
<img src="images/head3.png">
</body>
</html>