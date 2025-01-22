<?php
//session_start();
$grp_level = $_SESSION['group_id'];
// if($grp_level == 1) {
// }else{
//     header('Location:index.php');
// }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>


        <section class="content">
            <div class="container-fluid">
                <?php

                    echo"<h2>Welcome To Dashboard</h2>";
                ?>
            </div>
        </section>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <form action="logout.php" method="post">
                    <input type="submit" name="logout" value="Logout">
                </form>

            </ul>
        </div>
    </div>
</nav>