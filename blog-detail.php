

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blog Detail - Study Wander</title>
    <meta name="description" content="">

    <?php include("master/style.php") ?>
</head>

<body>
    <?php include("master/header.php") ?>

    <main>
    <?php
                    include 'admin/master/connection.php';
                    $blog = $_GET['blogid'];
                    $sql = "SELECT * FROM `blog` WHERE Sr_no=$blog";
                    $query = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($query)){
                            $id = $row['Sr_no'];
                            $title = $row['title'];
                            $content = $row['content'];
                            $image = $row['image'];
                            $time = $row['date'];
                ?>
        <section id="blogdetail_sec">
            <div class="container">
                
                <div class="page_container" style="padding-top: 0">
                    <div class="text-center mb-3">
                        <img src="admin/assets/blog-img/<?php echo $image;?>" alt="" />
                    </div>
                    <h4 class="my-3 blog_title"><?php echo $title; ?></h4>
                     <p><?php echo $content; ?></p>
                   <div class="blog_date"><i class="ph ph-calendar-dots"></i><?php echo $time; ?></div>
                </div>
            </div>
        </section>
        <?php
                    }
                ?>
    </main>

    <?php include("master/footer.php") ?>

    <?php include("master/script.php") ?>
</body>

</html>