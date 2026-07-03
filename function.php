<?php
function template_header(){
    echo <<< EOT

    <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-9 col-lg-9">
                        <ul class="icon-list">
                            <li class="list"><i class="bi bi-telephone-fill"></i><a href="tel:+919176885107">+91
                                    9176885107</a></li>
                            <li class="list"><i class="bi bi-envelope-fill"></i><a
                                    href="mailto:jvmst459@gmail.com">jvmst459@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3" id="head-btn">
                        <a href="admission-form.php" class="btn">Apply Now</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="main-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <img src="Assets/Images/logo.webp" alt="" class="img-fluid">
                        </a>
                        <button class="navbar-toggler" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown"
                            aria-expanded="false"
                            aria-label="Toggle navigation">

                            <i class="bi bi-list" id="menuIcon"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        About
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                        <li><a class="dropdown-item" href="principal-message.php">Principal's Message</a></li>
                                    </ul>
                                </li>
                               <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Academics
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="academics-overview.php">Academics Overview</a></li>
                                        <li><a class="dropdown-item" href="curriculum.php">Curriculum</a></li>
                                        <li><a class="dropdown-item" href="extra-curricular.php">Extra - Curricular Activities</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="facilities.php">Facilities</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Admission
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Career</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    EOT;
}

function template_footer(){
    echo <<< EOT
     <footer>
        <section class="home-7">
            <div class="row">
                <div class="col-12 col-md-2 col-lg-2">
                    <img src="Assets\Images\gallery-h-1.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <a href="gallery.php" class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#010f51">
                                <path d="M440-120v-320H120v-80h320v-320h80v320h320v80H520v320h-80Z" />
                            </svg></a>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-2">
                    <img src="Assets\Images\gallery-h-2.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <a href="gallery.php" class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#010f51">
                                <path d="M440-120v-320H120v-80h320v-320h80v320h320v80H520v320h-80Z" />
                            </svg></a>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-2">
                    <img src="Assets\Images\gallery-h-3.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <a href="gallery.php" class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#010f51">
                                <path d="M440-120v-320H120v-80h320v-320h80v320h320v80H520v320h-80Z" />
                            </svg></a>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-2">
                    <img src="Assets\Images\gallery-h-4.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <a href="gallery.php" class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#010f51">
                                <path d="M440-120v-320H120v-80h320v-320h80v320h320v80H520v320h-80Z" />
                            </svg></a>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-2">
                    <img src="Assets\Images\gallery-h-5.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <a href="gallery.php" class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#010f51">
                                <path d="M440-120v-320H120v-80h320v-320h80v320h320v80H520v320h-80Z" />
                            </svg></a>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-2">
                    <img src="Assets\Images\gallery-h-6.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <a href="gallery.php" class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#010f51">
                                <path d="M440-120v-320H120v-80h320v-320h80v320h320v80H520v320h-80Z" />
                            </svg></a>
                    </div>
                </div>

            </div>
        </section>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <img src="Assets/Images/logo.webp" alt="" class="img-fluid">
                        <section class="social-media mt-5">
                            <h4 class="footer-heading">Follow us on</h4>
                            <div class="social-icons">
                                <a href="#youtube" class="icons"><i class="bi bi-youtube youtube-icon"></i></a>
                                <a href="#facebook" class="icons"><i class="bi bi-facebook facebook-icon"></i></a>
                                <a href="#instagram" class="icons"><i class="bi bi-instagram instagram-icon"></i></a>
                                <a href="#whatsapp" class="icons"><i class="bi bi-whatsapp whatsapp-icon"></i></a>
                            </div>
                        </section>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <h4 class="footer-heading">Quick Links</h4>
                        <ul class="icon-list">
                            <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#E0E440">
                                    <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                                </svg><a href="index.php">Home</a></li>
                            <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#E0E440">
                                    <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                                </svg><a href="about.php">About</a></li>
                            <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#E0E440">
                                    <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                                </svg><a href="academics.php">Academics</a></li>
                            <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#E0E440">
                                    <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                                </svg><a href="facilities.php">Facilities</a></li>
                            <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#E0E440">
                                    <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                                </svg><a href="gallery.php">Gallery</a></li>
                            <li class="list"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#E0E440">
                                    <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                                </svg><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="location">
                            <h4 class="footer-heading">Our Location</h4>
                            <p class="text-white">Thandalam, Near Thiruporur, Off-OMR, Chennai - 603103</p>
                        </div>
                        <div class="getintouch mt-5">
                            <h4 class="footer-heading">Get in touch</h4>
                            <ul class="contact">
                                <li><i class="bi bi-envelope-fill"></i><a
                                        href="mailto:jvmst459@gmail.com">jvmst459@gmail.com</a></li>
                                <li><i class="bi bi-telephone-fill"></i><a href="tel:+919176885107">+91 9176885107</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.658755065776!2d80.22079947479139!3d12.800648418603812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52508488d716e3%3A0x61917a2ed418e38e!2sJAGANNATH%20VIDYALAYA!5e0!3m2!1sen!2sin!4v1782819184339!5m2!1sen!2sin"
                            width="250" height="250" style="border:0; border-radius: 20px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Copyrights 2026 <br><a href="index.php">Jagannath Vidyalaya Matriculation Higher Secondary School</a><br>,All rights reserved.
                Reserved.</p>
        </div>

    </footer>
    EOT;
}
