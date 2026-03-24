<?php
    session_start();
    
    if(!isset($_SESSION["loggedin"])){
        header("location:login.php");
        exit;
    }
    
    include './master/connection.php';
    // $page = "dashboard";
?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
   <title>Study Wander</title>
      <meta charset="utf-8" />
      <meta content="width=device-width, initial-scale=1.0" name="viewport" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="" />
      <meta name="MobileOptimized" content="320" />
      <!--Start Style -->
      <link rel="stylesheet" type="text/css" href="assets/css/fonts.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/datatables.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/icofont.min.css" />
      <link rel="stylesheet" href="assets/css/swiper.min.css" />
      <!--Page Specific -->
      <link rel="stylesheet" type="text/css" href="assets/css/nice-select.css" />
      <!--Custom Style -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
      <link rel="stylesheet" id="theme-change" type="text/css" href="#" />
      <!-- Favicon Link -->
      <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
   </head>

   <body>
      <div class="loader">
         <div class="spinner">
            <img src="assets/images/loader.gif" alt="" />
         </div>
      </div>
      <!-- Main Body -->
      <div class="page-wrapper">
         <!-- Header Start -->
         <?php include("./master/navbar.php"); ?>
         <!-- Container Start -->
         <div class="page-wrapper">
            <div class="main-content">
               <!-- Page Title Start -->
               <div class="row">
                  <div class="col xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="page-title-wrapper">
                        <div class="page-title-box">
                           <h4 class="page-title">Contatct Data</h4>
                        </div>
                        <div class="breadcrumb-list">
                           <ul>
                              <li class="breadcrumb-link">
                                 <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                              </li>
                              <li class="breadcrumb-link active">Data Tables</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Products view Start -->
               <div class="row">
                  <!-- Styled Table Card-->
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="card table-card">
                        <div class="card-header pb-0">
                           <h4>Contact Details</h4>
                        </div>
                        <div class="card-body">
                           <table
                              id="example"
                              class="table  table-bordered dt-responsive "
                              style="width: 100%">
                              <thead>
                                 <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Start date</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 
                                 $sql = "SELECT * FROM contact ORDER BY id DESC";
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
                                             $count++;
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
               <!-- <div class="splash-footer-btm">
                  <p>Copyright 2022 © Admed Admin All Rights Reserved.</p>
               </div> -->
            </div>
         </div>
      </div>

      <!-- Preview Setting Box -->
      <div class="slide-setting-box">
         <div class="slide-setting-holder">
            <div class="setting-box-head">
               <h4>Color Options</h4>
               <a href="javascript:void(0);" class="close-btn">Close</a>
            </div>
            <div class="sd-color-op">
               <div id="style-switcher">
                  <div>
                     <ul class="colors">
                        <li>
                           <p class="colorchange" id="color"></p>
                        </li>
                        <li>
                           <p class="colorchange" id="color2"></p>
                        </li>
                        <li>
                           <p class="colorchange" id="color3"></p>
                        </li>
                        <li>
                           <p class="colorchange" id="color4"></p>
                        </li>
                        <li>
                           <p class="colorchange" id="color5"></p>
                        </li>
                        <li>
                           <p class="colorchange" id="color6"></p>
                        </li>
                        <li>
                           <p class="colorchange" id="color7"></p>
                        </li>
                        <li>
                           <p class="colorchange" id="color8"></p>
                        </li>
                        <li>
                           <p class="colorchange" id="color9"></p>
                        </li>
                        <li>
                           <p class="colorchange" id="color10"></p>
                        </li>
                        <li>
                           <p class="colorchange" id="color11"></p>
                        </li>
                        <li>
                           <p class="colorchange" id="style"></p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Preview Setting -->

      <!-- Script Start -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/datatables.min.js"></script>
      <script src="assets/js/dataTables.responsive.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/swiper.min.js"></script>
      <!-- Page Specific -->
      <script src="assets/js/nice-select.min.js"></script>
      <!-- Custom Script -->
      <script src="assets/js/custom.js"></script>
      <script>
         $(document).ready(function () {
            $("#example").DataTable();
         });
      </script>
   </body>
</html>
