<?php include "function.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jagannath Vidyalaya Matriculation Higher Secondary School</title>
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="Assets/Images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="Assets/Images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="Assets/Images/favicon-16x16.png">
<link rel="manifest" href="Assets/Images/site.webmanifest">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

</head>

<body>
    <?=template_header()?>
    <section class="hero-section">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Assets/Images/slider-1.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Assets/Images/slider-2.webp" class="d-block w-100" alt="...">
    </div>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>
    <section class="home-2 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6" data-aos="fade-right">
                    <img src="Assets/Images/about-img.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 col-lg-6" data-aos="fade-left">
                    <span class="badge"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFC0A"><path d="M281.5-281.5Q200-363 200-480t81.5-198.5Q363-760 480-760t198.5 81.5Q760-597 760-480t-81.5 198.5Q597-200 480-200t-198.5-81.5Z"/></svg>About Us</span>
                    <h2 class="section-title">Where Learning Inspires Success</h2>
                    <div id="content">
                        <p class="section-desc">At Jagannath Vidyalaya Matriculation Higher Secondary School, Thandalam, Thiruporur, we believe every child has the potential to achieve excellence. Our school provides a safe, inspiring, and supportive learning environment where students develop academic knowledge, strong values, creativity, confidence, and essential life skills to succeed in a rapidly changing world.</p>
                    <p class="section-desc">Since our establishment in 2022, Jagannath Vidyalaya has been committed to nurturing intellectual curiosity, critical thinking, and a lifelong passion for learning. Our well-structured academic programs inspire students to achieve excellence, build confidence, strengthen problem-solving skills, and prepare them for higher education and future career success.</p>
                    <a href="about.php" class="btn">More About Us</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="home-3 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card" data-aos="fade-right">
                        <img src="Assets/Images/our-mission.webp" alt="" class="img-fluid">
                        <div class="card-heading">
                            <h3 class="card-title">Our Mission</h3>
                            <p class="card-desc">To provide holistic education that fosters academic excellence, strong values, integrity, respect, inclusivity, and the skills and confidence needed to succeed in the 21st century.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card" data-aos="fade-down">
                        <img src="Assets/Images/vision.webp" alt="" class="img-fluid">
                        <div class="card-heading">
                            <h3 class="card-title">Our Vision</h3>
                            <p class="card-desc">To cultivate confident leaders who inspire positive change, embrace innovation, and create a lasting impact in their communities while contributing meaningfully to a better world.</p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card" data-aos="fade-left">
                        <img src="Assets/Images/core.webp" alt="" class="img-fluid">
                        <div class="card-heading">
                            <h3 class="card-title">Core Values</h3>
                            <p class="card-desc">We uphold integrity, excellence, discipline, diversity, creativity, collaboration, empathy, and continuous growth to shape responsible, confident, and compassionate future leaders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-4 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6" data-aos="fade-right">
                    <span class="badge"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFC0A"><path d="M281.5-281.5Q200-363 200-480t81.5-198.5Q363-760 480-760t198.5 81.5Q760-597 760-480t-81.5 198.5Q597-200 480-200t-198.5-81.5Z"/></svg>Academics</span>
                    <h2 class="section-title">Shaping Bright Academic Minds</h2>
                </div> 
                <div class="col-12 col-md-6 col-lg-6" data-aos="fade-left">
                    <p class="section-desc">At Jagannath Vidyalaya MHSS, we offer a structured and progressive curriculum designed to build a strong academic foundation while fostering intellectual and personal growth. Our course structure ensures conceptual clarity,critical thinking, and skill development at every level.</p>
                    <a href="academics.php" class="btn">Read More</a>
                </div>   
            </div>
            
            <div class="row mt-4" data-aos="fade-up">
                <div class="col-12 col-md-4 col-lg-4">
                    <img src="Assets/Images/academic.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="accordion-group">
                        <details class="acc-item">
                            <summary>
                            <span>Pre-Primary</span>
                            <span class="acc-icon">+</span>
                            </summary>
                            <div class="content-wrapper">
                            <div class="content-body">
                                <p>The early childhood curriculum is designed to provide a *play-based, interactive, and engaging learning environment that stimulates curiosity and creativity in young minds.</p>
                                <h5>Subject Offered</h5>
                                <ul class="icon-list">
                                    <li class="list">Languages: English, Tamil</li>
                                    <li class="list">Numeracy: Mathematics</li>
                                    <li class="list">Environmental Awareness: Environmental Studies (EVS)</li>
                                    <li class="list">Activity-Based Learning: Storytelling, Rhymes, Art & Craft, Physical Development Activities</li>
                                </ul>
                            </div>
                            </div>
                        </details>
                        <details class="acc-item">
                            <summary>
                            <span>Primary</span>
                            <span class="acc-icon">+</span>
                            </summary>
                            <div class="content-wrapper">
                            <div class="content-body">
                                <p>Our primary curriculum introduces students to core academic subjects while also emphasizing language development, values, and general knowledge.</p>
                                <h5>Subject Offered</h5>
                                <ul class="icon-list">
                                    <li class="list">Core Subjects: Tamil, English, Mathematics, Environmental Studies (EVS)</li>
                                    <li class="list">Non-Core Subjects: Computer Science (C.Sc), General Knowledge (GK), Value Education (VE), Hindi</li>
                                </ul>
                                <p>The curriculum focuses on interactive learning, hands-on activities, and foundational literacy and numeracy skills.</p>
                            </div>
                            </div>
                        </details>
                        <details class="acc-item">
                            <summary>
                            <span>Middle School</span>
                            <span class="acc-icon">+</span>
                            </summary>
                            <div class="content-wrapper">
                            <div class="content-body">
                                <p>Students are introduced to a broader and more detailed curriculum that encourages analytical thinking, problem-solving, and subject specialization.</p>
                                <h5>Subject Offered</h5>
                                <ul class="icon-list">
                                    <li class="list">Core Subjects: Tamil, English, Mathematics, Science, Social Science</li>
                                    <li class="list">Non-Core Subjects: Computer Science (C.Sc), General Knowledge (GK), Value Education (VE), Hindi</li>
                                </ul>
                                <p>The curriculum integrates experiential learning, project-based assignments, and technology-driven education.</p>
                            </div>
                            </div>
                        </details>
                        <details class="acc-item">
                            <summary>
                            <span>High School</span>
                            <span class="acc-icon">+</span>
                            </summary>
                            <div class="content-wrapper">
                            <div class="content-body">
                                <p>The curriculum at this level is designed to prepare students for board examinations while also focusing on skill development and career readiness.</p>
                                <h5>Subject Offered</h5>
                                <ul class="icon-list">
                                    <li class="list">Core Subjects: Tamil, English, Mathematics, Science, Social Science</li>
                                    <li class="list">Non-Core Subject: Value Education (VE)</li>
                                </ul>
                                <p>Special focus is given to exam preparation, conceptual clarity, and application-based learning.</p>
                            </div>
                            </div>
                        </details>
                        <details class="acc-item">
                            <summary>
                            <span>Higher Secondary</span>
                            <span class="acc-icon">+</span>
                            </summary>
                            <div class="content-wrapper">
                            <div class="content-body">
                                <p>Students choose Science or Commerce streams based on their interests and career goals, building a strong foundation for higher education and success.</p>
                                <h5>Subject Offered</h5>
                                <ul class="icon-list">
                                    <li class="list">Languages Options (First Language): Tamil</li>
                                    <li class="list">Streams: Science, Commerce</li>
                                    
                                </ul>
                            </div>
                            </div>
                        </details>
                       
                        </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="home-5 py-5">
        <div class="container">
            <div class="heading-center">
                <span class="badge" data-aos="fade-up"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFC0A"><path d="M281.5-281.5Q200-363 200-480t81.5-198.5Q363-760 480-760t198.5 81.5Q760-597 760-480t-81.5 198.5Q597-200 480-200t-198.5-81.5Z"/></svg>Facilities</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">Facilities That Inspire Growth</h2>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="fac-card" data-aos="fade-right" data-aos-delay="0">
                        <img src="Assets/Images/smart-classroom.webp" alt="" class="img-fluid">
                        <div class="fac-heading">
                            <h4 class="text-white">Smart Classroom</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="fac-card" data-aos="fade-down" data-aos-delay="100">
                        <img src="Assets/Images/bio-lab.webp" alt="" class="img-fluid">
                        <div class="fac-heading">
                            <h4 class="text-white">Science Lab</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="fac-card"data-aos="fade-left" data-aos-delay="150">
                        <img src="Assets\Images\library.webp" alt="" class="img-fluid">
                        <div class="fac-heading">
                            <h4 class="text-white">Library</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row fac-2">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="fac-card" data-aos="fade-right" data-aos-delay="0">
                        <img src="Assets\Images\computer-lab.webp" alt="" class="img-fluid">
                        <div class="fac-heading">
                            <h4 class="text-white">Computer Lab</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="fac-card" data-aos="fade-up" data-aos-delay="100">
                        <img src="Assets\Images\transport.webp" alt="" class="img-fluid">
                        <div class="fac-heading">
                            <h4 class="text-white">Transportation</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="fac-card" data-aos="fade-left" data-aos-delay="150">
                        <img src="Assets\Images\sports.webp" alt="" class="img-fluid">
                        <div class="fac-heading">
                            <h4 class="text-white">Sports</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <section class="admission-announcement">
    <div class="announcement-track">
        <div class="announcement-content">
            <span class="icon">
                <i class="bi bi-megaphone-fill"></i>
            </span>

            <span>
                🎓 Admissions Open for the Academic Year 2026–2027 | Pre-KG to Grade XII
            </span>

            <a href="admission-form.php" class="apply-btn">
                Apply Now
            </a>

            <!-- Duplicate for seamless loop -->
            <span class="icon">
                <i class="bi bi-megaphone-fill"></i>
            </span>

            <span>
                🎓 Admissions Open for the Academic Year 2026–2027 | Pre-KG to Grade XII
            </span>

            <a href="admission-form.php" class="apply-btn">
                Apply Now
            </a>
        </div>
    </div>
