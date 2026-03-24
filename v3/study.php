<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>USA - Study Wander</title>

    <!-- css links -->
    <?php include("master/style.php") ?>

    <link rel="stylesheet" href="css/study.css" />
</head>

<body>
    <?php include("master/header.php") ?>

    <main>
        <section class="pb-0 study-breadcrumb-con">
            <div class="container h-100">
                <div class="row align-items-center h-100 gy-4">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h2 class="position-relative d-inline-block">
                            Study In <span class="down"> America </span>
                            <i class="ph ph-graduation-cap"></i>
                        </h2>
                        <p>Explore list of universities in USA and everything you need to know about studying in the USA.</p>
                        <div class="d-flex justify-content-lg-start justify-content-center">
                            <button class="btn-one explore-btn">Explore Now</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center">
                            <img src="img/flag/usaFlag.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sticky-relative-wrapper">
            <div class="university-info-sticky-wrapper">
                <div class="container">
                    <div class="university-info-sticky">
                        <a href="#">Overview</a>
                        <a href="#">Universities</a>
                        <a href="#">Why Choose us</a>
                        <a href="#">FAQ</a>
                    </div>
                </div>
            </div>
            <!-- breadcrumb end -->

            <!-- why study start -->
            <section id="choose">
                <div class="container">
                    <h2>Why <span class="down me-2"> Study </span> in the USA?</h2>
                    <p class="col-lg-8">Studying in the USA offers access to world-class education, cutting-edge research facilities, and a diverse, multicultural environment and many more!</p>

                    <div class="mt-4">
                        <div class="why-study-con row gy-5">
                            <div class="col-lg-4">
                                <div class="why-study-card one">
                                    <div class="d-flex align-items-center gap-3">
                                        <div>
                                            <div class="icon-con"><i class="ph ph-student"></i></div>
                                        </div>
                                        <h4 class="none">World-Class Education and Research</h4>
                                    </div>
                                    <p class="mt-3">
                                        It's gives you access to some of the best educational institutions globally. With cutting-edge research facilities, highly qualified professors, and a strong focus on innovation,
                                        students are provided with an environment that nurtures academic excellence
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="why-study-card two">
                                    <div class="d-flex align-items-center gap-3">
                                        <div>
                                            <div class="icon-con"><i class="ph ph-handshake"></i></div>
                                        </div>
                                        <h4 class="none">Diverse and Multicultural Environment</h4>
                                    </div>
                                    <p class="mt-3">USA is home to students and faculty from all over the world, making it a melting pot of cultures & ideas. This diversity enriches the learning experience by broadening
                                        perspectives, promoting intercultural understanding.</p>
                                </div>
                            </div>

                            <!-- <div class="col-lg-3">
                            <div class="why-study-card three">
                                <div class="d-flex align-items-center gap-3">
                                    <div>
                                        <div class="icon-con"><i class="ph ph-network"></i></div>
                                    </div>
                                    <h4 class="none">Opportunities for Global Networking
                                    </h4>
                                </div>
                                <p class="mt-3">In the USA, you’ll have the chance to connect with a global network of professionals, academics, and peers. Whether through internships, conferences, or alumni networks, these connections can open doors to international job opportunities and collaborative projects.</p>
                            </div>
                        </div> -->

                            <div class="col-lg-4">
                                <div class="why-study-card four">
                                    <div class="d-flex align-items-center gap-3">
                                        <div>
                                            <div class="icon-con"><i class="ph ph-read-cv-logo"></i></div>
                                        </div>
                                        <h4 class="none">Enhanced Career Prospects</h4>
                                    </div>
                                    <p class="mt-3">A U.S. degree is highly regarded by employers around the world. Graduates are often seen as well-prepared for the challenges of the modern workplace, with skills in
                                        leadership, problem-solving, and adaptability.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- why study end -->

            <!-- universities start -->
            <section id="universities">
                <!-- university form -->
                <div class="modal fade" id="university-form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content" style="border: none; background: transparent">
                            <div class="university-form-con">
                                <div class="university-form-con-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="ph-bold ph-x"></i>
                                </div>
                                <div class="d-md-block d-none pe-1">
                                    <img src="img/study/form-img.jpg" class="img-fluid w-100 h-100" style="object-fit: cover" alt="" />
                                </div>
                                <div>
                                    <form action="">
                                        <h3 class="pb-4"><span class="down down-z">Study</span> in USA</h3>
                                        <div class="form-input-con">I am <input type="text" placeholder="Name" /> wanted to</div>
                                        <div class="form-input-con">Study <input type="text" placeholder="Location" value="USA" /></div>
                                        <div class="form-input-con">My contact number <input type="text" placeholder="Your Number" /></div>
                                        <div class="form-input-con">and Email is <input type="text" placeholder="Email" /></div>

                                        <button class="btn-one">Submit <i class="ph ph-arrow-up-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- universities list -->
                <div class="bg-gray">
                    <div class="container">
                        <div class="title-con">
                            <h2>Top <span class="down">Universities</span></h2>
                        </div>
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="top-universities-card">
                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                        <div>
                                            <h4 class="none">Conventry University</h4>
                                            <div class="d-flex align-items-start mt-1">
                                                <i class="ph-bold ph-map-pin me-2 location-icon"></i>
                                                <div class="location">Coventry, CV1 5FB, UK.</div>
                                            </div>
                                        </div>

                                        <img src="img/university/university-10.png" alt="" />
                                    </div>
                                    <div class="line"></div>

                                    <div class="top-universities-info-con">
                                        <div class="top-universities-info">
                                            <div><i class="ph ph-globe"></i></div>
                                            <div>
                                                <h5>Global Rank</h5>
                                                <p>801</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-hand-palm"></i></div>
                                            <div>
                                                <h5>Acceptance Rate</h5>
                                                <p>40%</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-graduation-cap"></i></div>
                                            <div>
                                                <h5>Popular For</h5>
                                                <p>Automotive Engineering</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-exam"></i></div>
                                            <div>
                                                <h5>Exams Accepted</h5>
                                                <p>IELTS , TOEFL , +4</p>
                                            </div>
                                        </div>

                                        <button data-bs-toggle="modal" data-bs-target="#university-form" class="btn">
                                            Apply Now
                                            <div>
                                                <i class="ph ph-arrow-up-right"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="top-universities-card">
                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                        <div>
                                            <h4 class="none">University of York</h4>
                                            <div class="d-flex align-items-start mt-1">
                                                <i class="ph-bold ph-map-pin me-2 location-icon"></i>
                                                <div class="location">York, North Yorkshire, England</div>
                                            </div>
                                        </div>

                                        <img src="img/university/university-13.png" alt="" />
                                    </div>
                                    <div class="line"></div>

                                    <div class="top-universities-info-con">
                                        <div class="top-universities-info">
                                            <div><i class="ph ph-globe"></i></div>
                                            <div>
                                                <h5>Global Rank</h5>
                                                <p>18</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-hand-palm"></i></div>
                                            <div>
                                                <h5>Acceptance Rate</h5>
                                                <p>50%</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-graduation-cap"></i></div>
                                            <div>
                                                <h5>Popular For</h5>
                                                <p>Environmental Science</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-exam"></i></div>
                                            <div>
                                                <h5>Exams Accepted</h5>
                                                <p>IELTS , TOEFL , +4</p>
                                            </div>
                                        </div>

                                        <button data-bs-toggle="modal" data-bs-target="#university-form" class="btn">
                                            Apply Now
                                            <div>
                                                <i class="ph ph-arrow-up-right"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="top-universities-card">
                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                        <div>
                                            <h4 class="none">University of Portsmouth</h4>
                                            <div class="d-flex align-items-start mt-1">
                                                <i class="ph-bold ph-map-pin me-2 location-icon"></i>
                                                <div class="location">College Park, MD, United States</div>
                                            </div>
                                        </div>

                                        <img src="img/university/university-15.png" alt="" />
                                    </div>
                                    <div class="line"></div>

                                    <div class="top-universities-info-con">
                                        <div class="top-universities-info">
                                            <div><i class="ph ph-globe"></i></div>
                                            <div>
                                                <h5>Global Rank</h5>
                                                <p>701</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-hand-palm"></i></div>
                                            <div>
                                                <h5>Acceptance Rate</h5>
                                                <p>50%</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-graduation-cap"></i></div>
                                            <div>
                                                <h5>Popular For</h5>
                                                <p>Business and Management</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-exam"></i></div>
                                            <div>
                                                <h5>Exams Accepted</h5>
                                                <p>IELTS , TOEFL , +4</p>
                                            </div>
                                        </div>

                                        <button data-bs-toggle="modal" data-bs-target="#university-form" class="btn">
                                            Apply Now
                                            <div>
                                                <i class="ph ph-arrow-up-right"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="top-universities-card">
                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                        <div>
                                            <h4 class="none">University of Waikato</h4>
                                            <div class="d-flex align-items-start mt-1">
                                                <i class="ph-bold ph-map-pin me-2 location-icon"></i>
                                                <div class="location">Hamilton, New Zealand</div>
                                            </div>
                                        </div>

                                        <img src="img/university/university-25.png" alt="" />
                                    </div>
                                    <div class="line"></div>

                                    <div class="top-universities-info-con">
                                        <div class="top-universities-info">
                                            <div><i class="ph ph-globe"></i></div>
                                            <div>
                                                <h5>Global Rank</h5>
                                                <p>300</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-hand-palm"></i></div>
                                            <div>
                                                <h5>Acceptance Rate</h5>
                                                <p>13%</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-graduation-cap"></i></div>
                                            <div>
                                                <h5>Popular For</h5>
                                                <p>Sciences & Engineering</p>
                                            </div>
                                        </div>

                                        <div class="top-universities-info">
                                            <div><i class="ph ph-exam"></i></div>
                                            <div>
                                                <h5>Exams Accepted</h5>
                                                <p>IELTS , TOEFL , +4</p>
                                            </div>
                                        </div>

                                        <button data-bs-toggle="modal" data-bs-target="#university-form" class="btn">
                                            Apply Now
                                            <div>
                                                <i class="ph ph-arrow-up-right"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include("master/footer.php") ?>

    <?php include("master/script.php") ?>

    <script>
        $(".explore-btn").click(() => {
            window.scrollTo(0, 400);
        });
    </script>
</body>

</html>