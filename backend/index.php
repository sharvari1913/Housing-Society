<?PHP require("config.php"); ?>
<?php
if(isset($_GET['logout']))
{
  session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy(); 
header('location:index.php');
}

//if (session_status() == PHP_SESSION_ACTIVE) {
  //echo 'Session is active';
  //header('location:dashboard.php');
   //}

//    echo bcc_mail;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login-page.css">
</head>

<body>

    <section>
        <div class="login-box">
            <form name="f1" action="verify_login.php" method="post">
                <h2>Login</h2>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </span>
                    </span>
                    <input type="text" class="form-control" id="username" name="username" onchange="CheckValidation()">
                    <label>Username</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" class="form-control" id="password" name="password"
                        onchange="CheckValidation()">
                    <label>Password</label>
                </div>
                <!-- <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#"> Forgot Password?</a>
                </div> -->
                <!-- <button type="Sumbit">Login</button> -->
                <button type="submit" name="submit" class="btn btn-primary btn-block" onclick="CheckUser()">Sign
                    In</button>
                <div class="Register-link">
                    <p> Don't have an Account? <a href="register.php">Register</a></p>
                </div>

            </form>


        </div>
    </section>

    <?php
	if(isset($_POST["submit"]))
		{
			 $uname=$_POST["username"];
			$pass=$_POST["password"];

			$select="select * from user_mst where username='$uname' ";
						$run=mysqli_query($con,$select);
										
						$vemail=mysqli_num_rows($run);
						if($vemail==1)
							{
								$select2="select * from user_mst where password='$pass'";
								$run2=mysqli_query($con,$select2);
											
								$vpass=mysqli_num_rows($run2);
								if($vpass==1)
									{
										$select3="select * from user_mst where username='$uname' AND password='$pass'";
										$run3=mysqli_query($con,$select3);
										
										$log=mysqli_num_rows($run3);
												
										if($log==1)
											{
												@session_start();
					
												$_SESSION["username"]=$uname;

												echo "<script> alert('login done'); </script>";
														
												echo "<script> window.location.href='index.php'; </script>";		
											}
											else
											{
												echo "<script> alert('wrong password'); </script>";
												 $_SESSION["login_attempts"] += 1;
											}
									}
									else
									{
										echo "<script> alert('wrong password'); </script>";
										 $_SESSION["login_attempts"] += 1;
									}
									}
									else
										{
											echo "<script> alert('you are not Registered'); </script>";
										 	$_SESSION["login_attempts"] += 1;
										}
		}	
	
	?>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script type="text/javascript">
    function CheckUser() {
        var letters = /^[^'"]*$/;
        if (username.value == "" && password.value == "") {
            alert('Enter username or password');

        } else if (username.value.match(letters) && password.value.match(letters)) {
            this.focus();
            return true;
        } else {
            alert('Cant get special characters like single and double quotes');
            return false;
        }
    }

    function CheckValidation() {
        var letters = /^[^'"]*$/;
        if (username.value.match(letters) && password.value.match(letters)) {

            this.focus();
            //$("#username").val()=" ";
            return true;
        } else {
            alert('Cant get special characters like single and double quotes');
            document.getElementById("username").value = "";
            return false;
        }
    }
    </script>

</body>

</html>