</section>
    <section class="home-6 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6" data-aos="fade-right">
                    <span class="badge"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFC0A"><path d="M281.5-281.5Q200-363 200-480t81.5-198.5Q363-760 480-760t198.5 81.5Q760-597 760-480t-81.5 198.5Q597-200 480-200t-198.5-81.5Z"/></svg>Why Choose Us</span>
                    <h2 class="section-title">Why Families Choose Our School</h2>
                    <div class="icon-list mt-3">
                        <div class="icon-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#010f51"><path d="M840-120v-640H120v320H40v-320q0-33 23.5-56.5T120-840h720q33 0 56.5 23.5T920-760v560q0 33-23.5 56.5T840-120ZM247-447q-47-47-47-113t47-113q47-47 113-47t113 47q47 47 47 113t-47 113q-47 47-113 47t-113-47ZM40-80v-112q0-34 17.5-62.5T104-298q62-31 126-46.5T360-360q66 0 130 15.5T616-298q29 15 46.5 43.5T680-192v112H40Z"/></svg>
                        </div>
                        <div class="content">
                            <h4>Dedicated Faculty</h4>
                            <p class="section-desc">Our experienced and passionate teachers are committed to guiding students through every step of their academic journey.</p>
                        </div>
                    </div>
                    <div class="icon-list mt-3">
                        <div class="icon-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#010f51"><path d="M80-120v-720h400v160h400v560H80Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h320v-400H480v80h80v80h-80v80h80v80h-80v80Zm160-240v-80h80v80h-80Zm0 160v-80h80v80h-80Z"/></svg>
                        </div>
                        <div class="content">
                            <h4>State-of-the-Art Facilities</h4>
                            <p class="section-desc">We believe that the best learning takes place in an environment that encourages creativity, exploration, and collaboration.</p>
                        </div>
                    </div>
                    <div class="icon-list mt-3">
                        <div class="icon-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#010f51"><path d="m387-412 35-114-92-74h114l36-112 36 112h114l-93 74 35 114-92-71-93 71ZM240-40v-309q-38-42-59-96t-21-115q0-134 93-227t227-93q134 0 227 93t93 227q0 61-21 115t-59 96v309l-240-80-240 80Zm410-350q70-70 70-170t-70-170q-70-70-170-70t-170 70q-70 70-70 170t70 170q70 70 170 70t170-70Z"/></svg>
                        </div>
                        <div class="content">
                            <h4>Holistic Development</h4>
                            <p class="section-desc">We nurture academic excellence, leadership, creativity, community service, and life skills for every student's success.</p>
                        </div>
                    </div>
                    <a href="about.php" class="btn">Read More</a>
                </div>
                <div class="col-12 col-md-6 col-lg-6" data-aos="fade-left">
                    <img src="Assets\Images\why-choose.webp" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <?=template_footer()?>
    
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="Assets/JS/script.js"></script>
</body>
</html>