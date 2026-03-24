<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Accommodations - Study Wander</title>

      <!-- css links -->
      <?php include("master/style.php") ?>
      <style>
         @media (min-width: 1200px) {
            #home-nav {
               position: absolute;
               left: 0;
               top: 10px;
               width: 100%;
               z-index: 999;
            }
            #home-nav > nav {
               /* height: 64px; */
               padding-inline: 20px;
               background-color: #fff;
               border-radius: 50px;
            }
         }
         
      </style>
   </head>

   <body>
      <?php include("master/header.php") ?>

      <main>
         <div class="gallery">
  <div class="content">
    <span>every</span>
    <h1>picture</h1>
    <p>tells a story</p>
    <hr>
  </div>
  <footer>
    <ul>
      <li><span>likes</span>87</li>
      <li><span>views</span>173</li>
    </ul>
  </footer>
  <div class="swiper-container gallery-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://images.pexels.com/photos/1478685/pexels-photo-1478685.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Man sitting on a stone on the lake"></div>
      <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1676557059846-2dad064ae6e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Lake"></div>
      <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1676557060416-1418aefb165d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Fishermen"></div>
      <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1675685468877-8cda3a02c49f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Surfer"></div>
      <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1677108581323-7050fbfd528f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Two dogs playing"></div>
      <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1442328166075-47fe7153c128?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Standing man"></div>
    </div>

  </div>

  <div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://images.pexels.com/photos/1478685/pexels-photo-1478685.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Man sitting on a stone on the lake"></div>
      <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1676557059846-2dad064ae6e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Lake"></div>
      <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1676557060416-1418aefb165d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Fishermen"></div>
      <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1675685468877-8cda3a02c49f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Surfer"></div>
      <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1677108581323-7050fbfd528f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Two dogs playing"></div>
      <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1442328166075-47fe7153c128?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Standing man"></div>
    </div>
    <div class="swiper-pagination"></div>
    <a href="#" class="more">see more</a>
  </div>
</div>
         <section style="height: 300px"></section>
      </main>

      <?php include("master/footer.php") ?>

      <?php include("master/script.php") ?>

      <script>
         var slider = new Swiper(".accomm_hero .gallery-slider", {
            slidesPerView: 1,
            loop: true,
            loopedSlides: 6,
            noSwiping: true,
            keyboard: {
               enabled: true,
            },
            mousewheel: {
               thresholdDelta: 70,
            },
            noSwipingClass: "swiper-slide",
            pagination: {
               el: ".swiper-pagination",
               clickable: true,
            },
         });

         var thumbs = new Swiper(".accomm_hero .accomm_hero_thumbs", {
            slidesPerView: "auto",
            spaceBetween: 10,
            centeredSlides: false,
            loop: true,
            slideToClickedSlide: true,
         });

         slider.controller.control = thumbs;
         thumbs.controller.control = slider;

         /*
inspiration 
https://dribbble.com/shots/4675498-Photography-Website/attachments/10530248?mode=media
*/
      </script>
   </body>
</html>
