<html>
<head>
<title>Kyqja</title>
</head>
<body>
<?php
session_start();
$UserName=$_POST['username'];
$Password=$_POST['password'];
$TipiShfrytezuesit=$_POST['typeofusers'];
if($TipiShfrytezuesit=="User")
{
$con = mysql_connect("localhost","root","");
mysql_select_db("sports", $con);	
$sql = "select * from users where Username='".$UserName."' and Passwordi='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{ 
trigger_error("Informacion i gabuar", E_USER_NOTICE);
}
else
{
$_SESSION['ID']=$row['UserID'];
$_SESSION['Name']=$row['Email'];
header("location:BallinaUser.php");
}	
mysql_close($con);
}
else if($TipiShfrytezuesit=="Administrator")
{
$con = mysql_connect("localhost","root","");
mysql_select_db("sports", $con);	
$sql = "select * from admin where Username='".$UserName."' and Passwordi='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{ 
trigger_error("Informacion i gabuar", E_USER_NOTICE);
}
else
{
$_SESSION['ID']=$row['AdminID'];
$_SESSION['Name']=$row['Email'];
header("location:BallinaAdmin.php");
}
mysql_close($con);
}
?>
</body>
</html>