<html>
<body>
<?php
if(!isset($_SESSION))
{	
session_start();
}
?>

Mir&euml Se Erdh&eumlt <?php echo $_SESSION['Name']; ?>


</body>
</html>