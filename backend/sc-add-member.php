<?php
  session_start();
?>

<?php
  include("config.php");
  ?>

<?php 
        if(isset($_POST['submit']))
        {
        $fullname = $_POST['fullnm'];
        $email = $_POST['email'];
        $societyid = $_POST['socid'];
        $flatno = $_POST['flat'];
        $mobileno = $_POST['mobile'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $grouplevel = $_POST['grouplevel'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $area = $_POST['area'];
               
        $sql="INSERT INTO `user_mst` (`full_name`, `email`, `soc_id`, `flat_no`, `mobile_no`, `age`, `gender`, `group_level`, `username`, `password`, `area` ) VALUES ('$fullname','$email', '$societyid', '$flatno', '$mobileno', '$age', '$gender', '$grouplevel', '$username', '$password', '$area')";  //echo $sql;
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo $sql;
            echo "<script>alert('Record Inserted');window.location.href='sc-view-member.php';</script>";
        //header("location:view-member.php");            
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
    <title>Add Member</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
        include("css.php");
       ?>

</head>

<body>

    <div class="wrapper d-flex align-items-stretch">

        <?php 
        include ("sidebar.php");
        ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php
        include ("navbar.php");
        ?>

            <section class="content">
                <div class="container-fluid">
                    <div class="row" id="add">
                        <div class="col-lg-12">
                            <div class="card mt-5">
                                <div class="card-header" style="background-color: #3b526b; color: white;">
                                    <h3 style="color:white;">Add New Member</h3>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Full
                                                        Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="fullnm" placeholder="Full Name" required
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="email" placeholder="Email" required
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Society
                                                        Id</label>
                                                    <select name="socid">
                                                        <option value=''>-----SELECT-----</option>
                                                        <?php 
                                                            // $conn=mysqli_connect('localhost','root',''); 
                                                            $result=mysqli_query($con,'SELECT soc_id, soc_name FROM society'); 
                                                                    while($row=mysqli_fetch_assoc($result)) { 
                                                                    echo "<option value='$row[soc_id]'>$row[soc_name]</option>"; 
                                                            } 
                                                         ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Flat
                                                        No</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="flat" placeholder="Flat No" required
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
                                                        name="mobile" placeholder="+91 123 456 7890" required
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Age</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="age" placeholder="Age" required
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom02"
                                                        class="form-label">Gender</label><br>
                                                    <input type="radio" name="gender" value="1">&nbsp Male &nbsp
                                                    <input type="radio" name="gender" value="9">&nbsp Female &nbsp
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom02" class="form-label">Group
                                                        Level</label><br>
                                                    <input type="radio" name="grouplevel" value="2">&nbsp Member &nbsp
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Username
                                                    </label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="username" placeholder="Username" required
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Password
                                                    </label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="password" placeholder="Password" required
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Area
                                                    </label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="area" placeholder="Area" required
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group pt-2">
                                                    <button class="btn btn-primary" type="submit"
                                                        name="submit">Submit</button>
                                                </div>
                                            </div>
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