<?php
  session_start();
  ?>

<?php
  include("config.php");  
  ?>

<?php
    $comp_id = $_GET['id'];
?>

<?php 
    if(isset($_POST['submit']))
    {
        // if($_POST['checkflag']==0)
        // {
            $societynm = $_POST['socnm'];
            $fullname = $_POST['fullnm'];
            $complaintdate = $_POST['compdate'];
            $message = $_POST['message'];
            $status = $_POST['status'];
            $remark = $_POST['remark'];
           

            $sql= "UPDATE `complaint` SET `full_name`='$fullname',`comp_date`='$complaintdate',`message`='$message',`status`='$status', `remark`='$remark' WHERE `comp_id`='".$comp_id."' ";
            //echo $sql;
            
            
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('Record Updated')</script>";
            header("location:view-complaint.php");
            
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
    <title>Update Complaint</title>
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
                                    <h3 style="color:white;">Update Complaint</h3>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST">
                                        <?php
                                            $query = "select *, soc_name FROM complaint INNER JOIN society on society.soc_id = complaint.soc_id WHERE comp_id = '".$comp_id."' ";
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
                                                        name="socnm" value="<?php echo $row['soc_name'];?>"
                                                        style="text-transform: capitalize;" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Full
                                                        Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="fullnm" value="<?php echo $row['full_name'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Complaint Date
                                                    </label>
                                                    <input type="date" class="form-control" id="validationCustom01"
                                                        name="compdate" value="<?php echo $row['comp_date'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Message</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="message" value="<?php echo $row['message'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Status</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="status" value="<?php echo $row['status'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Remark</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="remark" value="<?php echo $row['remark'];?>"
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