<?php
  session_start();
  ?>

<?php
  include("config.php");
?>

<?php

$notice_id  = $_GET['id'];
//echo $id;

$query = "DELETE FROM `notice` WHERE `notice_id`=".$notice_id;
//echo $query;

$result = Mysqli_query($con,$query);

if($result)
{
     echo "<script>alert('Record Deleted')</script>";
     header("location:view-notice.php");

}
else
{
	echo "error";
}
?>