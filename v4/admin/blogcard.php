<section class="allblog_sec pt-3">
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                    include './master/connection.php';
                    $sql = "SELECT * FROM `blog` ORDER BY `Sr_no` DESC LIMIT 3";
                    $query = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($query)){
                            $id = $row['Sr_no'];
                            $title = $row['title'];
                            $content = $row['content'];
                            $image = $row['image'];
                            $date = $row['date'];
           
                    ?>
                    <div class="col-md-5 col-lg-4 col-sm-6 d-flex">
                        <div class="blog-entry align-self-stretch">
                            <a  href="blog.php?sno=<?php echo $id; ?>" class="block-20" style="background-image: url('assets/blog-img/<?php echo $image; ?>');"></a>
                            <div class="text blog_content">
                                <h3>
                                    <a  href="blog.php?sno=<?php echo $id; ?>"><?php echo $title ;?></a>
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
                                   ?>
                                
                                <div class="d-flex justify-content-between flex-wrap">
                                    <span><?php echo $date; ?></span>
                                    <span><a href="blog.php?sno=<?php echo $id; ?>">View More<i class="ph-bold ph-arrow-right d-inline-block"></i></a></span>
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
<style>
    .allblog_sec {
    position: relative;
    overflow: hidden;
    padding: 4em 0 2em;
}

.allblog_sec .blog-entry {
    border: 1px solid #f2f2f2;
    background: #fff;
    overflow: hidden;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -webkit-box-shadow: 0px 3px 66px -24px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0px 3px 66px -24px rgba(0, 0, 0, 0.2);
    box-shadow: 0px 3px 66px -24px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    margin-bottom: 20px;
    width: 94%;
}

.allblog_sec .blog-entry:hover > a {
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transition: 2.5s;
    -webkit-transition: 2.5s;
    -moz-transition: 2.5s;
    -ms-transition: 2.5s;
    -o-transition: 2.5s;
}

.allblog_sec .blog-entry a {
    transition: .4s;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -ms-transition: .4s;
    -o-transition: .4s;
}

.allblog_sec .blog-entry a:hover {
    color: var(--secondary);
}

.block-20 {
    overflow: hidden;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    position: relative;
    display: block;
    width: 100%;
    height: 270px;
}

.blog-entry .blog_content {
    position: relative;
    height: 220px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 1rem 1rem 1rem;
}

.blog-entry .blog_content h3 {
    font-size: 1.3rem;
    font-weight: 500;
    line-height: 1.4;
}

.blog-entry .blog_content h3 a {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    overflow: hidden;
    /* color: #000; */
}

.blog-entry .blog_content p {
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    color: #111;
    margin-bottom: 0.2rem;
    overflow: hidden;
}

.blog-entry .blog_content span {
    font-size: 0.92rem;
    color: #555
}

.blog-entry .blog_content span:last-of-type a {
    text-decoration: underline;
    text-underline-offset: 3px;
}
</style>