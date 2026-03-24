<?php
session_start();  
if (!isset($_SESSION["loggedin"])) {
    header("location:login.php");
    exit;
}

include './master/connection.php';
 
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Study Wander</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="MobileOptimized" content="320" />

    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" id="theme-change" type="text/css" href="#" />
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png" />
  </head>

  <body>
    <!-- <div class="loader">
      <div class="spinner">
        <img src="assets/images/loader.gif" alt="" />
      </div>
    </div> -->
    <!-- Main Body -->
    <div class="page-wrapper">
      <?php include("./master/navbar.php"); ?>

      <!-- Container Start -->
      <div class="page-wrapper">
        <div class="main-content">
          <!-- Page Title Start -->
          <div class="row mb-0">
            <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-title-wrapper">
                <div class="page-title-box">
                  <h4 class="page-title bold">Dashboard</h4>
                </div>
                <div class="breadcrumb-list">
                  <ul>
                    <li class="breadcrumb-link">
                      <a href="index.html"><i class="fas fa-home mr-2"></i>Dashboard</a>
                    </li>
                    <li class="breadcrumb-link active">Admin</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Dashboard Start -->

          <?php include("blogcard.php");?>

           <div class="col-12">
                     <div class="card table-card">
                        <div class="card-header pb-0">
                           <h4>Recent Contacts</h4>
                        </div>
                        <div class="card-body">
                           <div class="chart-holder">
                              <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                       <tr>
                                        <th>Id</th>
                                    <th>Name</th>
                                    <th>Mobile no.</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Start date</th>
                                       </tr>
                                    </thead>
                                   <tbody>
                                 <?php
                                 
                                 $sql = "SELECT * FROM `contact`ORDER BY `id` DESC LIMIT 5";
                                 echo "hello";
                                 $query = mysqli_query($con,$sql);
                                 $count = 0;
                                   if(mysqli_num_rows($query)>0){
                                 while($row = mysqli_fetch_assoc($query)){
                                             $id = $row['id'];
                                             $name = $row['name'];
                                             $email = $row['email'];
                                             $phone = $row['phone'];
                                             $msg = $row['message'];
                                             $time = $row['created_at'];
                                             $count ++;
                                                                ?>
                                 <tr>
                                    <td style="background-color:white;"><?php echo $count; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $phone; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $msg; ?></td>
                                    <td><?php echo $time; ?></td>
                                 </tr>
                                  <?php
                                 }}
                              ?>
                                 </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
        </div>
      </div>
    </div>

    <!-- Script Start -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/apexchart/apexcharts.min.js"></script>
    <script src="assets/js/apexchart/control-chart-apexcharts.js"></script>
    <!-- Page Specific -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>
  </body>
</html>
