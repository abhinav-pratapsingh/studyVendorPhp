<!-- navbar drawer -->
<div class="offcanvas offcanvas-start d-xl-none" tabindex="-1" id="nav-canvas" aria-labelledby="offcanvasExampleLabel">
   <div class="offcanvas-header" style="border-bottom: 1px solid rgba(128, 128, 128, 0.198)">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="img/logo.png" width="100px" class="rounded-2" alt="" /></h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   </div>
   <div class="offcanvas-body">
      <div>
         <ul class="small-nav-con">
            <li><a href="about-us">About Us</a></li>
            <li><a href="https://studywander.edumilestones.com" target="_blank">Study Abroad</a></li>
            <li class="d-none d-xxl-block"><a href="study-india">Study India</a></li>

            <div x-data="{show : false}">
               <li class="d-flex justify-content-between drop-nav c-pointer" @click="show = !show">
                  <a href="">Destinations</a>
                  <i class="fa-solid fa-chevron-down" :class="show && 'rotate-180'"></i>
               </li>
               <div x-show="show" x-transition class="destination-con mobile-nav">
                  <a href="location/usa" class="flag-con d-flex gap-3">
                     <img src="img/flag/usaFlag.jpg" alt="" />
                     <div>USA</div>
                  </a>
                  <a href="location/uk" class="flag-con d-flex gap-3">
                     <img src="img/flag/ukFlag.jpg" alt="" />
                     <div>UK</div>
                  </a>
                  <a href="location/canada" class="flag-con d-flex gap-3">
                     <img src="img/flag/canadaFlag.jpg" alt="" />
                     <div>Canada</div>
                  </a>
                  <a href="location/australia" class="flag-con d-flex gap-3">
                     <img src="img/flag/australiaFlag.jpg" alt="" />
                     <div>Australia</div>
                  </a>
                  <a href="location/new-zealand" class="flag-con d-flex gap-3">
                     <img src="img/flag/newzealandFlag.jpg" alt="" />
                     <div>New Zealand</div>
                  </a>
                  <a href="location/germany" class="flag-con d-flex gap-3">
                     <img src="img/flag/germanyFlag.jpg" alt="" />
                     <div>Germany</div>
                  </a>
                  <a href="location/ireland" class="flag-con d-flex gap-3">
                     <img src="img/flag/irelandFlag.jpg" alt="" />
                     <div>Ireland</div>
                  </a>
                  <a href="location/france" class="flag-con d-flex gap-3">
                     <img src="img/flag/franceFlag.png" alt="" />
                     <div>France</div>
                  </a>
                  <a href="location/singapore" class="flag-con d-flex gap-3">
                     <img src="img/flag/singapore.png" alt="" />
                     <div>Singapore</div>
                  </a>
                  <a href="about-us#destinations" class="flag-con d-flex gap-3 mt-1 justify-content-center">
                     <div>View More <i class="ph-bold ph-arrow-up-right"></i></div>
                  </a>
               </div>
            </div>

            <li>
               <a href="accommodation.php"> Accommodation</a>
            </li>

            <div x-data="{show : false}">
               <li class="d-flex justify-content-between drop-nav c-pointer" @click="show = !show">
                  <a href="">Test Prep </a>
                  <i class="fa-solid fa-chevron-down" :class="show && 'rotate-180'"></i>
               </li>

               <div x-show="show" x-transition class="test-prep-con mobile-nav">
                  <div>
                     <a href="gmat-test"><img src="img/test/gmat.png" alt="" /></a>
                  </div>
                  <div>
                     <a href="gre-test"><img src="img/test/gre.png" alt="" /></a>
                  </div>
                  <div>
                     <a href="ielts-test"><img src="img/test/ielts.png" alt="" /></a>
                  </div>
                  <div>
                     <a href="pte-test"><img src="img/test/pte.png" alt="" /></a>
                  </div>
                  <div>
                     <a href="sat-test"><img src="img/test/sat.png" alt="" /></a>
                  </div>
                  <div>
                     <a href="toefl-test"><img src="img/test/toefl.png" alt="" /></a>
                  </div>
               </div>
            </div>

            <li><a href="all-blog">Our Blog</a></li>

            <li><a href="contact-us">Contact Us</a></li>
            <li>
               <a href="https://studywander.edumilestones.com/career-counsellor/Nancy-Harjani" target="_blank">
                  <button class="btn-one m-0">Book Appointment</button>
               </a>
            </li>
         </ul>
      </div>
   </div>
