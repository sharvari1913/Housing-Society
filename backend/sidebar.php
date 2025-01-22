<?php
//session_start();
$grp_level = $_SESSION['group_id'];
// if($grp_level == 1) {
// }else{
//     header('Location:index.php');
// }


?>


<nav id="sidebar">
    <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(houselogo.jpg);"></a>
        <?php 
        if( $grp_level==9)
        { 
        ?>

        <ul class="list-unstyled components mb-5">
            <li>
                <a href="view-society.php">Manage Society</a>
            </li>
            <li>
                <a href="view-member.php">Manage Member</a>
            </li>
            <li>
                <a href="view-notice.php">Manage Notice</a>
            </li>
            <li>
                <a href="view-complaint.php">Manage Complaint</a>
            </li>
            <li>
                <a href="view-maintenance.php">Manage Maintenance </a>
            </li>
        </ul>
        <?php
        }
        elseif( $grp_level==1)
        {
            ?>

        <ul class="list-unstyled components mb-5">
            <li>
                <a href="sc-view-society.php">Manage Society</a>
            </li>
            <li>
                <a href="sc-view-member.php">Manage Member</a>
            </li>
            <li>
                <a href="sc-view-notice.php">Manage Notice</a>
            </li>
            <li>
                <a href="sc-view-complaint.php">Manage Complaint</a>
            </li>
            <li>
                <a href="sc-view-maintenance.php">Manage Maintenance</a>
            </li>

        </ul>

        <?php
        }
        elseif( $grp_level==2)
        {
            ?>

        <ul class="list-unstyled components mb-5">

            <li>
                <a href="mb-update-member.php">Update Profile</a>
            </li>
            <li>
                <a href="mb-view-notice.php">View Notice</a>
            </li>
            <li>
                <a href="mb-view-maintenance.php">Manage Maintenance</a>
            </li>
            <li>
                <a href="mb-add-complaint.php">Make Complaint</a>
            </li>

        </ul>

        <?php
        }
        else
        {
            header('Location:index.php');
        }
        ?>

    </div>
</nav>