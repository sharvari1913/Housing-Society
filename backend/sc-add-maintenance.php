<?php
  session_start();
?>

<?php
  include("config.php");
 ?>

<?php 
        if(isset($_POST['submit']))
        {
        $societyid = $_POST['socid'];
        $maintype = $_POST['maintype'];
        $maindate = $_POST['maindate'];
        $paymode = $_POST['paymode'];
        $paydate = $_POST['paydate'];
        $bill = $_POST['bill'];
    
        
        $sql="INSERT INTO `maintenance`(`soc_id`, `main_type`, `main_date`, `pay_mode`, `pay_date`,`bill`) VALUES ('$societyid', '$maintype', '$maindate', '$paymode', '$paydate', '$bill')";  //echo $sql;
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo $sql;
            echo "<script>alert('Record Inserted');window.location.href='sc-view-maintenance.php';</script>";
        //header("location:sc-view-maintenance.php");
            
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
    <title>Add Maintenance</title>
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
                                    <h3 style="color:white;">Add New Maintenance</h3>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Society
                                                        Name</label>
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
                                                    <label for="validationCustom01" class="form-label">Maintenance
                                                        Type</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="maintype" placeholder="Maintenance Type" required
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
                                                        name="maindate" placeholder="+91 123 456 7890" required
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Payment
                                                        Mode</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="paymode" placeholder="Payment Mode" required
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
                                                        name="paydate" placeholder="Payment Date" required
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Maintenance Bill</label>
                                                    <input type="number" class="form-control" id="validationCustom01"
                                                        name="bill" placeholder="Maintenance Bill" required
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