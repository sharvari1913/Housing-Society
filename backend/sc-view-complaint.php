<?php
  session_start();
  $soc_id = $_SESSION['soc_id'];
  ?>

<?php
  include("config.php");
  ?>

<?php
      //$soc_id = $_GET['id'];
    ?>

<?php 
    if(isset($_POST['submit']))
    {
        // if($_POST['checkflag']==0)
        // {
        $societyid = $_POST['socid'];
        $fullname = $_POST['fullnm'];
        $complaintdate = $_POST['compdate'];
        $message = $_POST['message'];
        $status = $_POST['status'];
        $remark = $_POST['remark'];
        
    
        $sql= "UPDATE `complaint` SET `soc_id`='$societyid',`full_name`= '$fullname', `comp_date`= '$complaintdate', `message`='$message', `status`='$status',`remark`= '$remark' WHERE `comp_id`='".$comp_id."' ";
        //echo $sql;
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('Record Updated')</script>";
            header("location:sc-view-complaint.php");    
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
    <title>View Complaint</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    include("css.php");
    ?>

    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/datatable/dataTables.dataTables.css">
    <link rel="stylesheet" href="assets/css/datatable/buttons.dataTables.css">
    <link rel="stylesheet" href="assets/css/datatable/dataTables.bootstrap4.min.css">

</head>

<body>

    <div class="wrapper d-flex align-items-stretch">

        <?php 
        include ("sidebar.php");
        ?>
        <!-- Page Content -->
        <div id="content" class="p-4 p-md-5">

            <?php
        include ("navbar.php");
        ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group pt-2 text-right ">
                        <a href="add-complaint.php" class="btn btn-primary btn-lg abled" role="button"
                            aria-disabled="true">Add Complaint</a>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <table class="table table-bordered" style="background-color:white;" id="example">
                        <thead class="" style="background-color: #3b526b; color: white;">
                            <tr>

                                <th>Society Name</th>
                                <th>Full Name</th>
                                <th>Complaint Date</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Remark</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    //$query = " SELECT * FROM complaint where soc_id = $soc_id";
                                    $query = "select *, soc_name FROM complaint INNER JOIN society on society.soc_id = complaint.soc_id where complaint.soc_id = $soc_id";
                                    $query_run = mysqli_query($con, $query);
                                ?>
                            <?php
                                    if($query_run)
                                    {
                                        while($row = mysqli_fetch_array($query_run))
                                        {
                                ?>
                            <tr>
                                <td><?php echo $row['soc_name']; ?></td>
                                <td><?php echo $row['full_name']; ?></td>
                                <td><?php echo $row['comp_date']; ?></td>
                                <td><?php echo $row['message']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['remark']; ?></td>

                                <td>
                                    <a id="edit_society"
                                        href="sc-update-complaint.php?id=<?php echo $row['comp_id']. '"'; ?>	<span class="
                                        fa fa-pencil"></span></a>

                                    <a id="edit_society"
                                        href="delete-complaint.php?id=<?php echo $row['comp_id']. '"'; ?>	<span class="
                                        fa fa-trash"></span></a>
                                </td>

                            </tr>
                            <?php 
                                    }
                                    }
                                    else
                                    {
                                    echo "error";
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

    <?php
    include("js.php");
    ?>

    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="assets/js/datatable/dataTables.js"></script>
    <script src="assets/js/datatable/dataTables.buttons.js"></script>
    <script src="assets/js/datatable/buttons.dataTables.js"></script>
    <script src="assets/js/datatable/jszip.min.js"></script>
    <script src="assets/js/datatable/pdfmake.min.js"></script>
    <script src="assets/js/datatable/vfs_fonts.js"></script>
    <script src="assets/js/datatable/buttons.html5.min.js"></script>
    <script src="assets/js/datatable/buttons.print.min.js"></script>
        <script>
            $(document).ready(function() {
            $('#example').DataTable( {
            "pageLength": 10
            });
            });
        </script>

</body>

</html>