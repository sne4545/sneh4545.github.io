
<?php
include("connfile.php");
$ano=$_GET['acno'];
$sqlvar="update CustAcTab set custapp='Y' where acno=$ano";
$result=$conn -> query($sqlvar);
if($result)
{
	header('location: admincustapp.php');
}
	
?>
