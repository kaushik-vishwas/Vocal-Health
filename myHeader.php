<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Vocal Health</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        </link>


        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">
    </head>

    <style>

            /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap'); */

    .modelInp {
        caret-color: red;
       
    }
    .modal-content{
        background: none;
        border: none;
    }
    
    .modelBody {
        margin: 0;
        /* width: 100vw; */
        /* height: 100vh; */
        /* background: #ecf0f3; */
        /* background: red; */
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        place-items: center;
        overflow: hidden;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .modelContainer {
        position: relative;
        width: 100%;
        /* height: 500px; */
        border-radius: 20px;
        padding: 40px;
        box-sizing: border-box;
        background: #ecf0f3;
        /* box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white; */
        box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
    }

    .modelBrand-logo {
        height: 100px;
        width: 100px;
        background: url("https://img.icons8.com/color/100/000000/twitter--v2.png");
        margin: auto;
        border-radius: 50%;
        box-sizing: border-box;
        box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
    }

    .modelBrand-title {
        margin-top: 10px;
        font-weight: 900;
        font-size: 1.8rem;
        color: #1DA1F2;
        letter-spacing: 1px;
    }

    .modelInputs {
        text-align: left;
        margin-top: 30px;
    }

    .modelLab,
    .modelInp,
    .modelBtn {
        display: block;
        width: 100%;
        padding: 0;
        border: none;
        outline: none;
        box-sizing: border-box;
    }

    .modelLab {
        margin-bottom: 4px;
    }

    .modelLab:nth-of-type(2) {
        margin-top: 12px;
    }

    .modelInp::placeholder {
        color: gray;
    }

    .modelInp {
        margin-top: 20px;
        background: #ecf0f3;
        padding: 10px;
        padding-left: 20px;
        height: 50px;
        font-size: 14px;
        border-radius: 50px;
        box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
    }
    .modelInp select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: transparent;
    border: none;
    outline: none;
    padding: 5px;
    /* width: 100%;
    
    padding-left: 20px;
    height: 50px;
    font-size: 14px;
    border-radius: 50px;
    box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white; */
}

    .modelBtn {
        color: white;
        margin-top: 20px;
        background: #1DA1F2;
        height: 40px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: 900;
        box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
        transition: 0.5s;
    }

    .modelBtn:hover {
        box-shadow: none;
    }

    /* a {
        position: absolute;
        font-size: 8px;
        bottom: 4px;
        right: 4px;
        text-decoration: none;
        color: black;
        background: yellow;
        border-radius: 10px;
        padding: 2px;
    }

    h1 {
        position: absolute;
        top: 0;
        left: 0;
    } */

        

















marquee{ 
   /* font-size: 5em;  */
   font-family: serif; 
   /* color:#008000;  */
   /* text-align: center;  */
   animation: animate 1.5s linear infinite; 
 }  
  
 @keyframes animate{ 
   0%{ 
    color: orange;
     
   } 
   50%{ 
     color: #008374;
     
   } 
   75%{ 
     color: rgb(2, 100, 100);
     
   } 
   100%{ 
    color: #0f5d96;
   } 
 } 

     .wp {
  position: fixed;
  bottom: 70px;
  right: 25px;

}
     .fb {
  position: fixed;
  bottom: 100px;
  right: 25px;

}
     .insta {
  position: fixed;
  bottom: 130px;
  right: 25px;

}
     .ld {
  position: fixed;
  bottom: 160px;
  right: 25px;

}
     .tw {
  position: fixed;
  bottom: 190px;
  right: 25px;

}
     .pint {
  position: fixed;
  bottom: 220px;
  right: 25px;

}

    .hero .iconBox1 {
        padding: 90px 50px;

    }

    body {

        font-size: 20px;
    }

    .properAlign {
        display: inline-block;
        width: 100%;
        text-align: justify;
    }


    #background-video {
        position: relative;
        width: 100%;
        height: 100vh;
        /* Adjust the height as needed */
        object-fit: cover;
        z-index: 1;
    }


    .button-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .button {
        margin: 0 10px;
    }

    #text-overlay {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
        text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8);
        font-size: 4vw;
        /* You can adjust the font size based on your preference */
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        z-index: 3;
    }

    @media screen and (max-width: 600px) {
        #text-overlay {
            font-size: 5vw;
            /* Adjust the font size for smaller screens */
        }

        #mainLine {
            font-size: 2.5vw;
            /* Adjust the font size for smaller screens */
        }

    }

    #button-container {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 20px;
        z-index: 2;
        /* Higher z-index for the buttons to overlay on the video */
    }



    .cta-btn1 {
        font-family: var(--font-primary);
        font-weight: 500;
        font-size: 16px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 12px 48px;
        border-radius: 50px;
        transition: 0.5s;
        margin: 10px;
        border: 2px solid #fff;
        color: #fff;
        text-decoration: none;
        /* Assuming it's a link */
        text-align: center;
        /* Optional: Center text within the button */
        cursor: pointer;
    }

    .cta-btn1:hover {
        background: var(--color-primary);
        border: 2px solid var(--color-primary);
    }

    @media screen and (max-width: 600px) {
        .cta-btn1 {
            font-size: 10px;
            /* Adjust font size for smaller screens */
            padding: 5px 32px;
            /* Adjust padding for smaller buttons */
        }
    }
    </style>

    <body>

        <!-- ======= Header ======= -->
        <section id="topbar" class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <!-- <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@vocal.org.in">info@vocal.org.in</a></i> -->
                    <!-- <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 9205577351</span></i> -->
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="https://twitter.com/rural_health_" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=61555428059909" class="facebook"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/vocal.health?igsh=MzRlODBiNWFlZA==" class="instagram"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/socialvhra/?profileId=ACoAAD2Ik0MBY1C5_rFP8zAxH_oq4rbjpOUTHzo"
                        class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                    <a href="https://in.pinterest.com/vocalhealth/" class="linkedin"><i
                            class="bi bi-pinterest"></i></i></a>
                </div>
            </div>
        </section><!-- End Top Bar -->

        <header id="header" class="header d-flex align-items-center">

            <div class="container-fluid containe-xl d-flex align-items-center justify-content-between">
                <a href="index" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="assets/img/logo.png" width="" alt="VHRA Logo">
                    <h4 style="color: rgb(12, 232, 232);" id="brandName">Vocal Health and Research Association
                        <span></span>
                    </h4>
                </a>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="index">Home</a></li>
                        <li class="dropdown"><a href=""><span>About Us</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="about">Our Organization</a></li>
                                <li><a href="team">Our Team</a></li>
                                <li><a href="doctor">VHRA Panel</a></li>
                                <li><a href="gallary">Photo Gallary</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href=""><span>Services</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="service">Healhcare Delivery</a></li>
                                <li><a href="healthcamp">Health Camps</a></li>
                                <li><a href="awareness">Awareness Program</a></li>
                                <!-- <li><a href="">Child Education</a></li> -->
                                <li><a href="research">Research</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href=""><span>Courses</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="medicalintervention">Acute Medical Intervention</a></li>
                                <li><a href="career">Career Oppurtunities</a></li>

                                <!-- <li><a href="course">Course 2</a></li>
              <li><a href="healthcamp">Course 3</a></li>
              <li><a href="service">Course 4</a></li> -->
                            </ul>
                        </li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="conference">Conference</a></li>
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                </nav><!-- .navbar -->

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div>
        </header><!-- End Header -->
        <!-- End Header -->