<?php include "function.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities - Jagannath Vidyalaya Matriculation Higher Secondary School</title>
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
    <div class="page-banner" id="facilities">
        <h1 class="page-title">Facilities</h1>
    </div>
    <section class="facilities-1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-right" data-aos-duration="800">
                    <div class="box b1">
                        <div class="image">
                            <img src="Assets/Images/smart-classroom.webp" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <h4 class="section-title">Smart Classroom</h4>
                            <p class="section-desc">Smart classrooms use modern technology to make learning interactive, engaging, effective, and easy to understand.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="800">
                    <div class="box b2">
                        <div class="image">
                            <img src="Assets/Images/bio-lab.webp" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <h4 class="section-title">Science Lab</h4>
                            <p class="section-desc">Science laboratories provide practical learning through safe experiments that build scientific and analytical skills.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-left" data-aos-duration="800">
                    <div class="box b3">
                        <div class="image">
                            <img src="Assets/Images/library.webp" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <h4 class="section-title">Library</h4>
                            <p class="section-desc">Our library offers books and learning resources that encourage reading, research, knowledge, and lifelong learning.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-right" data-aos-duration="800">
                    <div class="box b3">
                        <div class="image">
                            <img src="Assets\Images\computer-lab.webp" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <h4 class="section-title">Computer Lab</h4>
                            <p class="section-desc">Our computer lab equips students with digital skills through hands-on learning, programming, and modern technology.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="800">
                    <div class="box b1">
                        <div class="image">
                            <img src="Assets\Images\transport.webp" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <h4 class="section-title">Transportation</h4>
                            <p class="section-desc">Our safe and reliable school transport ensures comfortable, punctual, and secure travel for every student.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-left" data-aos-duration="800">
                    <div class="box b2">
                        <div class="image">
                            <img src="Assets\Images\sports.webp" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <h4 class="section-title">Sports</h4>
                            <p class="section-desc">Indoor and outdoor sports facilities promote fitness, teamwork, discipline, leadership, and sportsmanship.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?=template_footer()?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="Assets/JS/script.js"></script>
</body>

</html>