<?php
  session_start();
  ?>

<?php
  include("config.php");  
?>

<?php


$main_id = $_GET['id'];
//echo $id;

$query = "DELETE FROM `maintenance` WHERE `main_id`=".$main_id;
//echo $query;

$result = Mysqli_query($con,$query);

if($result)
{
     echo "<script>alert('Record Deleted')</script>";
     header("location:view-maintenance.php");

}
else
{
	echo "error";
}
?>