<html>
<body>

<?php

$Email=$_POST['email'];
$Username=$_POST['username'];
$Password=$_POST['password'];
$Type=$_POST['typeofusers'];
$con = mysql_connect("localhost","root","");
mysql_select_db("sports", $con);

$sql = "INSERT INTO admin (Email, Username, Passwordi, TypeOfUser)
VALUES ('".$Email."', '".$Username."', '".$Password."','".$Type."')";
mysql_query ($sql,$con);
mysql_close ($con);
echo'<script type="text/javascript">alert("Regjistrimi me sukses");window.location=\'login.php\';</script>';  

?>



</body>

</html>