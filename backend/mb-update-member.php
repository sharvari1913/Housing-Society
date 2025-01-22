<?php
  session_start();
  if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
  }
  ?>

<?php
  include("config.php");
  ?>

<?php
   // $user_id = $_GET['id'];  
?>

<?php 
    if(isset($_POST['submit']))
    {
        // if($_POST['checkflag']==0)
        // {
            $fullname = $_POST['fullnm'];
            $email = $_POST['email'];
            $societynm = $_POST['socnm'];
            $flatno = $_POST['flat'];
            $mobileno = $_POST['mobile'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $grouplevel = $_POST['grouplevel'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            

            $sql= "UPDATE `user_mst` SET `full_name`='$fullname',`email`='$email', `flat_no`='$flatno', `mobile_no`='$mobileno', `age`='$age', `gender`='$gender', `group_level`='$grouplevel', `username`='$username', `password`='$password' WHERE `user_id`='".$user_id."' ";
            //echo $sql;
            

        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('Record Updated')</script>";
            header("location:mb-update-member.php");
            
        }
        else
        {
            echo "<script>alert('Error')</script>";

        }
        
        
        }
?>




<!doctype html>
<html lang="en">

<head>
    <title>Update Member</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    include("css.php");
    ?>

</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include("sidebar.php");
        ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <?php
            include("navbar.php");
            ?>

            <section class="content">
                <div class="container-fluid">
                    <div class="row" id="add">
                        <div class="col-lg-12">
                            <div class="card mt-5">
                                <div class="card-header" style="background-color: #3b526b; color: white;">
                                    <h3 style="color:white;">Update Member</h3>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST">
                                        <?php
                                            $query = "select *, soc_name FROM user_mst INNER JOIN society on society.soc_id = user_mst.soc_id WHERE user_id = '".$user_id."' ";
                                            //echo $query;
                                            $result = mysqli_query($con, $query);
                                            if($row = mysqli_fetch_assoc($result));
                                            {
                                        ?>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="fullnm" value="<?php echo $row['full_name'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="email" value="<?php echo $row['email'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Society
                                                        Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="socnm" value="<?php echo $row['soc_name'];?>"
                                                        style="text-transform: capitalize;" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Flat
                                                        No</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="flat" value="<?php echo $row['flat_no'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Mobile
                                                        Number</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="mobile" value="<?php echo $row['mobile_no'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Age</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="age" value="<?php echo $row['age'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom02" class="form-label">Gender
                                                    </label><br>
                                                    &nbsp<input type="radio" name="gender" value="1"
                                                        <?php $gid =$row['gender']; if($gid==1){ echo ("checked");} ?>>&nbsp
                                                    Male
                                                    &nbsp &nbsp <input type="radio" name="gender" value="2"
                                                        <?php $gid =$row['gender']; if($gid==2){echo ("checked");} ?>>&nbsp
                                                    Female
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom02" class="form-label">Group Level
                                                    </label><br>
                                                    &nbsp &nbsp <input type="radio" name="grouplevel" value="2"
                                                        <?php $gid =$row['group_level']; if($gid==2){echo ("checked");} ?>>&nbsp
                                                    Member
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Username</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="username" value="<?php echo $row['username'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Password</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="password" value="<?php echo $row['password'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group pt-2">
                                                    <button class="btn btn-primary" type="submit"
                                                        name="submit">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                                }
                                            ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




        </div>
    </div>

    <?php
    include('js.php');
    ?>
</body>

</html>