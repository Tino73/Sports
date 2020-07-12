<html>
<body>
<?php
if(!isset($_SESSION))
{
session_start();
}

$Lajmi=$_POST['lajmi'];
$ID=$_SESSION['ID'];
$con = mysql_connect ("localhost","root","");
mysql_select_db("sports", $con);
$sql = "insert into news(AdminID,Lajmi) values('".$ID."','".$Lajmi."')";
mysql_query ($sql,$con);
mysql_close ($con);
echo'<script type="text/javascript">alert("Lajmiu shtua me sukses");window.location=\'BallinaAdmin.php\';</script>';  
?>
</body>
</html>