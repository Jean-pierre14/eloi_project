<?php 
session_start();
if (!isset($_SESSION["email"])) {
  header("location: alogin.html");
}

require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="./sniper.min.css">
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

    <!-- Main CSS
    <link href="css/main.css" rel="stylesheet" media="all"> -->

</head>

<body>
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg p-0 navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="dashboard.php">
                    <img src="images/logonew.png" alt="" width="200">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="dashboard.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="addemp.php">Add Employee</a></li>

                        <li class="nav-item"><a class="nav-link" href="assign.php">Assign Project</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">All
                                pages</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="viewemp.php">View Employee</a>
                                <a class="dropdown-item" href="salaryemp.php">Salary Table</a>
                                <a class="dropdown-item" href="empleave.php">Employee Leave</a>
                                <a class="dropdown-item" href="assignproject.php">Project Status</a>
                                <a class="dropdown-item" href="msg.php">Messages</a>

                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="sniper.php?logout">LogOut</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="wrapper">
        <div class="container-fluid" style="padding-top: 60px;">
            <div class="row">
                <div class="col-md-4">
                    <div id="sidebar">
                        <div class="sidebar__title">
                            <div class="sidebar__img">
                                <img src="assets/eloi.jpg" alt="">
                                <h1>EMS</h1>
                            </div>
                            <i class="fa fa-times" id="sidebarIcon" onclick="closeSidebar"></i>

                        </div>
                        <div class="sidebar_menu">
                            <div class="sidebar__link active_menu_link">
                                <i class="fa fa-home"></i>
                                <a href="dashboard.php">Dashboard</a>

                            </div>
                            <h2 style="color: #ffffff;">MNG</h2>
                            <div class="sidebar__link">
                                <i class="fa fa-dashboard fa-fw"></i>
                                <a href="#">Admin Management</a>

                            </div>
                            <div class="sidebar__link">
                                <i class="fa fa-building-o"></i>
                                <a href="#">Company Management</a>
                            </div>
                            <div class="sidebar__link">
                                <i class="fa fa-wrench"></i>
                                <a href="viewemp.php">Employee Management</a>

                            </div>
                            <div class="sidebar__link">
                                <i class="fa fa-user-secret"></i>
                                <a href="salaryemp.php">Salary Table</a>

                            </div>
                            <div class="sidebar__link">
                                <i class="fa fa-bandshake-o"></i>
                                <a href="#">Contacts</a>

                            </div>
                            <div class="sidebar__link">
                                <i class="fa fa-question"></i>
                                <a href="#">Requests</a>

                            </div>
                            <div class="sidebar__link">
                                <i class="fa fa-sign-out"></i>
                                <a href="#">Leave Policy</a>

                            </div>
                            <div class="sidebar__link">
                                <i class="fa fa-calendal-check-o"></i>
                                <a href="#">Special Days</a>

                            </div>
                            <div class="sidebar__link">
                                <i class="fa fa-files-o"></i>
                                <a href="employeeFormer.php">Employees leave</a>

                            </div>
                            <h4>Notifications</h4>
                            <div class="sidebar__link">
                                <i class="fa fa-money"></i>
                                <a href="assignproject.php">Project Status</a>
                            </div>
                            <div class="sidebar__link">
                                <i class="fa fa-briefcase"></i>
                                <a href="msg.php">Messages</a>
                            </div>
                            <div class="sidebar__logout">
                                <i class="fa fa-power-off"></i>
                                <a href="logout.php">Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">

                        <div class="col-md-12 p-2">
                            <div class="row">
                                <div class="col-md-4 p-2">
                                    <div class="box shadow">
                                        <h3>Employees</h3>
                                        <span id="total-employees" class="badge badge-danger">23</span>
                                    </div>
                                </div>
                                <div class="col-md-4 p-2">
                                    <div class="box shadow">
                                        <h3>Female</h3>
                                        <span id="total-employees-f" class="badge badge-danger">23</span>
                                    </div>
                                </div>
                                <div class="col-md-4 p-2">
                                    <div class="box shadow">
                                        <h3>Male</h3>
                                        <span id="total-employees-m" class="badge badge-danger">23</span>
                                    </div>
                                </div>
                                <div class="col-md-4 p-2">
                                    <div class="box shadow">
                                        <h3>Employee leave</h3>
                                        <span id="total-employees-l" class="badge badge-danger">23</span>
                                    </div>
                                </div>
                                <div class="col-md-4 p-2">
                                    <a href="employeeFormer.php">
                                        <div class="box shadow">
                                            <h3>Employee Former</h3>
                                            <span id="total-employees-fe" class="badge badge-danger">23</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 p-2">
                                    <div class="box shadow">
                                        <h3>Projects</h3>
                                        <span id="total-employees-pr" class="badge badge-danger">23</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <table class="table table-sm table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Seq.</th>
                                                <th>Emp. ID</th>
                                                <th>Name</th>
                                                <th>Points</th>
                                            </tr>
                                        </thead>
                                        <?php
                                                  $seq = 1;
                                                  while ($employee = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>";
                                                    echo "<td>".$seq."</td>";
                                                    echo "<td>".$employee['id']."</td>";
                                                    
                                                    echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
                                                    
                                                    echo "<td>".$employee['points']."</td>";
                                                    
                                                    $seq+=1;
                                                  }
                                                ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="p-t-20">
        <button class="btn btn-danger" type="submit" style="float: right; margin-right: 60px"><a href="reset.php"
                style="text-decoration: none; color: white"> Reset Points</a></button>
    </div>
    </div>

    <footer class="footer-area bg-f">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">Employees Management
                                System</a> Design By :
                            <a href="#">Eloi</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">
        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
    </a>
</body>
<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="./sniper.js"></script>
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

</html>