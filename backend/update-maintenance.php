<?php
  session_start();
  ?>

<?php
  include("config.php"); 
?>

<?php
    $main_id = $_GET['id'];
?>

<?php 
    if(isset($_POST['submit']))
    {
        // if($_POST['checkflag']==0)
        // {
            $societynm = $_POST['socnm'];
            $maintype = $_POST['maintype'];
            $maindate = $_POST['maindate'];
            $paymode = $_POST['paymode'];
            $paydate = $_POST['paydate'];

            $sql= "UPDATE `maintenance` SET `main_type`='$maintype', `main_date`='$maindate', `pay_mode`='$paymode', `pay_date`='$paydate' WHERE `main_id`='".$main_id."' ";
            //echo $sql;
            

        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('Record Updated')</script>";
            header("location:view-maintenance.php");          
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
    <title>Update Maintenance</title>
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
                                    <h3 style="color:white;">Update Maintenance</h3>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST">
                                        <?php
                                            $query = "select *, soc_name FROM maintenance INNER JOIN society on society.soc_id = maintenance.soc_id WHERE main_id = '".$main_id."' ";
                                            //echo $query;
                                            $result = mysqli_query($con, $query);
                                            if($row = mysqli_fetch_assoc($result));
                                            {
                                        ?>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Society
                                                        Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="socid" value="<?php echo $row['soc_name'];?>"
                                                        style="text-transform: capitalize;" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Maintenance
                                                        Type</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="maintype" value="<?php echo $row['main_type'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Maintenance
                                                        Date</label>
                                                    <input type="date" class="form-control" id="validationCustom01"
                                                        name="maindate" value="<?php echo $row['main_date'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Payment
                                                        Mode</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="paymode" value="<?php echo $row['pay_mode'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Payment
                                                        Date</label>
                                                    <input type="date" class="form-control" id="validationCustom01"
                                                        name="paydate" value="<?php echo $row['pay_date'];?>"
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