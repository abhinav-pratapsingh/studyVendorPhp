<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>All Blogs - Study Wander</title>
      <meta name="description" content="" />

      <?php include("master/style.php") ?>
      <style>
         .pagination {
            column-gap: 8px;
         }
         .pagination .disabled > .page-link,
         .page-link.disabled {
            display: none;
            cursor: not-allowed;
         }
         .pagination .active .page-link {
            border: 1px solid #000;
            background-color: #000;
            color: #fff;
         }
         .pagination .page-item:not(.active) .page-link {
            border: 1px solid #000;
            /* background-color: #000; */
            color: #000;
         }
         .pagination .page-item .page-link {
            /* border: 1px solid #000; */
            /* background-color: #000000; */
            /* color: #000; */
            padding: 0;
            height: 40px;
            width: 40px;
            text-align: center;
            line-height: 40px;
         }
         .pagination .page-item.current:is(.prev, .next) a.page-link {
            background-color: #fff;
            border: 1px solid #ccc;
            font-size: 1.25rem;
         }
         .pagination .page-item .page-link {
            border-radius: 50%;
         }
      </style>
   </head>

   <body>
      <?php include("master/header.php") ?>

      <main>
         <section class="allblog_sec">
            <div class="container">
               <div class="row justify-content-center">
                  <?php
                    include 'admin/master/connection.php';
                    $postPerPage = 6;
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $start = ($page - 1) * $postPerPage;
                    $totalPost = "SELECT COUNT(*) AS total FROM `blog`";
                    $result = mysqli_query($con, $totalPost);
                    $totalPass = mysqli_fetch_assoc($result)['total'];
                    $totalPage = ceil($totalPass / $postPerPage);
                    $sql = "SELECT * FROM `blog` LIMIT $start, $postPerPage";
                    $query = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($query)){
                            $id = $row['Sr_no'];
                            $title = $row['title'];
                            $content = $row['content'];
                            $image = $row['image'];
             
           
                    ?>
                  <div class="col-md-5 col-lg-4 col-sm-6 d-flex">
                     <div class="blog-entry align-self-stretch">
                        <a href="blog-detail.php" class="block-20" style="background-image: url('admin/assets/blog-img/<?php echo $image; ?>')"> </a>
                        <div class="text blog_content">
                           <h3>
                              <a href="blog-detail.php?blogid=<?php echo $id;?>"><?php echo $title ;?></a>
                           </h3>

                           <?php
                                   $para = "";
                                   for ($i = 0; $i <= strlen($content) - 1; $i++) {
                                       if ($content[$i] == "<" && $content[$i + 1] == "p") {
                                           for ($j = $i; $j <= 300; $j++) {
                                               if ($content[$j] == "<" && $content[$j + 1] == "/" && $content[$j + 2] == "p") {
                                                   break;
                                               }
                                               $para .= $content[$j];
                                           }
                                           break;
                                       }
                                   }
                                   echo $para;
                                   ?>

                           <div class="d-flex justify-content-between flex-wrap">
                              <span
                                 ><a href="blog-detail.php?blogid=<?php echo $id;?>">Read More <i class="ph-bold ph-arrow-right d-inline-block"></i></a
                              ></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                   } 
                   ?>
               </div>

               <?php
                // Only display pagination if there are more than 9 posts
                if ($totalPass > $postPerPage) { ?>
               <ul class="pagination justify-content-center my-4">
                  <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                     <a class="page-link prev" href="?page=<?php echo $page - 1; ?>" tabindex="-1"><</a>
                  </li>

                  <!-- Page Numbers -->

                     <?php
                        // Show first page
                        echo '<li class="page-item ' . ($page == 1 ? 'active' : '') . '"><a class="page-link" href="?page=1">1</a></li>';

                        // Show ellipsis if current page is greater than 3
                        if ($page > 3) {
                            echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
                        }

                        // Show pages before and after the current page
                        for ($i = max(2, $page - 1); $i <= min($totalPage - 1, $page + 1); $i++) {
                            echo '<li class="page-item ' . ($i == $page ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                        }

                        // Show ellipsis if there are pages after
                        if ($page < $totalPage - 2) {
                            echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
                        }

                        // Show last page
                        if ($totalPage > 1) {
                            echo '<li class="page-item ' . ($page == $totalPage ? 'active' : '') . '"><a class="page-link" href="?page=' . $totalPage . '">' . $totalPage . '</a></li>';
                        }
                        ?>

                  <!-- Next Button -->
                  <li class="page-item <?php if ($page >= $totalPage) echo 'disabled'; ?>">
                     <a class="page-link next" href="?page=<?php echo $page + 1; ?>">></a>
                  </li>
               </ul>
               <?php } ?>
            </div>
         </section>
      </main>

      <?php include("master/footer.php") ?>

      <?php include("master/script.php") ?>
   </body>
</html>
