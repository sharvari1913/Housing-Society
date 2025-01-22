<?php
  session_start();
  ?>

<?php
  include("config.php");
  ?>

<?php
      $soc_id = $_GET['id'];
    ?>

<?php 
    if(isset($_POST['submit']))
    {
        // if($_POST['checkflag']==0)
        // {
            $societyname=$_POST['societynm'];
            $societyaddress=$_POST['societyadd'];
            $sql= "UPDATE `society` SET `soc_name`='$societyname',`address`='$societyaddress' WHERE `soc_id`='".$soc_id."' ";
       
        //echo $sql;

        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('Record Updated')</script>";
            header("location:view-society.php");
            
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
    <title>Update Society</title>
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
                                    <h3 style="color:white;">Update Society</h3>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST">
                                        <?php
                                            $query = "SELECT * FROM `society` WHERE soc_id = '".$soc_id."' ";
                                            //echo $query;
                                            $result = mysqli_query($con, $query);
                                            if($row = mysqli_fetch_assoc($result));
                                            {
                                        ?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="validationCustom01" class="form-label">Society Name</label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    name="societynm" value="<?php echo $row['soc_name'];?>"
                                                    style="text-transform: capitalize;">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="validationCustom01" class="form-label">Society
                                                    Address</label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    name="societyadd" value=" <?php echo $row['address'];?>"
                                                    style="text-transform: capitalize;">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <button class="btn btn-primary" type="submit"
                                                    name="submit">Update</button>
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