<?php include "function.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Procedure - Jagannath Vidyalaya Matriculation Higher Secondary School</title>
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
    <div class="page-banner" id="admission">
        <h1 class="page-title">Admission Procedure</h1>
    </div>
    <section class="admission-1 py-5">
        <div class="container">
            <div class="row section">
                <div class="col-12 col-md-6 col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">Your Path to Admission</h2>
                    <p class="section-desc">Every learner begins with a story. Ours is an unhurried, thoughtful admissions journey — designed to understand your child, welcome your family, and open the doors to a school where curiosity, character and creativity grow in equal measure.</p>
                    <div class="row">
                        <div class="col-4 col-md-4 col-lg-4">
                            <h4>1:12</h4>
                            <p class="label">Mentor Ratio</p>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <h4>40+</h4>
                            <p class="label">Enrichment Programs</p>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <h4>98%</h4>
                            <p class="label">Board Distinction</p>
                        </div>
                    </div>
                    <a href="admission-form.php" class="btn">Start Apply</a>
                </div>
                <div class="col-12 col-md-6 col-lg-6" data-aos="fade-left">
                    <img src="Assets/Images/admission-overview.webp" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="admission-2-new py-5">
        <div class="container">
            <div class="heading-center">
                <h2 class="section-title">Admission Essentials</h2>
            </div>
            
            <div class="content">
                <div class="icon-box" data-aos="fade-up">
                    <div class="row">
                        <div class="col-12 col-md-1 col-lg-1">
                                <div class="icon-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#232060"><path d="m344-60-76-128-144-32 14-148-98-112 98-112-14-148 144-32 76-128 136 58 136-58 76 128 144 32-14 148 98 112-98 112 14 148-144 32-76 128-136-58-136 58Zm94-278 226-226-56-58-170 170-86-84-56 56 142 142Z"/></svg>
                                </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <h4 class="section-title">Eligibility</h4>
                            <p class="section-desc">Admissions are based on age and academic eligibility as per school and State Board norms. Required documents must be submitted during admission.</p>
                        </div>
                    </div>
                </div>
                <div class="icon-box" data-aos="fade-down">
                    <div class="row">
                        <div class="col-12 col-md-1 col-lg-1">
                                <div class="icon-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#232060"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg>
                                </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <h4 class="section-title">School Timing</h4>
                            <p class="section-desc">The school follows a structured daily schedule. Parents receive timings each year and are encouraged to ensure regular attendance and punctuality.</p>
                        </div>
                    </div>
                </div>
                <div class="icon-box" data-aos="fade-up">
                    <div class="row">
                        <div class="col-12 col-md-1 col-lg-1">
                                <div class="icon-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#232060"><path d="M120-160q-33 0-56.5-23.5T40-240v-440h80v440h680v80H120Zm160-160q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80q0-33-23.5-56.5T280-480v80h80Zm400 0h80v-80q-33 0-56.5 23.5T760-400Zm-200-40q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35ZM280-640q33 0 56.5-23.5T360-720h-80v80Zm560 0v-80h-80q0 33 23.5 56.5T840-640Z"/></svg>
                                </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <h4 class="section-title">Fees Information</h4>
                            <p class="section-desc">The school offers quality education at an affordable fee. Parents can obtain fee details from the school office and should pay fees within the schedule.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="admission-3 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">A short, thoughtful checklist.</h2>
                    <p class="section-desc text-white">Please share digital copies through the admissions portal. Originals are verified in person, only after your child has been offered a seat. </p>
                    <div class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280 320-200v-80L480-520 160-720v80l320 200Z"/></svg><a href="mailto:jvmst459@gmail.com">jvmst459@gmail.com</a></div>
                    
                </div>
                <div class="col-12 col-md-6 col-lg-6" data-aos="fade-left">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <ul class="icon-list">
                                <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z"/></svg>Birth Certificate</li>
                                <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z"/></svg>Transfer Certificate (if applicable)</li>
                                <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z"/></svg>Previous Academic Report Card</li>
                                <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z"/></svg>Passport Size Photographs</li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <ul class="icon-list">
                                <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z"/></svg>Aadhaar Card (Student & Parent)</li>
                                <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z"/></svg>Community Certificate (if applicable)</li>
                                <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z"/></svg>Address Proof</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="admission-2 py-5 home-4" data-aos="fade-up">
        <div class="container">
            <div class="heading-center">
                <h2 class="section-title">Common Admission Queries</h2>

                <div class="accordion-group mt-5">
                    <details class="acc-item">
                        <summary>
                            <span>Who can apply for admission?</span>
                            <span class="acc-icon">+</span>
                        </summary>
                        <div class="content-wrapper">
                            <div class="content-body">
                                <p>Students seeking admission from Pre-KG to Higher Secondary can apply, subject to
                                    eligibility.</p>
                            </div>
                        </div>
                    </details>
                    <details class="acc-item">
                        <summary>
                            <span>Is there an entrance test?</span>
                            <span class="acc-icon">+</span>
                        </summary>
                        <div class="content-wrapper">
                            <div class="content-body">
                                <p>An interaction or assessment may be conducted for selected classes.</p>
                            </div>
                        </div>
                    </details>
                    <details class="acc-item">
                        <summary>
                            <span>Can admissions be made during the academic year?</span>
                            <span class="acc-icon">+</span>
                        </summary>
                        <div class="content-wrapper">
                            <div class="content-body">
                                <p>Yes, subject to seat availability and school norms.</p>
                            </div>
                        </div>
                    </details>
                    <details class="acc-item">
                        <summary>
                            <span>How can I obtain the admission form?</span>
                            <span class="acc-icon">+</span>
                        </summary>
                        <div class="content-wrapper">
                            <div class="content-body">
                                <p>The application form can be collected from the school office.</p>
                            </div>
                        </div>
                    </details>
                    <details class="acc-item">
                        <summary>
                            <span>Where can I get more information?</span>
                            <span class="acc-icon">+</span>
                        </summary>
                        <div class="content-wrapper">
                            <div class="content-body">
                                <p>Parents may visit the school campus or contact the admission office for further
                                    assistance.</p>
                            </div>
                        </div>
                    </details>


                </div>
            </div>
        </div>
    </section>
    



    <?=template_footer()?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="Assets/JS/script.js"></script>
</body>

</html>