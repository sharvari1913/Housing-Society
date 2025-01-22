<?php
  session_start();
  ?>

<?php
  include("config.php");
?>

<?php

$user_id = $_GET['id'];
//echo $id;

$query = "DELETE FROM `user_mst` WHERE `user_id`=".$user_id;
//echo $query;

$result = Mysqli_query($con,$query);

if($result)
{
     echo "<script>alert('Record Deleted')</script>";
     header("location:view-member.php");

}
else
{
	echo "error";
}
?>