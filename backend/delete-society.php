<?php
  session_start();
  ?>

<?php
  include("config.php");  
  ?>

<?php


$soc_id = $_GET['id'];
//echo $id;

$query = "DELETE FROM `society` WHERE `soc_id`=".$soc_id;
//echo $query;

$result = Mysqli_query($con,$query);

if($result)
{
     echo "<script>alert('Record Deleted')</script>";
     header("location:view-society.php");

}
else
{
	echo "error";
}
?>