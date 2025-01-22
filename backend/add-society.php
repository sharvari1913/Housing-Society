<?php
  session_start();
  ?>

<?php
  include("config.php");
  
  ?>
<?php 
        if(isset($_POST['submit']))
        {
        $societyname=$_POST['societynm'];
        $societyaddress=$_POST['societyadd'];
        
        $sql="INSERT INTO `society`(`soc_name`, `address`) VALUES ('$societyname','$societyaddress')";  //echo $sql;
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo $sql;
            echo "<script>alert('Record Inserted');window.location.href='view-society.php';</script>";
        //header("location:view_soci.php");
            
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
    <title>Add Society</title>
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
                                    <h3 style="color:white;">Add New Society</h3>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Society
                                                        Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="societynm" placeholder="Society Name" required
                                                        style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="form-label">Society
                                                        Address</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="societyadd" placeholder="Society Address" required
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