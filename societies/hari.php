<?php
  include("config.php");
  $soc_id=$_GET['society_id'];
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hari Priya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
  <link rel="stylesheet" href="assets/css/datatable/dataTables.dataTables.css">
  <link rel="stylesheet" href="assets/css/datatable/buttons.dataTables.css">
  <link rel="stylesheet" href="assets/css/datatable/dataTables.bootstrap4.min.css">

  <style>
    .btn.btn-info {
    padding: 5px 30px !important;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">

    <div class="container d-flex justify-content-between">
      <div class="logo">
        <h1><a href="index.html">Hari Priya Society</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="images/d.jpg" alt="" class="img-fluid"></a> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#Advertisement">Advertisement</a></li>
          <li><a class="nav-link scrollto" href="#members">Society Members</a></li>  
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a href="../backend" class="btn btn-info" role="button">Login</a><li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to Hari Priya Society</h1> 
     </div>
  </section>   
   
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="images/n.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">About Hari Priya</h3>
            <p>We provide user-friendly and feature-rich web portal for housing society resident members to simplify
              daily interactions and make living here an even more delightful experience. The purpose of such portal is
              to streamline communication,enhance transparency and simplify administrative tasks within the housing
              society community. We provide user-friendly and feature-rich web portal for housing society resident
              members to simplify</p>
          <div class="fun-facts">
            <div class="wrapper">
              <div class="row">
                <div class="col-lg-4">
                  <div class="counter">
                     <p><h3>1/2BHK</h3>Flat Space </p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="counter">
                    <p><h3>20</h3> Total Parkings<br></p>
                  </div>
                </div>
                 <div class="col-lg-4">
                  <div class="counter">
                    <p><h3>10</h3>Total Flats Available<br></p>
                  </div>
                </div>
              </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Hari Priya provides services like Registration, Notice board, also Rent and Sells advertisement, Compalint box to society members.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
               <div class="icon"><i class="bx bxl-dribbble"></i></div> 
              <h4 class="title"><a href="">Society Registration and Handover</a></h4>
              <p class="description">Board member of society can register their society and manage their tasks</p>
              <!-- <a href="" class="myButton">Register</a>-->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
            data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Notice Boards</a></h4>
              <p class="description">The secretary of particular society adds notices to display their society members
              </p>
              <!-- <a href="" class="myButton">View Notice</a> -->
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
            data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Rent & Sales Advertisements</a></h4>
              <p class="description">The secretary of society can post Rent & Sales adverticements of flats</p>
              <!-- <a href="" class="myButton">contact</a> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
            data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Complaint Box</a></h4>
              <p class="description">Society members can make  the complaint for any problem or issue about the society</p>
                <!-- <a href="" class="myButton">Make Complaint</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- advertisement -->
 <section id="Advertisement" class="portfolio section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Advertisement</h2>
      <p>Hari Priya shows the flats which are for rent and also for the sell</p>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Rent</li>
          <li data-filter=".filter-card">Sell</li>
        </ul>
      </div>
    </div>

    <?php 
      $query = "SELECT * from user_mst where (rent = 1 OR sell = 1) AND soc_id = $soc_id";
      //echo $query;
      $result = mysqli_query($con, $query);
    ?>

    <div class="row portfolio-container" data-aos="fade-up">
    <?php 
    while($row = $result->fetch_array())
      { 
        if($row['rent']==1){ 
          $sell_rent = "filter-app"; 
        } 
        else if($row['sell']==1)
        { 
          $sell_rent = "filter-card"; 
        }  
        else { $sell_rent="";}
        ?>


      <div class="col-lg-4 col-md-6 portfolio-item <?PHP echo $sell_rent; ?>" >
        <div class="portfolio-wrap">
          <img src="images/e.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Flat No:<?php echo $row['flat_no'];?></h4> 
            <p>Area:<?php echo $row['area'];?></p>
            <div class="portfolio-links">
              <a href="images/e.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php
       }
       ?>      
      </div>
      </div>
  </section>

      <!-- Datatable -->
      
      <section id="members" class="members section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Society Members</h2>
          <table class="table table-bordered" style="background-color:white;" id="example">
                        <thead class="" style="background-color: #3b526b; color: white;">
                            <tr>
                                <th>Full Name</th>
                                <th>Flat No</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    //$query = " SELECT * FROM user_mst";
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
                                <td><?php echo $row['flat_no']; ?></td>
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


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>          
        </div>

        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>R. K. Nagar, Kolhapur</p>
              </div>

              <div class="email mt-4">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>haripriya@gmail.com</p>
              </div>

              <div class="phone mt-4">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 9955543237</p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
            <iframe style="border:0; width: 100%; height: 270px;"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
              frameborder="0" allowfullscreen></iframe>
          </div>
        </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

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