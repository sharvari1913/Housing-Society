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
        $fullname = $_POST['fullnm'];
        $complaintdate = $_POST['compdate'];
        $message = $_POST['msg'];
        $status = $_POST['status'];
        $remark = $_POST['remark'];
        
        
        $sql="INSERT INTO `complaint`(`soc_id`, `full_name`, `comp_date`, `message`, `status`, `remark`) VALUES ('$societyid', '$fullname', '$complaintdate', '$message', '$status', '$remark')";  //echo $sql;
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo $sql;
            echo "<script>alert('Record Inserted');window.location.href='view-complaint.php';</script>";
        //header("location:view-complaint.php");
            
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
      <title>Add Complaint</title>
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
                                      <h3 style="color:white;">Add Complaint</h3>
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
                                                      <label for="validationCustom01" class="form-label">Full
                                                          Name</label>
                                                      <input type="text" class="form-control" id="validationCustom01"
                                                          name="fullnm" placeholder="Full Name" required
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
                                                          name="compdate" placeholder="Complaint date" required
                                                          style="text-transform: capitalize;">
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="validationCustom01" class="form-label">Message</label>
                                                      <input type="text" class="form-control" id="validationCustom01"
                                                          name="msg" placeholder="Message" required
                                                          style="text-transform: capitalize;">
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="validationCustom01" class="form-label">Status
                                                      </label>
                                                      <input type="text" class="form-control" id="validationCustom01"
                                                          name="status" placeholder="Status" required
                                                          style="text-transform: capitalize;">
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="validationCustom01" class="form-label">Remark</label>
                                                      <input type="text" class="form-control" id="validationCustom01"
                                                          name="remark" placeholder="Remark" required
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