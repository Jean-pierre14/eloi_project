<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `project` where eid = '$id'";
	$result = mysqli_query($conn, $sql);
	
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Employees Management System</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!--<link rel="stylesheet" type="text/css" href="styleapply.css">-->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
</head>

<body>
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg p-0 navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logonew.png" alt="" width="200">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item "><a class="nav-link" href="eloginwel.php?id=<?php echo $id?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="myprofile.php?id=<?php echo $id?>">My Profile</a>
                        </li>
                        <li class="nav-item active"><a class="nav-link" href="empproject.php?id=<?php echo $id?>">My
                                Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="applyleave.php?id=<?php echo $id?>">Apply
                                Leave</a></li>
                        <li class="nav-item"><a class="nav-link" href="sniper.php?logout">LogOut</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <div class="heading-title text-center" style="margin-top: 130px;">
                <p>My Projects</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead>
                            <tr class="bg-warning text-white">
                                <th align="center">Project ID</th>
                                <th align="center">Project Name</th>
                                <th align="center">Due Date</th>
                                <th align="center">Sub Date</th>
                                <th align="center">Mark</th>
                                <th align="center">Status</th>
                                <th align="center">Option</th>
                            </tr>
                        </thead>

                        <?php
                while ($employee = mysqli_fetch_assoc($result)) {

                  echo "<tr>";
                  echo "<td>".$employee['pid']."</td>";
                  echo "<td>".$employee['pname']."</td>";
                  echo "<td>".$employee['duedate']."</td>";
                  echo "<td>".$employee['subdate']."</td>";
                  echo "<td>".$employee['mark']."</td>";
                  echo "<td>".$employee['status']."</td>";
                  

                  echo "<td>
                    <a href=\"psubmit.php?pid=$employee[pid]&id=$employee[eid]\" class='shadow button'>
                        Submit
                    </a>
                    ";

                }?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-area bg-f">

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">Employees Management
                                System</a> Design By :
                            <a href="#">Eloi & Aggee</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o"
            aria-hidden="true"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>