</div>

<!-- navbar  -->
<header id="home-nav">
   <div class="container-fluid">
      <nav class=" d-flex justify-content-between align-items-stretch px-xl-5">
         <a href="./"><img src="img/logo.png" alt="" /></a>

         <ul class="gap-4 align-items-center d-none d-xl-flex align-items-stretch">
            <li><a href="about-us">About Us</a></li>
            <li><a href="study-india">Study India</a></li>

            <li>
               <a href="https://studywander.edumilestones.com" target="_blank"> Study Abroad </a>
            </li>

            <li class="drop-nav">
               <a href="">Destinations <i class="fa-solid fa-angle-down"></i></a>

               <div class="drop-nav-list">
                  <div class="destination-con">
                     <a href="location/usa" class="flag-con d-flex gap-3">
                        <img src="img/flag/usaFlag.jpg" alt="" />
                        <div>USA</div>
                     </a>
                     <a href="location/uk" class="flag-con d-flex gap-3">
                        <img src="img/flag/ukFlag.jpg" alt="" />
                        <div>UK</div>
                     </a>
                     <a href="location/canada" class="flag-con d-flex gap-3">
                        <img src="img/flag/canadaFlag.jpg" alt="" />
                        <div>Canada</div>
                     </a>
                     <a href="location/australia" class="flag-con d-flex gap-3">
                        <img src="img/flag/australiaFlag.jpg" alt="" />
                        <div>Australia</div>
                     </a>
                     <a href="location/new-zealand" class="flag-con d-flex gap-3">
                        <img src="img/flag/newzealandFlag.jpg" alt="" />
                        <div>New Zealand</div>
                     </a>
                     <a href="location/germany" class="flag-con d-flex gap-3">
                        <img src="img/flag/germanyFlag.jpg" alt="" />
                        <div>Germany</div>
                     </a>
                     <a href="location/ireland" class="flag-con d-flex gap-3">
                        <img src="img/flag/irelandFlag.jpg" alt="" />
                        <div>Ireland</div>
                     </a>
                     <a href="location/france" class="flag-con d-flex gap-3">
                        <img src="img/flag/franceFlag.png" alt="" />
                        <div>France</div>
                     </a>
                     <a href="location/singapore" class="flag-con d-flex gap-3">
                        <img src="img/flag/singapore.png" alt="" />
                        <div>Singapore</div>
                     </a>
                     <a href="about-us#destinations" class="flag-con d-flex gap-3 mt-1 justify-content-center">
                        <div>View More <i class="ph-bold ph-arrow-up-right"></i></div>
                     </a>
                  </div>
               </div>
            </li>

            <li class="drop-nav">
               <a href="">Test Prep <i class="fa-solid fa-angle-down"></i></a>

               <div class="drop-nav-list">
                  <div class="test-prep-con">
                     <div>
                        <a href="gmat-test"><img src="img/test/gmat.png" alt="" /></a>
                     </div>
                     <div>
                        <a href="gre-test"><img src="img/test/gre.png" alt="" /></a>
                     </div>
                     <div>
                        <a href="ielts-test"><img src="img/test/ielts.png" alt="" /></a>
                     </div>
                     <div>
                        <a href="pte-test"><img src="img/test/pte.png" alt="" /></a>
                     </div>
                     <div>
                        <a href="sat-test"><img src="img/test/sat.png" alt="" /></a>
                     </div>
                     <div>
                        <a href="toefl-test"><img src="img/test/toefl.png" alt="" /></a>
                     </div>
                  </div>
               </div>
            </li>

            <li><a href="accommodation"> Accommodation</a></li>
            <!-- <li><a href="">Partner Up</a></li> -->

            <li>
               <a href="https://studywander.edumilestones.com/career-counsellor/Nancy-Harjani" target="_blank" class="hero_btn m-0">Book Appointment</a>
            </li>
         </ul>

         <div class="d-block d-xl-none ham-menu d-flex align-items-center c-pointer mobile_nav_btn" data-bs-toggle="offcanvas" data-bs-target="#nav-canvas">
            <i class="fa-solid fa-bars"></i>
         </div>
      </nav>
   </div>
</header>
