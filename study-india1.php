<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Study India - Study Wander</title>

    <?php include("master/style.php") ?>

    <style>
      .placement_sec .placementSlider {
        position: relative;
      }
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
        width: 100%;
        height: 50%;
        background-color: #fff;
        box-shadow: 0px 5px 20px -12px rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 5px;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-align-items: flex-start;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
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
          <div class="row gy-4 align-items-center study-india-list mx-1 mb-3">
            <div class="col-lg-4">
              <div class="about-con">
                <img src="img/images/mba.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-lg-8">
              <div class="ms-lg-4">
                <!-- <h4 class="after-only">Who we are</h4> -->
                <h2><span class="down"> Online</span> MBA</h2>
                <p class="mt-3">
                  Elevate your career with cutting-edge curriculum, expert instructors, and hands-on learning that sets you up for success in today’s fast-paced business world. Enroll now and take the next step in your professional journey!
                  Supercharge your career with our flexible Online MBA ! Study at your own pace, gain real-world business skills, and connect with industry leaders. Unlock your potential and lead with confidence—anytime, anywhere. Enroll today!
                </p>

                <!-- <p class="mt-3">
                        </p> -->

                <div class="about_box mt-4">
                  <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                  <div class="content">
                    <h6>Amity University Online</h6>
                    <p>From Best Colleges</p>
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

                <div class="d-flex flex-wrap align-items-center gap-3 mt-3">
                  <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/MQ==" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>

                  <!-- <a href="tel:9238383839" class="d-inline-flex align-items-center gap-2 call-now">
                              <i class="ph ph-headset fs-3"></i>
                              <div>
                                 <small>Need Help?</small>
                                 <h6 class="m-0">Call Now For Enquiry</h6>
                              </div>
                           </a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row gy-4 align-items-center study-india-list mx-1 mb-3 mt-4">
            <div class="col-lg-5">
              <div class="about-con">
                <img src="img/images/mbaa.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="ms-lg-4">
                <!-- <h4 class="after-only">Who we are</h4> -->
                <h2><span class="down">Executive MBA </span>for Working Professionals</h2>
                <p class="mt-3">
                  Unlock your leadership potential with an Executive MBA designed specifically for working professionals. This flexible, high-impact program empowers you to elevate your career without compromising your job or personal life.An
                  Executive MBA equips you with the tools you need to succeed at the highest level. Transform your future—while continuing to excel today!
                </p>

                <!-- <p class="mt-3">
                        </p> -->

                <div class="about_box mt-4">
                  <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                  <div class="content">
                    <h6>Liverpool John Moores University</h6>
                    <p>From Best Colleges</p>
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

                <div class="d-flex flex-wrap align-items-center gap-3 mt-3">
                  <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/MTQ=" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>

                  <!-- <a href="tel:9238383839" class="d-inline-flex align-items-center gap-2 call-now">
                              <i class="ph ph-headset fs-3"></i>
                              <div>
                                 <small>Need Help?</small>
                                 <h6 class="m-0">Call Now For Enquiry</h6>
                              </div>
                           </a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row gy-4 align-items-center study-india-list mx-1 mb-3 mt-4">
            <div class="col-lg-5">
              <div class="about-con">
                <img src="img/images/MCA.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="ms-lg-4">
                <!-- <h4 class="after-only">Who we are</h4> -->
                <h2><span class="down">Online</span> MCA</h2>
                <p class="mt-3">
                  Take your tech career to the next level with an Online MCA program that offers flexibility, innovation, and expertise—all from the comfort of your home. Designed for aspiring IT professionals, this program blends advanced computer
                  science knowledge with practical skills to help you stand out in a competitive industry ignite your career!
                </p>

                <!-- <p class="mt-3">
                        </p> -->

                <div class="about_box mt-4">
                  <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                  <div class="content">
                    <h6>Jain University Online</h6>
                    <p>From Best Colleges</p>
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

                <div class="d-flex flex-wrap align-items-center gap-3 mt-3">
                  <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/Mg==" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>

                  <!-- <a href="tel:9238383839" class="d-inline-flex align-items-center gap-2 call-now">
                              <i class="ph ph-headset fs-3"></i>
                              <div>
                                 <small>Need Help?</small>
                                 <h6 class="m-0">Call Now For Enquiry</h6>
                              </div>
                           </a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row gy-4 align-items-center study-india-list mx-1 mb-3 mt-4">
            <div class="col-lg-5">
              <div class="about-con">
                <img src="img/images/mtech.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="ms-lg-4">
                <!-- <h4 class="after-only">Who we are</h4> -->
                <h2><span class="down">M.Tech </span> for Working Professionals</h2>
                <p class="mt-3">
                  Supercharge your career with an M.Tech for Working Professionals—where innovation meets flexibility.Whether you're looking to specialize in emerging technologies or move into leadership roles, this M.Tech empowers you to balance
                  work and study while achieving your professional goals. Unlock new possibilities, and take your career to new heights!
                </p>

                <!-- <p class="mt-3">
                        </p> -->

                <div class="about_box mt-4">
                  <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                  <div class="content">
                    <h6>Sanskriti University Engineering</h6>
                    <p>From Best Colleges</p>
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

                <div class="d-flex flex-wrap align-items-center gap-3 mt-3">
                  <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/MTA=" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>

                  <!-- <a href="tel:9238383839" class="d-inline-flex align-items-center gap-2 call-now">
                              <i class="ph ph-headset fs-3"></i>
                              <div>
                                 <small>Need Help?</small>
                                 <h6 class="m-0">Call Now For Enquiry</h6>
                              </div>
                           </a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row gy-4 align-items-center study-india-list mx-1 mb-3 mt-4">
            <div class="col-lg-5">
              <div class="about-con">
                <img src="img/images/bca.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="ms-lg-4">
                <!-- <h4 class="after-only">Who we are</h4> -->
                <h2><span class="down">Online</span> BCA</h2>
                <p class="mt-3">
                  Kickstart your tech career with an Online BCA! Learn essential programming, IT skills, and software development—all on your terms. Flexible, accessible, and designed for success, this program sets you up for a future in the
                  fast-growing tech industry. Get ready to level up!
                </p>

                <!-- <p class="mt-3">
                        </p> -->

                <div class="about_box mt-4">
                  <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                  <div class="content">
                    <h6>Manipal University Online</h6>
                    <p>From Best Colleges</p>
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

                <div class="d-flex flex-wrap align-items-center gap-3 mt-3">
                  <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/OA==" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>

                  <!-- <a href="tel:9238383839" class="d-inline-flex align-items-center gap-2 call-now">
                              <i class="ph ph-headset fs-3"></i>
                              <div>
                                 <small>Need Help?</small>
                                 <h6 class="m-0">Call Now For Enquiry</h6>
                              </div>
                           </a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row gy-4 align-items-center study-india-list mx-1 mb-3 mt-4">
            <div class="col-lg-5">
              <div class="about-con">
                <img src="img/images/bba2.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="ms-lg-4">
                <!-- <h4 class="after-only">Who we are</h4> -->
                <h2><span class="down">Online</span> BBA</h2>
                <p class="mt-3">
                  Launch your business career with an Online BBA! Gain essential management, marketing, and leadership skills, all while studying at your own pace. This flexible program opens doors to a world of opportunities, equipping you with the
                  knowledge to thrive in today’s fast-paced business world. Ready to lead? Start your journey with an Online BBA!
                </p>

                <!-- <p class="mt-3">
                        </p> -->

                <div class="about_box mt-4">
                  <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                  <div class="content">
                    <h6>Amity University Online</h6>
                    <p>From Best Colleges</p>
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

                <div class="d-flex flex-wrap align-items-center gap-3 mt-3">
                  <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/NQ==" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>

                  <!-- <a href="tel:9238383839" class="d-inline-flex align-items-center gap-2 call-now">
                              <i class="ph ph-headset fs-3"></i>
                              <div>
                                 <small>Need Help?</small>
                                 <h6 class="m-0">Call Now For Enquiry</h6>
                              </div>
                           </a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row gy-4 align-items-center study-india-list mx-1 mb-3 mt-4">
            <div class="col-lg-5">
              <div class="about-con">
                <img src="img/images/btech.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="ms-lg-4">
                <!-- <h4 class="after-only">Who we are</h4> -->
                <h2><span class="down">B.Tech</span> for Working Professionals</h2>
                <p class="mt-3">
                  Advance your engineering career with a B.Tech for Working Professionals! Tailored for busy schedules, this program combines flexible learning with cutting-edge knowledge to help you stay ahead in the tech world. Elevate your
                  expertise, unlock new opportunities, and keep excelling—without putting your career on hold!
                </p>

                <!-- <p class="mt-3">
                        </p> -->

                <div class="about_box mt-4">
                  <img src="img/icon/iconcollege.png" alt="" width="55px" class="px-2" />
                  <div class="content">
                    <h6>Lingaya's Vidyapeeth Engineering</h6>
                    <p>From Best Colleges</p>
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

                <div class="d-flex flex-wrap align-items-center gap-3 mt-3">
                  <a href="https://careertest.edumilestones.com/online-courses/universities/MzMxOQ==/OQ==" target="_blank" class="btn active about_btn_change me-2">Apply Now<i class="ph-bold ph-arrow-up-right"></i></a>

                  <!-- <a href="tel:9238383839" class="d-inline-flex align-items-center gap-2 call-now">
                              <i class="ph ph-headset fs-3"></i>
                              <div>
                                 <small>Need Help?</small>
                                 <h6 class="m-0">Call Now For Enquiry</h6>
                              </div>
                           </a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="placement_sec">
        <div class="container_fluid">
          <div class="title-con">
            <h4>Domestic Company Network</h4>
            <h2><span class="down"> 150+</span> Placement Companies</h2>
          </div>

          <div class="swiper placementSlider">
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
