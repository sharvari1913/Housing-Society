<html>

<head>
    <?php //include("include_css.php"); ?>
    <style>
    .login-card-body .input-group .form-control {
        border-right: none !important;
    }
    </style>
</head>

<body class="hold-transition login-page">
    <?php
session_start();
include('config.php');

?>
    <?php 
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$user_id="";
	if($username=="" & $password=="")
	{
		echo "<script>alert('Username or Password should not be blank');window.location.href='index.php'</script>";
	}
	else
	{
		echo "<script>alert('Username or Password Matched');</script>";
	$sql= "SELECT * FROM user_mst WHERE `username`='$username' AND `password`='$password'";
	//echo "hi";
	$result = mysqli_query($con, $sql);
	if($result==false ){die( mysqli_errno($con));}
	
	$count =(mysqli_num_rows($result));
	//print_r($count);
	if(($count>=1))
		{
			 //$row=mysqli_fetch_assoc($result);
			 $row=mysqli_fetch_array($result);
			 
		   if($row["group_level"]==9)
		  {
			  $_SESSION['username'] = $username;
			 // $_SESSION['user_id'] = $user_id;
			  $_SESSION['user_id'] = $row['user_id'];
			  $_SESSION['group_id'] = $row['group_level'];
			  $_SESSION['soc_id'] = $row['soc_id'];
			  //echo "admin";
		     header("Location: dash.php");
             //echo $_SESSION['user_id'];
		  }
		   
		   elseif($row["group_level"]==1)
		   {
			    $_SESSION['username'] = $username;
			    $_SESSION['user_id'] = $row['user_id'];
			    $_SESSION['group_id'] = $row['group_level'];
				$_SESSION['soc_id'] = $row['soc_id'];
			    //echo "Secretary";
				header("Location: dash.php");
                
		   }

		   elseif($row["group_level"]==2)
		   {
			    $_SESSION['username'] = $username;
			    $_SESSION['user_id'] = $row['user_id'];
			    $_SESSION['group_id'] = $row['group_level'];
				$_SESSION['soc_id'] = $row['soc_id'];
			    // echo "Member";
			 	header("Location: dash.php");
                
		   }	     
		}
		else
		{
			echo "<script>alert('Username or Password is Invalid');window.location.href='index.php'</script>";
			
		}
	}
}
?>
    <?php //include("include_js.php"); ?>
    <script src="js/main.js"></script>
</body>

</html>