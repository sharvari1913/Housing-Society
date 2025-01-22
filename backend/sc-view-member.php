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
            $fullname = $_POST['fullnm'];
            $email = $_POST['email'];
            $societyid = $_POST['socid'];
            $flatno = $_POST['flat'];
            $mobileno = $_POST['mobile'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $grouplevel = $_POST['grouplevel'];
            $area = $_POST['area'];
            $rent = $_POST['rent'];
            $sell = $_POST['sell'];
    
            $sql= "UPDATE `user_mst` SET `full_name`='$fullname',`email`='$email',`soc_id`='$societyid', `flat_no`='$flatno', `mobile_no`='$mobileno', `age`='$age', `gender`='$gender', `group_level`='$grouplevel', `rent`='$rent', `sell`='$sell' WHERE `user_id`='".$user_id."' ";

        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('Record Updated')</script>";
            header("location:sc-view-member.php");    
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
    <title>View Members</title>
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
                        <a href="sc-add-member.php" class="btn btn-primary btn-lg abled" role="button"
                            aria-disabled="true">Add Member</a>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <table class="table table-bordered" style="background-color:white;" id="example">
                        <thead class="" style="background-color: #3b526b; color: white;">
                            <tr>

                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Society Name</th>
                                <th>Flat No</th>
                                <th>Mobile No</th>

                                <th>Age</th>
                                <th>Gender</th>
                                <th>Area</th>
                                <th>Rent</th>
                                <th>Sell</th>

                                <th>Group Level</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    //$query = " SELECT * FROM user_mst where soc_id = $soc_id";
                                    $query = "select *, soc_name FROM user_mst INNER JOIN society on society.soc_id = user_mst.soc_id where user_mst.soc_id = $soc_id";
                                    $query_run = mysqli_query($con, $query);
                                ?>
                            <?php
                                    if($query_run)
                                    {
                                        while($row = mysqli_fetch_array($query_run))
                                        {
                                ?>
                            <tr>
                                <td><?php echo $row['full_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['soc_name']; ?></td>
                                <td><?php echo $row['flat_no']; ?></td>
                                <td><?php echo $row['mobile_no']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['area']; ?></td>
                                <td><?php echo $row['rent']; ?></td>
                                <td><?php echo $row['sell']; ?></td>
                                <td><?php echo $row['group_level']; ?></td>


                                <td>
                                    <a id="edit_society"
                                        href="sc-update-member.php?id=<?php echo $row['user_id']. '"'; ?>	<span class="
                                        fa fa-pencil"></span></a>

                                    <a id="edit_society"
                                        href="delete-member.php?id=<?php echo $row['user_id']. '"'; ?>	<span class=" fa
                                        fa-trash"></span></a>
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