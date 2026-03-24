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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet" />

    <style>
    @media (min-width: 100px) {
        .note-modal-content {
            margin: 133px auto;
        }
    }

    table tr td,
    table tr th {
        text-align: center;
    }

    .old_image {
        outline: none;
        border: none;
        position: absolute;
    }

    @media (min-width: 768px) {
        .note-modal-content {
            margin: 133px auto;
        }
    }
    </style>
   </head>

   <body>
      <!-- <div class="loader">
         <div class="spinner">
            <img src="assets/images/loader.gif" alt="" />
         </div>
      </div> -->
      <!-- Main Body -->
      <div class="page-wrapper">
         <!-- Header Start -->
         <?php include("./master/navbar.php"); ?>
         <!-- <?php  include ('./master/connect.php');?> -->
         <?php   
    if(isset($_GET['sno'])){
        $s_no = $_GET['sno'];
        $sql4 = "SELECT * FROM `blog` where Sr_no = '$s_no'";
        $que4 = mysqli_query($con,$sql4);
        if($que4){
            $row = mysqli_fetch_assoc($que4);
            $get_title = $row['title'];
            $get_image = $row['image'];
            $get_date = $row['date'];
            $get_content = $row['content'];
        }
    }
     ?>
         <!-- Container Start -->
         <div class="page-wrapper">
            <div class="main-content">
               <!-- Page Title Start -->
               <div class="row">
                  <div class="col xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="page-title-wrapper">
                        <div class="page-title-box">
                           <h4 class="page-title">Blog</h4>
                        </div>
                        <div class="breadcrumb-list">
                           <ul>
                              <li class="breadcrumb-link">
                                 <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                              </li>
                              <li class="breadcrumb-link active">Blog</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Products view Start -->
               <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <form method="post"
                                                <?php if(isset($_GET['sno'])){ echo "action='blog.php?sno=$s_no'"; }else { echo "action='blog.php'"; } ?>
                                                enctype="multipart/form-data">
                                                <div class="row g-3 align-items-center mb-3">
                                                    <div class="col-md-4 col-sm-6">
                                                        <label for="heading"
                                                            class="col-form-label fs-5 font-weight-bold">Title</label>
                                                        <input type="text" name="heading" id="heading"
                                                            class="form-control"
                                                            value="<?php if(isset($_GET['sno'])){ echo $get_title; }  ?>"
                                                            placeholder="Enter title" required />
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <label for="img" class="col-form-label fs-5">Title Page
                                                            Image <small style="font-size:12px;">( Maximum height
                                                                480px)</small></label>
                                                        <input type="file" id="img" class="form-control" name="image" />
                                                        <?php
                                                        if(isset($_GET["sno"])){
                                                            echo '<input type="text" class="old_image"
                                                            value="'.$get_image.'" name="old_image"
                                                        readonly />'; } ?>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="date" class="col-form-label fs-5">Date</label>
                                                        <input type="date" id="date"
                                                            value="<?php if(isset($_GET['sno'])){ echo $get_date; } ?>"
                                                            class="form-control" name="date" required />
                                                    </div>
                                                </div>

                                                <label for="" class="fs-5 my-0">Content</label>
                                                <p class=" mt-0 fs-6 my-2">* For copy paste text from other
                                                                websites : fistly paste in notepad then copy again and
                                                                paste above blog.</p>
                                                <textarea id="summernote" name="content"
                                                    required><?php if(isset($_GET['sno'])){ echo $get_content; } ?></textarea>
                                                <div class="my-2 row justify-content-center gap-md-4 gap-2">
                                                    <div class="col-md-12">
                                                        <div class="row justify-content-center">

                                                            
                                                            <div class="row justify-content-center">
                                                                <?php if(isset($_GET['sno'])) {
                                                                    echo '<div class="col-xl-2 text-center mt-2"><a href="blog.php" class="btn btn-secondary w-lg">Back</a>
                                                                        </div>
                                                              '; } ?>
                                                                <div class="col-xl-2 text-center">
                                                                    <input type="submit" id="submit"
                                                                        class="btn btn-primary w-lg mt-2" name="submit"
                                                                        value="<?php if(isset($_GET['sno'])){ echo 'Update'; }else{ echo 'Submit'; }?>" />
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if(!isset($_GET['sno'])){
                                ?>
                                <div class="section">
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Blog</h4>
                                                    </div>
                                                    <div class="card-body table_view">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-hover"
                                                                id="tableBlog" style="width: 100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Title</th>
                                                                        <th>Publish Date</th>
                                                                        <th>Edit</th>
                                                                        <th>Delete</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                   
                                                                        $sql = "SELECT * FROM `blog` ORDER BY Sr_no DESC";
                                                                        $result = mysqli_query($con,$sql);
                                                                        $count = 0;
                                                                        if(mysqli_num_rows($result)>0){ while($rows= mysqli_fetch_assoc($result)){ $count ++; ?>
                                                                    <tr>
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><?php echo $rows['title']; ?></td>
                                                                        <td><?php echo $rows['date'] ?></td>
                                                                        <td>
                                                                            <span><a class="btn btn-primary btn-sm"
                                                                                    href="blog.php?sno=<?php echo $rows['Sr_no']; ?>">Edit</a></span>
                                                                        </td>
                                                                        <td>
                                                                            <span><a class="btn btn-danger btn-sm"
                                                                                    href="blog.php?delete=<?php echo $rows['Sr_no']; ?>">DELETE</a></span>
                                                                        </td>
                                                                    </tr>
                                                                    <?php }}?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
               <!-- <div class="splash-footer-btm">
                  <p>Copyright 2022 © Admed Admin All Rights Reserved.</p>
               </div> -->
            </div>
         </div>
      </div>
<?php

// for insert 
      if(!isset($_GET['sno'])){
    if(isset($_POST['submit'])){
        $content = $_POST['content'];
        $main_content = mysqli_real_escape_string($con, $content);
        $heading = $_POST['heading'];
        $date = $_POST['date'];
        $targetDir = "assets/blog-img/";
        $name = $_FILES['image']['name'];
            $targetFile = $targetDir . basename($_FILES["image"]["name"]);  
            move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
        $sql = "INSERT INTO `blog` (`title`,`content`,`image`,`date`) VALUES ('$heading','$main_content','$name','$date')";
        $que = mysqli_query($con,$sql);
        if($que){
            echo "<script>alert('Added');</script>";
                echo "<script>window.location='blog.php';</script>";
        }
    }
}

// for update
if(isset($_GET['sno'])){
   if(isset($_POST['submit'])){
              $sr_no = $_GET['sno'];
              $sql = "select * from `blog` where Sr_no = '$sr_no'";
              $que = mysqli_query($con,$sql);
              if($que){
                  $img = "image";
                  $heading = $_POST['heading'];
                  $content = $_POST['content'];
                  $main_content = mysqli_real_escape_string($con, $content);
                  $date = $_POST['date'];
                  $old_img = $_POST['old_image'];
                  $new_img = $_FILES['image']['name'];
                  if($new_img == ''){
                      $img = $old_img;
                  }
                  else{
                      $img = $new_img;
                      $delete = $old_img;
                      if(file_exists("assets/blog-img/$delete")){
                          unlink("assets/blog-img/$delete");
                      }
                      $targetDir = "blog-img/";
                      $name = $_FILES['image']['name'];
                      $targetFile = $targetDir . basename($_FILES["image"]["name"]);
                      move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
                  }
                  $sql3 = "UPDATE `blog` SET `title` = '$heading' , `content` = '$main_content' , `image` = '$img' ,`date` = '$date' WHERE `blog`.`Sr_no` = $sr_no;";
                  $que3 = mysqli_query($con,$sql3);
                  if($que3){
                      echo "<script>alert('Updated successfully');</script>";
                      echo "<script>window.location='blog.php?sno=$s_no';</script>";
                  }
              }
    
   }
  }

//   for delete 
if(isset($_GET['delete'])){
   $delete = $_GET['delete'];
   $sql3 = "select * from `blog` where Sr_no = '$delete'";
   $que3 = mysqli_query($con,$sql3);
   if($que3){
       $row = mysqli_fetch_assoc($que3);
       $img = $row['image'];
       if(file_exists("assets/blog-img/$img")){
           unlink("assets/blog-img/$img");
       }
   }
   $sql2 = "DELETE FROM `blog` WHERE Sr_no = '$delete'";
   $res = mysqli_query($con, $sql2);
   if($res == 1){
       echo "<script>alert('Blog Deleted');</script>";
       echo "<script>window.location='blog.php';</script>";
   }
}
  
?>

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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
    $("#summernote").summernote({
        placeholder: "Enter your content here",
        tabsize: 6,
        height: 300,
        onImageUpload: function(files, editor, welEditable) {
            var url = sendFile(files[0], editor, welEditable);
        },
        toolbar: [
            ["style", ["style"]],
            ["font", ["bold", "italic", "underline", "clear"]],
            ["fontname", ["fontname"]],
            ["para", ["ul", "ol", "paragraph"]],
            ["insert", ["link", "hr"]],
            ["view", ["codeview", "help"]],
        ],
    });
    </script>
   </body>
</html>
