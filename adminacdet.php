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
	align: center;
	
}
</style>

<body bgcolor= #ffdaa>
<img src="images/head4.png"> <br><br>
<?php
include("connfile.php");
session_start();
$res="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
	//echo("working");
	$v1=$_POST['text1'];
	$v2=$_POST['text2'];
	$v3=$_POST['text3'];
	$v4=$_POST['text4'];
	//echo $v1."  ".$v2;
	$sqlvar="insert into actypeTab values('$v1','$v2','$v3',$v4)";
	$result=$conn -> query($sqlvar);
	if($result)
	{
		$res="Record Inserted";
		
	}
	else
	{
		
		$res="Record Not Inserted, Some problem";
	}
	
	
}
?>

<form name=form1 method="post"  action="adminacdet.php">

<table width=80% border=1 cellspacing=5 cellpadding=5 align=center>
<tr> <td colspan=2><h2 style="text-align: center">AC TYPE DETAILS ENTRY</h2> </td> </tr>
<tr> <td><h3> AcName </h3> </td> <td> <input type=text name=text1> </td> </tr>
<tr> <td ><h3> AcDetails </h3> </td> <td> <input type=text name=text2> </td> </tr>
<tr> <td ><h3> Facilities </h3> </td> <td> <input type=text name=text3> </td> </tr>
<tr> <td ><h3> MinBalance </h3> </td> <td> <input type=text name=text4> </td> </tr>
<tr> <td > <a href=adminmainpage.php> Back </a> </td> <td> <input type=submit name=Login  style="height: 45px; width: 150px"> </td> </tr>
<tr> <td colspan=2> <?php echo $res; ?> </td> </tr>
</table>

</form>

<table width=95%>
<tr height=100> <td></td> </tr>
</table>
<img src="images/head3.png">
</body>
</html>