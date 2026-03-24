<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Accommodations - Study Wander</title>

    <!-- css links -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
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
    <style>
      .tabs-left {
        justify-content: center;
        margin-inline: auto;
        border-bottom: none;
        border-right: 1px solid #ddd;
      }

      .tabs-left > li {
        text-align: center;
        width: 100%;
        max-width: 210px;
        float: none;
        margin: 0px;
      }
      .tabs-left > li > a span {
        margin-right: 1rem;
        width: 1.6rem;
        aspect-ratio: 1/1;
        display: inline-block;
        border-radius: 50%;
        overflow: hidden;
      }
      .tabs-left > li > a span img {
        max-width: 100%;
        min-height: 100%;
      }
      .tabs-left > li.active > a,
      .tabs-left > li.active > a:hover,
      .tabs-left > li.active > a:focus {
        border-bottom-color: #ddd;
        border-right-color: transparent;
        background: #f90;
        color: white;
        border: none;
        border-radius: 0px;
        margin: 0px;
      }
      .nav-tabs > li > a:hover {
        /* margin-right: 2px; */
        line-height: 1.42857143;
        border: 1px solid transparent;
        /* border-radius: 4px 4px 0 0; */
      }
      .active {
        color: white;
      }
      .tabs-left > li.active > a::after {
        content: "";
        position: absolute;
        top: 10px;
        right: -10px;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-left: 10px solid #f90;
        display: block;
        width: 0;
      }
      .country_content img {
        /* height: 100%;
         width: 100%; */
        border-radius: 5px;
        transition: 1s;
      }
      .country_content img:hover {
        transform: scale(1.1);
      }
      .country_content {
        position: relative;
        overflow: hidden;
      }
      .country_text {
        background: #000000a6;
        border-radius: 4px;
        bottom: 0;
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        line-height: 18px;
        margin: 7px;
        padding: 6px;
        position: absolute;
        width: calc(100% - 40px);
        z-index: 2;
      }
      .book-title {
        color: #1f2a37;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 125%;
      }
      .book-subtitle {
        color: #6b7280;
        font-size: 1.15rem;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
      }
      .book-edit {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        border-radius: 8px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 234px;
        padding: 12px;
        background: radial-gradient(50% 50% at 50% 50%, rgba(9, 255, 210, 0.08) 0, rgba(8, 211, 174, 0) 100%);
        /* background: radial-gradient(50% 50% at 50% 50%, rgba(55, 204, 177, 0.08) 0%, rgba(55, 204, 177, 0) 100%); */
        /* background: radial-gradient(50% 50% at 50% 50%, rgba(237, 58, 86, 0.08) 0, rgba(237, 58, 86, 0) 100%); */
      }
      .bone {
        color: #374151;
        font-size: 18px;
        font-weight: 500;
        line-height: 21px;
        text-align: left;
      }
      .btwo {
        color: #6b7280;
        font-size: 14px;
        font-weight: 400;
        letter-spacing: 0.004em;
        line-height: 18px;
        text-align: left;
      }
      .book-steps {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        background-color: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        flex-grow: 1;
        height: 100%;
        padding: 24px 24px 24px 40px;
        position: relative;
        width: 350px;
      }
      .step-card {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        align-items: center;
        background-color: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 50%;
        -webkit-box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
        color: #4b5563;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        font-size: inherit;
        font-size: 20px;
        font-weight: 700;
        height: 48px;
        justify-content: center;
        left: -24px;
        line-height: 1.55;
        position: absolute;
        text-align: center;
        -webkit-text-decoration: none;
        text-decoration: none;
        top: calc(50% - 24px);
        width: 48px;
      }
      .stepone {
        color: #111928;
        font-size: 18px;
        font-style: normal;
        font-weight: 600;
        line-height: 125%;
        margin-top: 12px;
      }
      .content-card {
        color: #6b7280;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
      }
      .country-table {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
      }
      .country_table a {
        background-color: transparent;
        border: 0;
        color: #007a64;
        color: var(--primary);
        cursor: pointer;
        font-size: 0.96rem;
        font-style: normal;
        font-weight: 500;
        line-height: 150%;
        padding: 13px 12px;
        text-decoration: none;
        min-width: 12.5rem;
      }
      .country_table a:hover {
        text-decoration: underline;
        text-underline-offset: 3px;
      }
      .accomm_cta {
        margin: 0;
        position: relative;
        background-color: #fff;
        padding: 1rem 0;
        overflow: hidden;
        z-index: 0;
      }

      .accomm_cta::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -1px;
        width: 100%;
        height: calc(100% / 2);
        background-color: #e5e8ec;
        z-index: -1;
      }

      .accomm_cta > .container {
        background-color: #fff;
        padding-block: 2rem;
        border-radius: 50px;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -ms-border-radius: 50px;
        -o-border-radius: 50px;
        box-shadow: 0 2px 15px #dddd;
      }

      .accomm_cta .cta_content {
        /* display: block;
        text-align: center; */
        gap: 12px !important;
        height: 117px;
        border: 1px solid #fdc8d3;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        align-items: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        position: relative;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        background: #fff;
        border: 1px solid #ec919c;
        border-radius: 12px;
        -ms-flex-direction: column;
        flex-direction: column;
        gap: 8px;
        height: 88px;
        padding: 24px 0;
        width: 165px;
      }
      .appoint {
        color: #4b5563;
        font-size: 14px;
        font-weight: 500;
        text-align: center;
        text-decoration: none;
      }
      .cta-button {
        border: none;
        min-height: 20px;
        min-width: 20px;
      }
    </style>
  </head>

  <body>
    <?php include("master/header.php") ?>

    <main>
      <div class="accomm_hero">
        <!-- <div class="content">
               <span>every</span>
               <h1>picture</h1>
               <p>tells a story</p>
               <hr />
            </div>
            <footer>
               <ul>
                  <li><span>likes</span>87</li>
                  <li><span>views</span>173</li>
               </ul>
            </footer> -->
        <div class="swiper-container accomm_hero_main">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="img/accommodation/slide1.jpg" alt="Lake" />
              <div class="content">
                <span>Best for UK</span>
                <h2>Rathbone Place</h2>
                <p>Tottenham Ct Rd, London</p>
                <hr />
              </div>
              <footer>
                <ul>
                  <li>3 <span>Room</span></li>
                  <li><span>CCTV</span></li>
                </ul>
              </footer>
            </div>
            <div class="swiper-slide">
              <img src="img/accommodation/slide2.jpg" alt="Fishermen" />
              <div class="content">
                <span>Recommendation</span>
                <h2>Brooklyn Heights</h2>
                <p>Columbia Heights, New York</p>
                <hr />
              </div>
              <footer>
                <ul>
                  <!-- <li>2<span>Room</span></li> -->
                  <li>2m<span> From City Center</span></li>
                </ul>
              </footer>
            </div>

            <div class="swiper-slide">
              <img src="img/accommodation/sydey-room.avif" alt="Surfer" />
              <div class="content">
                <span>Recommendation</span>
                <h2>Scape Darling House</h2>
                <p>Sydney, Australia</p>
                <hr />
              </div>
              <footer>
                <ul>
                  <!-- <li>2<span>Room</span></li> -->
                  <li>1.1m <span> From City Center</span></li>
                </ul>
              </footer>
            </div>

            <div class="swiper-slide">
              <img src="img/accommodation/slide4.jpg" alt="Two dogs playing" />
              <div class="content">
                <!-- <span>Recommendation</span> -->
                <h2>Stanley Court</h2>
                <p>Liverpool, United Kingdom</p>
                <hr />
              </div>
              <footer>
                <ul>
                  <!-- <li>2<span>Room</span></li> -->
                  <li>6m<span> From City Center</span></li>
                </ul>
              </footer>
            </div>
          </div>
        </div>

        <div class="swiper-container accomm_hero_thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/accommodation/slide1.jpg" alt="Lake" /></div>
            <div class="swiper-slide"><img src="img/accommodation/slide2.jpg" alt="Fishermen" /></div>
            <div class="swiper-slide"><img src="img/accommodation/sydey-room.avif" alt="Surfer" /></div>
            <div class="swiper-slide"><img src="img/accommodation/slide4.jpg" alt="Two dogs playing" /></div>
          </div>
          <div class="swiper-pagination"></div>
          <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" target="_blank" class="more">see more</a>
        </div>
      </div>

      <section class="pt-4 pb-5 mt-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs tabs-left sideways">
                <li class="active">
                  <a href="#home-v" data-toggle="tab" class="d-flex align-items-center">
                    <span><img src="img/flag/ukFlag.jpg" alt="" /></span>United Kingdom
                  </a>
                </li>
                <li>
                  <a href="#profile-v" data-toggle="tab" class="d-flex align-items-center">
                    <span><img src="img/flag/usa-flag.png" alt="" /></span>
                    United States</a
                  >
                </li>
                <li>
                  <a href="#messages-v" data-toggle="tab" class="d-flex align-items-center">
                    <span><img src="img/flag/australiaFlag.jpg" alt="" /></span>Australia
                  </a>
                </li>
                <li>
                  <a href="#settings-v" data-toggle="tab" class="d-flex align-items-center">
                    <span><img src="img/flag/canadaFlag.jpg" alt="" /></span>Canada
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9">
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="home-v">
                  <div class="row gy-2">
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/acc10.jpg" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Coventry</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/acc02.jpg" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">London</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/acc03.jpg" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Liverpool</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/acc04.jpg" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Leicester</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/acc05.jpg" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Newcastle Upon Tyne</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/acc06.jpg" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Cardiff</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/acc07.jpg" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Edinburgh</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/acc09.jpg" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Nottingham</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="profile-v">
                  <div class="row gy-2">
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/usa01.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">New York City</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/usa02.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Austin</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/usa03.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">San Francisco</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/usa04.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Dallas</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/usa05.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Philadelphia</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/usa06.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Los Angles</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/usa07.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Miami</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/usa08.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Chicago</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="messages-v">
                  <div class="row gy-2">
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/can01.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Melbourne</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/can02.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Brisbane</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/can03.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Sydney</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/can04.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Adelaide</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/can05.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Perth</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/can06.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Canberra</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/can07.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Gold Coast</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/can08.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Coffs Harbour</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="settings-v">
                  <div class="row gy-2">
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/c01.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Toronto</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/c02.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Montreal</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/c03.avif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Vancouver</a></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="country_content">
                        <a href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==" class="text-decoration-none" target="_blank"><img src="img/accommodation-img/c04.jfif" alt="" height="200" width="200" /></a>
                        <div class="country_text text-center mb-2"><a href="" class="text-decoration-none text-light">Ottawa</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>

      <section class="home_hotel_sec">
        <div class="container">
          <div class="title-con mb-4 text-start d-flex align-items-center justify-content-between">
            <span>
              <h4 class="after-only">Destination</h4>
              <h2>Accommodations In Popular <span class="down">Cities</span></h2>
            </span>

            <a href="about-us#destinations" class="d-none d-md-inline">View All <i class="fa fa-arrow-right-long"></i></a>
          </div>

          <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp">
              <div class="room_item">
                <a href="https://amberstudent.com/places/the-buckingham-2011115782252?utm_source=edumilesto-c49a31f5&utm_campaign=partner&utm_medium=widget" target="_blank">
                  <div class="room_item_img">
                    <img src="img/accommodation/room1.avif" alt="" />
                    <!-- <small class="position-absolute end-0 top-100 translate-middle-y bg-primary text-white py-1 px-3 ms-4"
                              >$100/Night</small> -->
                  </div>
                </a>
                <div class="home_hotel_info">
                  <div class="mb-3">
                    <a href="https://amberstudent.com/places/the-buckingham-2011115782252?utm_source=edumilesto-c49a31f5&utm_campaign=partner&utm_medium=widget" target="_blank">
                      <h5 class="none mb-0">The Buckingham</h5>
                      <h6>Chicago, United States</h6>
                    </a>
                  </div>
                  <div class="d-flex mb-3">
                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>7 Bed</small>
                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                  </div>

                  <!-- <div class="d-flex justify-content-end">
                              <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                              <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                           </div> -->
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp">
              <div class="room_item">
                <a href="https://amberstudent.com/places/rathbone-place-london-2408027797079?utm_source=edumilesto-c49a31f5&utm_campaign=partner&utm_medium=widget" target="_blank">
                  <div class="room_item_img">
                    <img src="img/accommodation/room2.avif" alt="" />
                  </div>
                </a>
                <div class="home_hotel_info">
                  <div class="mb-3">
                    <a href="https://amberstudent.com/places/rathbone-place-london-2408027797079?utm_source=edumilesto-c49a31f5&utm_campaign=partner&utm_medium=widget" target="_blank">
                      <h5 class="none mb-0">Rathbone Place</h5>
                      <h6>London, UK</h6>
                    </a>
                  </div>
                  <div class="d-flex mb-3">
                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp">
              <div class="room_item">
                <a href="https://amberstudent.com/places/dashwood-studios-1805049298482?utm_source=edumilesto-c49a31f5&utm_campaign=partner&utm_medium=widget" target="_blank">
                  <div class="room_item_img">
                    <img src="img/accommodation/room3.avif" alt="" />
                  </div>
                </a>
                <div class="home_hotel_info">
                  <div class="mb-3">
                    <a href="https://amberstudent.com/places/dashwood-studios-1805049298482?utm_source=edumilesto-c49a31f5&utm_campaign=partner&utm_medium=widget" target="_blank">
                      <h5 class="none mb-0">Collegiate Dashwood Studios</h5>
                      <h6>London, UK</h6>
                    </a>
                  </div>
                  <div class="d-flex mb-3">
                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>4 Bed</small>
                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-4 pb-5 mt-3">
        <div class="container">
            <div class="title-con text-startx ">
          <h2 >Reserve your ideal <span class="down">stay</span></h2>
          <h3 class="book-subtitle">Take the hassle out of securing your student home for the best years of your life</h3>
          </div>

          <div class="row gy-2 mt-5">
            <div class="col-lg-3">
              <div class="book-edit">
                <img src="img/accommodation-img/like.png" alt="" height="60" width="60" />
                <div class="book_content pt-2">
                  <span class="bone">Hassle-Free Bookings</span> <br />
                  <span class="btwo">Time is money. Save both when you book with us.. </span>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="book-edit">
                <img src="img/accommodation-img/payment.png" alt="" height="60" width="60" />
                <div class="book_content pt-2">
                  <span class="bone">Compitator Price Guarantee</span> <br />
                  <span class="btwo">Find a lower price and we'll match it. No questions asked.</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="book-edit">
                <img src="img/accommodation-img/care.png" alt="" height="60" width="60" />
                <div class="book_content pt-2">
                  <span class="bone">Round-the-Clock Support</span> <br />
                  <span class="btwo">If you have a doubt or a query, we’re always a call away.</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="book-edit">
                <img src="img/accommodation-img/verified.png" alt="" height="60" width="60" />
                <div class="book_content pt-2">
                  <span class="bone">Certified Listings</span> <br />
                  <span class="btwo">We promise to deliver what you see on the website.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-4 pb-5 mt-3">
        <div class="container">
            <div class="title-con text-start">
          <h2>Book your place in <span class="down">3 steps</span></h2>
          <h3 class="book-subtitle">Book places in major cities and universities across the globe</h3>
          </div>

          <div class="row gy-2 mt-5">
            <div class="col-lg-4">
              <div class="book-steps">
                <div class="step-card">1</div>
                <img src="img/accommodation-img/circle.png" alt="" height="50" width="50" />
                <h5 class="stepone">Identify and Settle</h5>
                <div class="content_card">Choose from a plethora of verified student home listings</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="book-steps">
                <div class="step-card">2</div>
                <img src="img/accommodation-img/document.png" alt="" height="50" width="50" />
                <h5 class="stepone">Finish up your documentation</h5>
                <div class="content_card">Paperwork’s on us, no need to fuss.</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="book-steps">
                <div class="step-card">3</div>
                <img src="img/accommodation-img/green-house.png" alt="" height="50" width="50" />
                <h5 class="stepone">Reservation Confirmed!</h5>
                <div class="content_card">Relax, pack your bags, and unravel a new life chapter!</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-4 pb-5 mt-3">
        <div class="container">
          <h3 class="book-title">Cities from every corner of the globe</h3>
          <h3 class="book-subtitle">Secure student apartments near esteemed universities and vibrant cities</h3>

          <div class="country_table">
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">London</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Glasgow</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Coventry</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Birmingham</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Nottingham</a>
            <!-- <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Sheffield</a> -->
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Manchester</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Edinburgh</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Leicester</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Cardiff</a>
            <!-- <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Leeds</a> -->
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Newcastle</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Aberdeen</a>
            <!-- <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Portsmouth</a> -->
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Cambridge</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Oxford</a>
            <!-- <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Southampton</a> -->
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Exeter</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Bournemouth</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Belfast</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Bristol</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Canterbury</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Dublin</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Swansea</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Loughborough</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Brighton</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Derby</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Hatfield</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Lincoln</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Luton</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Plymouth</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Dallas</a>
            <!-- <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Cork</a> -->
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Melbourne</a>
            <a target="_blank" class="" href="https://careertest.edumilestones.com/abroad-accommodation.php?channel_id=MzMxOQ==">Sydney</a>
          </div>
        </div>
      </section>

      <section class="accomm_cta">
        <div class="container px-lg-5">
          <div class="row align-items-center flex-wrap">
            <div class="col-lg-4">
              <h4 class="none">Need support? We’re just a click away!</h4>
              <p>If you have any queries, feel free to contact us</p>
            </div>

            <div class="col-lg-2 col-6">
              <div class="cta_content">
                <a href="https://studywander.edumilestones.com/career-counsellor/Nancy-Harjani" target="_blank" class="cta-button text-decoration-none">
                  <svg width="36" height="36" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                      <path
                        d="M8.25 17.875C8.25 17.1145 7.63555 16.5 6.875 16.5H2.75C1.98945 16.5 1.375 15.8855 1.375 15.125V2.75C1.375 1.98945 1.98945 1.375 2.75 1.375H19.25C20.0105 1.375 20.625 1.98945 20.625 2.75V15.125C20.625 15.8855 20.0105 16.5 19.25 16.5H13.2902C12.9937 16.5 12.7016 16.5945 12.4652 16.775L8.25 19.9375V17.875ZM2.75 0C1.2332 0 0 1.2332 0 2.75V15.125C0 16.6418 1.2332 17.875 2.75 17.875H5.5H6.875V19.25V21.3125C6.875 21.5746 7.02109 21.8109 7.25313 21.927C7.48516 22.043 7.76445 22.0172 7.975 21.8625L13.2902 17.875H19.25C20.7668 17.875 22 16.6418 22 15.125V2.75C22 1.2332 20.7668 0 19.25 0H2.75ZM8.25 7.90625C8.5235 7.90625 8.78581 7.7976 8.9792 7.6042C9.1726 7.41081 9.28125 7.1485 9.28125 6.875C9.28125 6.6015 9.1726 6.33919 8.9792 6.1458C8.78581 5.9524 8.5235 5.84375 8.25 5.84375C7.9765 5.84375 7.71419 5.9524 7.5208 6.1458C7.3274 6.33919 7.21875 6.6015 7.21875 6.875C7.21875 7.1485 7.3274 7.41081 7.5208 7.6042C7.71419 7.7976 7.9765 7.90625 8.25 7.90625ZM13.75 7.90625C14.0235 7.90625 14.2858 7.7976 14.4792 7.6042C14.6726 7.41081 14.7812 7.1485 14.7812 6.875C14.7812 6.6015 14.6726 6.33919 14.4792 6.1458C14.2858 5.9524 14.0235 5.84375 13.75 5.84375C13.4765 5.84375 13.2142 5.9524 13.0208 6.1458C12.8274 6.33919 12.7188 6.6015 12.7188 6.875C12.7188 7.1485 12.8274 7.41081 13.0208 7.6042C13.2142 7.7976 13.4765 7.90625 13.75 7.90625ZM6.69883 10.8324C6.41523 11.0859 6.39375 11.5199 6.64297 11.8035C7.71289 12.998 9.26836 13.75 11 13.75C12.7316 13.75 14.2871 12.998 15.357 11.8035C15.6105 11.5199 15.5848 11.0859 15.3012 10.8324C15.0176 10.5789 14.5836 10.6047 14.3301 10.8883C13.5137 11.7992 12.3234 12.375 11 12.375C9.67656 12.375 8.48633 11.7992 7.66992 10.884C7.41641 10.6004 6.98242 10.5789 6.69883 10.8281V10.8324Z"
                        fill="#EC6F7F"
                      ></path>
                    </g>
                    <defs>
                      <clipPath id="clip0_7313_6568"><rect width="36" height="36" fill="white"></rect></clipPath>
                    </defs>
                  </svg>
                  <div class="appoint">Book Appointment</div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-6">
              <div class="cta_content">
                <a href="https://wa.me/919238383839" class="cta-button text-decoration-none" target="_blank">
                  <svg viewBox="0 0 448 512" fill="none" xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                    <path
                      d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"
                      fill="#25D366"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <div class="appoint">Whatsapp Chat</div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-6">
              <div class="cta_content">
                <a href="mailto:contact@studywander.com" class="cta-button text-decoration-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#E3A008" viewBox="0 0 512 512">
                    <path
                      d="M0 128C0 92.65 28.65 64 64 64H448C483.3 64 512 92.65 512 128V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V128zM32 128V167.9L227.6 311.3C244.5 323.7 267.5 323.7 284.4 311.3L480 167.9V128C480 110.3 465.7 96 448 96H63.1C46.33 96 31.1 110.3 31.1 128H32zM32 207.6V384C32 401.7 46.33 416 64 416H448C465.7 416 480 401.7 480 384V207.6L303.3 337.1C275.1 357.8 236.9 357.8 208.7 337.1L32 207.6z"
                    ></path>
                  </svg>
                  <div class="appoint">Email Us</div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-6">
              <div class="cta_content">
                <a href="tel:+919238383839" class="cta-button text-decoration-none">
                  <svg width="36" height="36" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                      <path
                        d="M8.25 17.875C8.25 17.1145 7.63555 16.5 6.875 16.5H2.75C1.98945 16.5 1.375 15.8855 1.375 15.125V2.75C1.375 1.98945 1.98945 1.375 2.75 1.375H19.25C20.0105 1.375 20.625 1.98945 20.625 2.75V15.125C20.625 15.8855 20.0105 16.5 19.25 16.5H13.2902C12.9937 16.5 12.7016 16.5945 12.4652 16.775L8.25 19.9375V17.875ZM2.75 0C1.2332 0 0 1.2332 0 2.75V15.125C0 16.6418 1.2332 17.875 2.75 17.875H5.5H6.875V19.25V21.3125C6.875 21.5746 7.02109 21.8109 7.25313 21.927C7.48516 22.043 7.76445 22.0172 7.975 21.8625L13.2902 17.875H19.25C20.7668 17.875 22 16.6418 22 15.125V2.75C22 1.2332 20.7668 0 19.25 0H2.75ZM8.25 7.90625C8.5235 7.90625 8.78581 7.7976 8.9792 7.6042C9.1726 7.41081 9.28125 7.1485 9.28125 6.875C9.28125 6.6015 9.1726 6.33919 8.9792 6.1458C8.78581 5.9524 8.5235 5.84375 8.25 5.84375C7.9765 5.84375 7.71419 5.9524 7.5208 6.1458C7.3274 6.33919 7.21875 6.6015 7.21875 6.875C7.21875 7.1485 7.3274 7.41081 7.5208 7.6042C7.71419 7.7976 7.9765 7.90625 8.25 7.90625ZM13.75 7.90625C14.0235 7.90625 14.2858 7.7976 14.4792 7.6042C14.6726 7.41081 14.7812 7.1485 14.7812 6.875C14.7812 6.6015 14.6726 6.33919 14.4792 6.1458C14.2858 5.9524 14.0235 5.84375 13.75 5.84375C13.4765 5.84375 13.2142 5.9524 13.0208 6.1458C12.8274 6.33919 12.7188 6.6015 12.7188 6.875C12.7188 7.1485 12.8274 7.41081 13.0208 7.6042C13.2142 7.7976 13.4765 7.90625 13.75 7.90625ZM6.69883 10.8324C6.41523 11.0859 6.39375 11.5199 6.64297 11.8035C7.71289 12.998 9.26836 13.75 11 13.75C12.7316 13.75 14.2871 12.998 15.357 11.8035C15.6105 11.5199 15.5848 11.0859 15.3012 10.8324C15.0176 10.5789 14.5836 10.6047 14.3301 10.8883C13.5137 11.7992 12.3234 12.375 11 12.375C9.67656 12.375 8.48633 11.7992 7.66992 10.884C7.41641 10.6004 6.98242 10.5789 6.69883 10.8281V10.8324Z"
                        fill="#EC6F7F"
                      ></path>
                    </g>
                    <defs>
                      <clipPath id="clip0_7313_6568"><rect width="22" height="22" fill="white"></rect></clipPath>
                    </defs>
                  </svg>
                  <div class="appoint">Call Us</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include("master/footer.php") ?>

    <?php include("master/script.php") ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>

    <script>
      var slider = new Swiper(".accomm_hero .accomm_hero_main", {
        slidesPerView: 1,
        loop: true,
        loopedSlides: 4,
        noSwiping: true,
        keyboard: {
          enabled: true,
        },
         mousewheel: false,
        // mousewheel: {
         // thresholdDelta: 70,
    //    },
        noSwipingClass: "swiper-slide",
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });

      var thumbs = new Swiper(".accomm_hero .accomm_hero_thumbs", {
        slidesPerView: "auto",
        loop: true,
        spaceBetween: 10,
        centeredSlides: false,
        slideToClickedSlide: true,
      });

      slider.controller.control = thumbs;
      thumbs.controller.control = slider;
    </script>
  </body>
</html>
