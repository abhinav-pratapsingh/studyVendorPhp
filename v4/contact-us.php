<?php
    include 'admin/master/connection.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Contact us - Study Wander</title>

      <?php include("master/style.php") ?>
   </head>

   <body>
      <?php include("master/header.php") ?>

      <main>
         <!-- breadcrumb start -->
         <section class="breadcrumb_area breadcrumb__bg" style="background-image: url(img/images/breadcrumb-bg.jpg)">
            <div class="container">
               <div class="breadcrumb_content ps-2 ps-md-4">
                  <h2 class="title">Contact Us</h2>
                  <nav class="breadcrumb">
                     <span property="itemListElement" typeof="ListItem">
                        <a href="./">Home </a>
                     </span>
                     <span property="itemListElement" typeof="ListItem">&nbsp; / Contact</span>
                  </nav>
               </div>
               <div class="breadcrumb__shape-wrap">
                  <img src="img/svg/breadcrumb-shape1.svg" alt="planet" data-aos="fade-right" data-aos-delay="500" />
                  <img src="img/svg/breadcrumb-shape2.svg" alt="plane" data-aos="fade-up-right" data-aos-delay="600" data-aos-duration="1000" />
                  <img src="img/svg/breadcrumb-shape3.svg" alt="img" data-aos="fade-up" data-aos-delay="300" />
                  <img src="img/svg/breadcrumb-shape4.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400" />
                  <img src="img/svg/breadcrumb-shape5.svg" alt="line" />
               </div>
            </div>
         </section>

         <section>
            <div class="container">
               <h3>Feel free to <span class="down"> contact </span> us !</h3>
               <!-- <div class="line"></div> -->
               <div class="contact-social-media mt-4">
                  <div>
                     <div class="d-flex gap-3">
                        <div class="social-media-icon-con">
                           <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                           <h4 class="none m-0">Phone No</h4>
                           <div class="mt-2">
                              <a href="tel:9238383839">+91 92 38 38 38 39</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="d-flex gap-3">
                        <div>
                           <div class="social-media-icon-con">
                              <i class="fa-solid fa-envelope"></i>
                           </div>
                        </div>
                        <div>
                           <h4 class="none m-0">Mail</h4>
                           <div class="d-flex gap-2 flex-wrap mt-2">
                              <a href="mailto:info@studywander.com">info@studywander.com</a> <span>,</span>
                              <a href="mailto:contact@studywander.com">contact@studywander.com</a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div>
                     <div class="d-flex gap-3">
                         <div>
                        <div class="social-media-icon-con">
                           <i class="fa-solid fa-location-dot"></i>
                        </div>
                        </div>
                        <div>
                           <h4 class="none m-0">Location</h4>
                           <div class="mt-2">
                              <a href="https://maps.app.goo.gl/aLM5jK69NK1kzKWw9" target="_blank">Pearls Omaxe Tower 2, Netaji Subhash Place, New Delhi 110034</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- <h4 class="none">Follow Us </h4>
                <div class="mt-3">
                    <div class="footer-social">
                        <li><a href="" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="" class="twitter"><i class="fa-brands fa-x-twitter"> </i> </a></li>
                        <li><a href="" class="instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                    </div>
                </div> -->
            </div>
         </section>

         <section class="pt-4 mb-3">
            <div class="container">
               <div class="contact-us-con-wrapper">
                  <div class="contact-us-col-1 d-lg-block d-none">
                     <img src="img/images/hero-img.jpg" alt="" />
                  </div>

                  <div class="contact-us-form-con">
                     <form action="" class="" method="post">
                            <h3>We'd love to <span class="down"> hear </span> from you</h3>
                            <p>
                                Whether you're looking for study abroad options, have questions about visa procedures, or need guidance on university admissions, we're here to assist you every step of the way.
                            </p>

                            <div class="row mt-4">
                                <div class="col-sm-6"><input type="text" placeholder="Name" name="name"  required pattern="[A-Za-z ]+" title="Name should contain alphabets only"></div>
                                <div class="col-sm-6"><input type="tel" placeholder="Phone No" name="phone" required pattern="[6789][0-9]{9}" maxlength="10" title="Invalid Phone number"></div>
                                <div class="col-12"><input type="email" placeholder="Email" name="email"></div>
                                <div class="col-12"><textarea  id="" placeholder="Message here" name="message"></textarea></div>
                            </div>

                            <button type="submit" class="btn-one mt-2" name="submit">Submit <i class="fa-solid fa-angle-right"></i></button>
                        </form>
                  </div>
               </div>
            </div>
         </section>
         <!-- form end -->
      </main>

      <?php include("master/footer.php") ?>

      <?php include("master/script.php") ?>
   </body>
</html>



<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $msg = mysqli_real_escape_string($con, $_POST['message']);
    $query = "INSERT INTO `contact` (`name`, `phone`, `email`, `message`) VALUES ('$name', '$phone', '$email', '$msg')";

    if (mysqli_query($con, $query)) {
        echo "<script>alert('Successfully Registered');window.location.href='contact-us';</script>";
    } else {
        echo "<script>alert('Failed to register: " . mysqli_error($con) . "');</script>";
    }
}
?>