<?php
  session_start();
  ?>

<?php
  include("config.php");
  ?>

<?php
    $notice_id = $_GET['id'];
?>

<?php 
    if(isset($_POST['submit']))
    {
        // if($_POST['checkflag']==0)
        // {
        $societynm = $_POST['socnm']; 
        $notice= $_POST['notice'];
        $noticedate = $_POST['noticedate'];

        $sql= "UPDATE `notice` SET `notice`='$notice',`no_date`='$noticedate' WHERE `notice_id`='".$notice_id."' ";
        //echo $sql;
            

        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('Record Updated')</script>";
            header("location:view-notice.php");
            
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
    <title>Update Notice</title>
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
                                    <h3 style="color:white;">Update Notice</h3>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST">
                                        <?php
                                            $query = "select *, soc_name FROM notice INNER JOIN society on society.soc_id = notice.soc_id WHERE notice_id  = '".$notice_id ."' ";
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
                                                    <label for="validationCustom01" class="form-label">Notice</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="notice" value="<?php echo $row['notice'];?>"
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Notice Date
                                                    </label>
                                                    <input type="date" class="form-control" id="validationCustom01"
                                                        name="noticedate" value="<?php echo $row['no_date'];?>"
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