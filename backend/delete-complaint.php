<?php
  session_start();
  ?>


<?php
  include("config.php");
?>

<?php

$comp_id = $_GET['id'];
//echo $id;

$query = "DELETE FROM `complaint` WHERE `comp_id`=".$comp_id;
//echo $query;

$result = Mysqli_query($con,$query);

if($result)
{
     echo "<script>alert('Record Deleted')</script>";
     header("location:view-complaint.php");

}
else
{
	echo "error";
}
?>