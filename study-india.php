<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Study India - Study Wander</title>

      <?php include("master/style.php") ?>

      <style>
         .placement_sec .placementSlider:before,
         .placement_sec .placementSlider:after {
            content: "";
            position: absolute;
            inset: 0;
            width: 6rem;
            z-index: 2;
         }
         .placement_sec .placementSlider:before {
            background: linear-gradient(to right, #fff 10%, transparent);
         }
         .placement_sec .placementSlider:after {
            left: auto;
            background: linear-gradient(to right, transparent, #fff 85%);
         }
         .placementSlider .swiper-slide img {
            display: block;
            margin: auto;
            max-height: 75px;
            max-width: 160px;
            /* border: 1px solid red; */
         }
         .study-india-list {
            display: flex;
            /* width: 100%; */
            background-color: #fff;
            box-shadow: 0px 4px 20px -8px rgba(0, 0, 0, 0.3);
            padding: 0.75rem 0.75rem 1.25rem;
            border-radius: 5px;
         }
         .study-india-list .down {
            position: relative;
            font-weight: 600;
            color: var(--secondary);
         }
         .study-india-list .btn.about_btn_change {
            color: #fff;
            background-color: var(--primary);
         }
         .why-choose-us .title-con {
            /* text-align: center; */
            margin-bottom: 0px;
         }

         .partnerSlider .swiper-slide img {
            max-height: 60px;
            max-width: 11.25rem;
         }
      </style>
   </head>

   <body>
      <?php include("master/header.php") ?>

      <main>
         <!-- breadcrumb start -->
         <section class="breadcrumb_area breadcrumb__bg" style="background-image: url(img/images/breadcrumb-bg.jpg)">
            <div class="container">
               <div class="breadcrumb_content ps-2 ps-md-4">
                  <h2 class="title">Study India</h2>
                  <nav class="breadcrumb">
                     <span property="itemListElement" typeof="ListItem">
                        <a href="./">Home </a>
                     </span>
                     <span property="itemListElement" typeof="ListItem">&nbsp; / Study India</span>
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

         <section class="aboutp_sec pb-3">
            <div class="container">
               <div class="row gy-4 align-items-center study-india-list mb-3 mt-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <div class="col-lg-5">
                     <div class="about-con">
                        <img src="img/images/mba.jpg" class="img-fluid" alt="" />
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="ms-lg-4">
                        <!-- <h4 class="after-only">Who we are</h4> -->
                        <h3>Online <span class="down"> MBA </span></h3>
                        <p class="mt-3">
                           Elevate your career with cutting-edge curriculum, expert instructors, and hands-on learning that sets you up for success in today’s fast-paced business world. Enroll now and take the next step in your professional journey! Supercharge your career with our flexible Online
                           MBA ! Study at your own pace, gain real-world business skills, and connect with industry leaders.
                        </p>

                        <div class="about_box mt-4">
                           <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>Postgraduate</h6>
                              <p>Courses</p>
                              <!-- <p>Liverpool John Moores University</p>
                              <p>Jain University Online</p> -->
                           </div>
                        </div>
                        <div class="about_box ms-3">
                           <img src="img/icon/icontime.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>2 Years</h6>
                              <p>Duration Of Course</p>
                           </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center gap-3">
                           <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/MQ==" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row gy-4 align-items-center study-india-list mb-3 mt-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <div class="col-lg-5">
                     <div class="about-con">
                        <img src="img/images/mbaa.jpg" class="img-fluid" alt="" />
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="ms-lg-4">
                        <!-- <h4 class="after-only">Who we are</h4> -->
                        <h3><span class="down">Executive MBA </span>for Working Professionals</h3>
                        <p class="mt-3">
                           Unlock your leadership potential with an Executive MBA designed specifically for working professionals. This flexible, high-impact program empowers you to elevate your career without compromising your job or personal life. An Executive MBA equips you with the tools you
                           need to succeed at the highest level.
                        </p>

                        <div class="about_box mt-4">
                           <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>For Working Professionals</h6>
                              <p>Courses</p>
                              <!-- <p>Liverpool John Moores University</p>
                              <p>Jain University Online</p> -->
                           </div>
                        </div>
                        <div class="about_box ms-3">
                           <img src="img/icon/icontime.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>12 - 24 Months</h6>
                              <p>Duration Of Course</p>
                           </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center gap-3">
                           <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/MTQ=" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row gy-4 align-items-center study-india-list mb-3 mt-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <div class="col-lg-5">
                     <div class="about-con">
                        <img src="img/images/MCA.jpg" class="img-fluid" alt="" />
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="ms-lg-4">
                        <!-- <h4 class="after-only">Who we are</h4> -->
                        <h3>Online <span class="down"> MCA</span></h3>
                        <p class="mt-3">
                           Take your tech career to the next level with an Online MCA program that offers flexibility, innovation & expertise—all from the comfort of your home. Designed for aspiring IT professionals, this program blends advanced computer science knowledge with practical skills to
                           help you stand out in a competitive industry ignite your career!
                        </p>

                        <div class="about_box mt-4">
                           <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>Postgraduate</h6>
                              <p>Courses</p>
                              <!-- <p>Liverpool John Moores University</p>
                              <p>Jain University Online</p> -->
                           </div>
                        </div>
                        <div class="about_box ms-3">
                           <img src="img/icon/icontime.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>2 Years</h6>
                              <p>Duration Of Course</p>
                           </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center gap-3">
                           <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/Mg==" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row gy-4 align-items-center study-india-list mb-3 mt-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <div class="col-lg-5">
                     <div class="about-con">
                        <img src="img/images/mtech.jpg" class="img-fluid" alt="" />
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="ms-lg-4">
                        <!-- <h4 class="after-only">Who we are</h4> -->
                        <h3><span class="down">M.Tech </span> for Working Professionals</h3>
                        <p class="mt-3">
                           Supercharge your career with an M.Tech for Working Professionals—where innovation meets flexibility.Whether you're looking to specialize in emerging technologies or move into leadership roles, this M.Tech empowers you to balance work & study while achieving your
                           professional goals. Unlock new possibilities, and take your career to new heights!
                        </p>

                        <div class="about_box mt-4">
                           <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>Postgraduate</h6>
                              <p>Courses</p>
                              <!-- <p>Liverpool John Moores University</p>
                              <p>Jain University Online</p> -->
                           </div>
                        </div>
                        <div class="about_box ms-3">
                           <img src="img/icon/icontime.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>2 Years</h6>
                              <p>Duration Of Course</p>
                           </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center gap-3">
                           <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/MTA=" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row gy-4 align-items-center study-india-list mb-3 mt-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <div class="col-lg-5">
                     <div class="about-con">
                        <img src="img/images/bca.jpg" class="img-fluid" alt="" />
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="ms-lg-4">
                        <!-- <h4 class="after-only">Who we are</h4> -->
                        <h3>Online <span class="down"> BCA</span></h3>
                        <p class="mt-3">
                           Kickstart your tech career with an Online BCA! Learn essential programming, IT skills & software development—all on your terms. Flexible, accessible, and designed for success, this program sets you up for a future in the fast-growing tech industry. Get ready to level up!
                        </p>

                        <div class="about_box mt-4">
                           <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>Undergraduate</h6>
                              <p>Courses</p>
                              <!-- <p>Liverpool John Moores University</p>
                              <p>Jain University Online</p> -->
                           </div>
                        </div>
                        <div class="about_box ms-3">
                           <img src="img/icon/icontime.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>3 Years</h6>
                              <p>Duration Of Course</p>
                           </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center gap-3">
                           <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/OA==" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row gy-4 align-items-center study-india-list mb-3 mt-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <div class="col-lg-5">
                     <div class="about-con">
                        <img src="img/images/bba2.jpg" class="img-fluid" alt="" />
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="ms-lg-4">
                        <!-- <h4 class="after-only">Who we are</h4> -->
                        <h3>Online <span class="down"> BBA</span></h3>
                        <p class="mt-3">
                           Launch your business career with an Online BBA! Gain essential management, marketing, and leadership skills, all while studying at your own pace. This flexible program opens doors to a world of opportunities, equipping you with the knowledge to thrive in today’s fast-paced
                           business world. Start your journey with an Online BBA!
                        </p>

                        <div class="about_box mt-4">
                           <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>Undergraduate</h6>
                              <p>Courses</p>
                              <!-- <p>Liverpool John Moores University</p>
                              <p>Jain University Online</p> -->
                           </div>
                        </div>
                        <div class="about_box ms-3">
                           <img src="img/icon/icontime.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>3 Years</h6>
                              <p>Duration Of Course</p>
                           </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center gap-3">
                           <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/NQ==" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row gy-4 align-items-center study-india-list mb-3 mt-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <div class="col-lg-5">
                     <div class="about-con">
                        <img src="img/images/btech.jpg" class="img-fluid" alt="" />
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="ms-lg-4">
                        <!-- <h4 class="after-only">Who we are</h4> -->
                        <h3><span class="down">B.Tech</span> for Working Professionals</h3>
                        <p class="mt-3">
                           Advance your engineering career with a B.Tech for Working Professionals! Tailored for busy schedules, this program combines flexible learning with cutting-edge knowledge to help you stay ahead in the tech world. Elevate your expertise, unlock new opportunities & keep
                           excelling—without putting your career on hold!
                        </p>

                        <div class="about_box mt-4">
                           <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>Undergraduate</h6>
                              <p>Courses</p>
                              <!-- <p>Liverpool John Moores University</p>
                              <p>Jain University Online</p> -->
                           </div>
                        </div>
                        <div class="about_box ms-3">
                           <img src="img/icon/icontime.png" alt="" width="55px" class="px-2" />
                           <div class="content">
                              <h6>3 Years</h6>
                              <p>Duration Of Course</p>
                           </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center gap-3">
                           <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/OQ==" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!-- partner section start -->
         <section class="pb-0">
            <div class="container">
               <div class="title-con">
                  <h4>Domestic University Network</h4>
                  <h2><span class="down"> 250+</span> and expanding rapidly</h2>
               </div>

               <div class="swiper partnerSlider">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom01.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6 slider-items">
                           <img src="img/domestic/dom02.webp" alt="" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom03.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom04.webp" alt="" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom05.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom06.jpg" alt="" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom07.jpg" alt="" />
                        </div>
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom08.webp" alt="" />
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom09.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6 slider-items">
                           <img src="img/domestic/dom31.webp" alt="" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom11.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom12.webp" alt="" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom13.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom14.webp" alt="" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom15.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom16.jpg" alt="" />
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom17.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6 slider-items">
                           <img src="img/domestic/dom18.webp" alt="" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom19.jpg" alt="" />
                        </div>
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom20.jpg" alt="" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom21.jpg" alt="" />
                        </div>
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom22.png" alt="" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom23.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom24.webp" alt="" />
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom25.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6 slider-items">
                           <img src="img/domestic/dom26.webp" alt="" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom27.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom28.webp" alt="" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom29.webp" alt="" />
                        </div>
                        <div class="col-md-3 col-6">
                           <img src="img/domestic/dom30.webp" alt="" />
                        </div>
                     </div>
                  </div>
                  <!-- <div class="text-center mt-4">
            <p>
              <q class="f-500">
                Our admissions counselling service for these universities is completely <span class="down">FREE</span>. <br />
                Receive personalized guidance without any charges.
              </q>
            </p>
          </div> -->
               </div>
            </div>
         </section>
         <!-- partner section end -->

         <!-- why choose us start -->
         <section class="why-choose-us mb-2 mt-0">
            <div class="container" data-aos="fade-up">
               <div class="row align-items-center justify-content-center">
                  <div class="col-lg-6">
                     <div class="title-con">
                        <!-- <h4 class="after-only">Our USPs</h4> -->
                        <h2>Why <span class="down"> Choose Us </span></h2>
                     </div>
                  </div>
               </div>
               <div class="usp-con row gy-4 mt-1">
                  <div class="col-lg-4 col-md-6">
                     <div class="usp-card">
                        <h3>1. Expert Guidance</h3>
                        <p>Personalized consultations with experienced education advisors, ensuring you make informed decisions.</p>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                     <div class="usp-card">
                        <h3>2. Global Reach</h3>
                        <p>Access to top-tier universities worldwide, offering diverse options tailored to your goals.</p>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                     <div class="usp-card">
                        <h3>3. Fast Results</h3>
                        <p>Streamlined applications that help 95% of our students receive their admits within 4 weeks.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- why choose us end -->

         <section class="placement_sec">
            <div class="container_fluid">
               <div class="title-con">
                  <h4>Domestic Company Network</h4>
                  <h2><span class="down"> 150+</span> Placement Companies</h2>
               </div>

               <div class="swiper placementSlider position-relative">
                  <div class="swiper-wrapper align-items-center">
                     <div class="swiper-slide">
                        <img src="img/placement/accenture.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/adidas.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/airtel.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/amazon.webp" alt="" />
                     </div>

                     <div class="swiper-slide">
                        <img src="img/placement/apple.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/bosch.jpeg" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/capgemini.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/cognizant.webp" alt="" />
                     </div>

                     <div class="swiper-slide">
                        <img src="img/placement/deloitte.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/Dell.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/ey.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/facebook.webp" alt="" />
                     </div>

                     <div class="swiper-slide">
                        <img src="img/placement/flipkart.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/fractal.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/genpact.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/godrej.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/google.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/hcl.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/hitachi.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/honeywell.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/hp.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/hsbc.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/ibm.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/icici-bank.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/indigo.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/infosys.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/itc.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/johnson-controls.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/JP_Morgan.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/kelloggs.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/kpmg.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/mahindra.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/mckinsey-and-company.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/microsoft.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/MetLife.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/nestle.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/Nokia.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/paypal.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/paytm.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/pwc.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/reliance.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/samsung.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/Spicejet.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/tata-motors.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/tata-power.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/tcs.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/tech-mahindra.webp" alt="" />
                     </div>
                     <div class="swiper-slide">
                        <img src="img/placement/wipro.webp" alt="" />
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!-- form end -->
      </main>

      <?php include("master/footer.php") ?>

      <?php include("master/script.php") ?>

      <script>
         var swiper = new Swiper(".placementSlider", {
            spaceBetween: 10,
            slidesPerView: 2,
            loop: true,
            // autoplay: false,
            autoplay: {
               delay: 0,
               disableOnInteraction: false,
            },
            speed: 4000,
            pagination: {
               el: ".swiper-pagination",
               clickable: true,
            },
            breakpoints: {
               300: {
                  slidesPerView: 2,
               },
               600: {
                  slidesPerView: 2,
               },
               991: {
                  slidesPerView: 4,
               },
               1200: {
                  slidesPerView: 6,
               },
               1360: {
                  slidesPerView: 6,
               },
            },
         });
      </script>
   </body>
</html>
