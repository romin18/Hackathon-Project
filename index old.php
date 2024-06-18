<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Guidance👨🏻‍⚕️🩺</title>
    <link rel="icon" href="images/logo.jpg" type="Image">
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- fancy box  -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">

    <!-- chatbot -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.slim.js"></script>
    <script type="text/javascript" src="custom.js"></script>
    <link rel="stylesheet" type="text/css" src="css/jquery.convform.css">
    <script type="text/javascript" src="js/jquery.convform.js"></script>
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                    <div class="header-logo">
                        <a href="index old.php">
                            <!-- <img src="images/logo-search-grid-2x.png" width="100" height="80" alt="Logo"> -->
                            <p class="logo" >👨🏻‍⚕️🩺</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-11">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu nav-menu">
                                <li><a href="index old.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="Doctors.php">Doctors</a></li>
                                <li><a href="blogs.php">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="edit.php">Change Profile</a></li>
                                <li><a href="index.php">Logout</a></li>
                            </ul>
                        </nav>
                        <img src="images/moon.svg" width="30px" id="icon">
                        <div class="header-right">
                            <form action="#" class="header-search-form for-des">
                                <input type="search" class="form-input" placeholder="Search Here...">
                                <button type="submit">
                                    <i class="uil uil-search"></i>
                                </button>
                            </form>               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    <!-- <div class="chat_icon">
        <img src="images/chat-svgrepo-com.svg" width="50px" id="icon" aria-hidden="true">
    </div>
    <div class="chat_box">
        <div class="conv-form-wrapper">
            <form action="" method="GET" class="hidden">
                <select name="programmer" data-conv-question="So, are you a programmer? (this question will fork the conversation based on your answer)">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <div data-conv-fork="programmer">
                    <div data-conv-case="yes">
                        <input type="text" data-conv-question="A fellow programmer! Cool." data-no-answer="true">
                    </div>
                    <div data-conv-case="no">
                        <select name="thought" data-conv-question="Have you ever thought about learning? Programming is fun!">
                            <option value="yes">Yes</option>
                            <option value="no">No..</option>
                        </select>
                    </div>
                </div>
            </form>        
        </div>
    </div> -->

    <div id="viewport">
        <div id="js-scroll-content">
            <!--main banner-->
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="images/bg-home.jpg" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="images/blog-pattern-bg.png" alt="">
                    </div>
                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                <?php 
            
                                    $id = $_SESSION['id'];
                                    $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");
                                    // SELECT * FROM `users` WHERE `Id` = ?
                                    while($result = mysqli_fetch_assoc($query)){
                                        $res_Uname = $result['Username'];
                                        $res_Email = $result['Email'];
                                        $res_Age = $result['Age'];
                                        $res_id = $result['Id'];
                                    }
            
                                    // echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
                                ?>
                                    <h1 class="h1-title">
                                        Hi <span><?php echo $res_Uname ?></span>!<br> I am your <br>
                                        Health Friend.
                                    </h1>
                                    <p class="para">"Health is not simply the absence of illness, but a holistic state encompassing physical, mental, and social well-being.
                                         It's the foundation upon which all other aspects of life are built, emphasizing the importance of nurturing both body and mind. 
                                         Cherish your health, for it is the ultimate wealth that allows you to live life to its fullest potential."</p>
                                    <div class="banner-btn mt-4">
                                        <a href="#guide" class="sec-btn">Check our Health Guides</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <div class="banner-img" style="background-image: url(images/home.jpg);">
                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                    <h5 class="h5-title">Health Friend 🫡</h5>
                                    <p class="para">Welcome <?php echo $res_Uname ?>! 
                                        Let's Introduce you this website😉. This website contains all type of health 
                                        guides and all type of precautions for your health issue.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--brand section-->
            <section class="brands-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-title mb-5">
                                <h5 class="h5-title">Trusted by 70+ companies</h5>
                            </div>
                            <div class="brands-row">
                                <div class="brands-box">
                                    <img src="images/companies/comp1.jpeg" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="images/companies/comp2.jpg" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="images/companies/comp3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--about section-->
            <!-- <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">About Us</p>
                                <h2 class="h2-title">Discover our <span>Guide Story</span></h2>
                                <img src="images/dual-underline.svg" width="500px" alt="">
                                <div class="sec-title-shape mb-4">
                                </div>
                                <p class="para">"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Similique, quo est doloremque saepe, commodi consectetur voluptatum reprehenderit in quisquam quasi dignissimos veritatis 
                                    architecto necessitatibus magni laborum expedita odio dolore accusantium dolor exercitationem? 
                                    Vero iusto doloremque dolores officia accusantium ullam debitis. 
                                    "</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                                <div class="about-video-img" style="background-image: url(images/video.jpg);">
                                </div>
                                <div class="play-btn-wp">
                                    <a href="https://youtu.be/UxskKQ9WOTE" data-fancybox="video" class="play-btn">
                                        <i class="uil uil-play"></i>

                                    </a>
                                    <span>Watch The Video</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
<br><br><br>

            <!--guide section-->
            <section class="our-guide section bg-light repeat-img" id="guide">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Our Guides</p>
                                    <h2 class="h2-title">wake up <?php echo $res_Uname ?>🫡, <span>eat fresh & stay healthy</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="images/dual-underline.svg" width="500px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-tab-wp">
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="menu-tab text-center">
                                        <ul class="filters">
                                            <div class="filter-active"></div>
                                            <li class="filter" data-filter=".all, .physical, .illness, .long-term">
                                                📃All
                                            </li>
                                            <li class="filter" data-filter=".physical">
                                                🧑🏻‍🦽Physical
                                            </li>
                                            <li class="filter" data-filter=".illness">
                                                🤧Illness
                                            </li>
                                            <li class="filter" data-filter=".long-term">
                                                🚑Long-Term 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-lists-row">
                            <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                          
                                <!--1-->
                                <div class="col-lg-4 col-sm-6 dish-box-wp long-term" data-cat="long-term">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="images/diabetis/diabetis card.jpg" alt="">
                                        </div>
                                        <!-- <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div> -->
                                        <div class="dish-title">
                                            <h3 class="h3-title">Diabetes</h3>
                                            <p>Sugar is prohibited 🚫</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Prohibit things</p>
                                                    <b><i class="uil uil-plus"></i>sweets</b><br>
                                                    <b><i class="uil uil-plus"></i>sugar</b><br>
                                                    <b><i class="uil uil-plus"></i>ice creams</b><br>
                                                </li>
                                                <li>
                                                    <p>Include</p>
                                                    <b>Description</b><br>
                                                    <b>Precautions</b><br>
                                                    <b>Medicines</b><br>
                                                    <b>Videos</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Let's Know More</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
                                                    </svg>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp illness" data-cat="illness">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="images/cough/cough card.jpg" alt="">
                                        </div>
                                        <!-- <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div> -->
                                        <div class="dish-title">
                                            <h3 class="h3-title">Coughing</h3>
                                            <p>Throat is in trouble 😷</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Prohibited things</p>
                                                    <b><i class="uil uil-plus"></i>Cold drinks</b><br>
                                                    <b><i class="uil uil-plus"></i>Cold water</b><br>
                                                    <b><i class="uil uil-plus"></i>Sweets</b>
                                                </li>
                                                <li>
                                                    <p>Include</p>
                                                    <b>Description</b><br>
                                                    <b>Precautions</b><br>
                                                    <b>Medicines</b><br>
                                                    <b>Videos</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Let's Know More</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
                                                    </svg>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp long-term" data-cat="long-term">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="images/cancer/cancer card.png" alt="">
                                        </div>
                                        <!-- <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div> -->
                                        <div class="dish-title">
                                            <h3 class="h3-title">Cancer</h3>
                                            <p>Be positive buddy 😉</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Prohibited things</p>
                                                    <b><i class="uil uil-plus"></i></b>
                                                    <b><i class="uil uil-plus"></i></b><br>
                                                    <b><i class="uil uil-plus"></i></b>
                                                </li>
                                                <li>
                                                    <p>Include</p>
                                                    <b>Description</b><br>
                                                    <b>Happinesss</b><br>
                                                    <b>Medicines</b><br>
                                                    <b>Videos</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Let's Know More</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
                                                    </svg>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp physical" data-cat="physical">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="images/paralysis/paralysis card.png" alt="">
                                        </div>
                                        <!-- <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div> -->
                                        <div class="dish-title">
                                            <h3 class="h3-title">Paralysis</h3>
                                            <p>Bounce Back 🚶🏻‍♂️</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Prohibited things</p>
                                                    <b><i class="uil uil-plus"></i></b><br>
                                                    <b><i class="uil uil-plus"></i></b><br>
                                                    <b><i class="uil uil-plus"></i></b>
                                                </li>
                                                <li>
                                                    <p>Include</p>
                                                    <b>Exercise</b><br>
                                                    <b>Prescriptions</b><br>
                                                    <b>Medicines</b><br>
                                                    <b>Videos</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Let's Know More</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
                                                    </svg>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp illness" data-cat="illness">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="images/sneezing/sneezing card.png" alt="">
                                        </div>
                                        <!-- <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div> -->
                                        <div class="dish-title">
                                            <h3 class="h3-title">Sneezing</h3>
                                            <p>Handkerchief Time 🤧</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Prohibited things</p>
                                                    <b><i class="uil uil-plus"></i>Cold water</b>
                                                    <b><i class="uil uil-plus"></i>Ice creams</b><br>
                                                    <b><i class="uil uil-plus"></i>Wet clothes</b>
                                                </li>
                                                <li>
                                                    <p>Include</p>
                                                    <b>Prescriptions</b><br>
                                                    <b>Description</b><br>
                                                    <b>Medicines</b><br>
                                                    <b>Videos</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Let's Know More</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
                                                    </svg>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp long-term" data-cat="long-term">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="images/pregnancy/pregnancy.png" alt="">
                                        </div>
                                        <!-- <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div> -->
                                        <div class="dish-title">
                                            <h3 class="h3-title">Pregnancy</h3>
                                            <p>Let someone say u MOM 🤰🏻</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Prohibited things</p>
                                                    <b><i class="uil uil-plus"></i>Junk food</b><br>
                                                    <b><i class="uil uil-plus"></i>Running fast</b><br>
                                                    <b><i class="uil uil-plus"></i>Some veggies</b>
                                                </li>
                                                <li>
                                                    <p>Include</p>
                                                    <b>Exercise</b><br>
                                                    <b>Precautions</b><br>
                                                    <b>Medicines</b><br>
                                                    <b>Videos</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Let's Know More</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
                                                    </svg>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <br><br><br>
            
            <!--col-1 section-->
            <section class="two-col-sec section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sec-img mt-5">
                                <img src="images/diabetis/diabetis.webp" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sec-text">
                            <h2 class="xxl-title">Daibetis : "Managing diabetes, thriving life."</h2>
                                <p class="para">Diabetes is a chronic health condition characterized by high blood sugar levels. 
                                    It can result from the body's inability to produce or effectively use insulin, a hormone that regulates blood sugar. 
                                    There are different types of diabetes, including type 1, type 2, and gestational diabetes. </p>
                                <p class="para">Management typically involves monitoring blood sugar levels, following a healthy diet, exercising regularly, taking medications or insulin as prescribed, and making lifestyle changes. 
                                    Proper management is crucial to prevent complications such as heart disease, kidney damage, nerve damage, and vision problems. 
                                    Working closely with healthcare providers and staying informed about the condition are essential for those with diabetes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <br><br><br>
            
            <!--col-2 section-->
            <section class="two-col-sec section pt-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <div class="sec-text">
                            <h2 class="xxl-title">Cancer : "Hope over cancer."</h2>
                                <p class="para">Cancer is a disease characterized by the abnormal growth of cells that can spread to other parts of the body. 
                                    Risk factors include smoking, poor diet, and genetics. 
                                    Symptoms vary but may include unexplained weight loss, fatigue, and persistent pain.</p>
                                <p class="para">Treatment options include surgery, chemotherapy, and radiation therapy. 
                                    Early detection through screening tests improves outcomes. 
                                    Supportive care services aim to enhance quality of life. 
                                    Ongoing research seeks to find cures and prevent cancer.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-2 order-1">
                            <div class="sec-img">
                                <img src="images/cancer.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!--appointment section-->
            <!-- <section class="book-table section bg-light">
                <div class="book-table-shape">
                    <img src="images/slide1.jpeg" alt="">
                </div>

                <div class="book-table-shape book-table-shape2">
                    <img src="images/slide2.jpeg" alt="">
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <br><br>
                                    <p class="sec-sub-title mb-3">Connection</p>
                                    <h2 class="h2-title">Book your appointment now!!! <br><?php echo $res_Uname ?></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="images/dual-underline.svg" width="500px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Monday to Sunday <br>[Day shift]</h3>
                                        <p class="para">6:00 am - 18:00 pm</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-now text-center para">
                                        <i class="uil uil-phone"></i>
                                        <a href="tel:+91-8866998866">+91 - 7878129888</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Monday to Sunday <br>[Night shift]</h3>
                                        <p class="para">18::00 pm to 6:00 am</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gallery">
                            <div class="col-lg-10 m-auto">
                                <div class="book-table-img-slider" id="icon">
                                    <div class="swiper-wrapper">
                                        <a href="images/swiper/swiper-image7.cms" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/swiper/swiper-image7.cms)"></a>
                                        <a href="images/swiper/swiper-image1.png" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/swiper/swiper-image1.png)"></a>
                                        <a href="images/swiper/swiper-image2.png" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/swiper/swiper-image2.png)"></a>
                                        <a href="images/swiper/swiper-image3.png" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/swiper/swiper-image3.png)"></a>
                                        <a href="images/swiper/swiper-image4.png" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/swiper/swiper-image4.png)"></a>
                                        <a href="images/swiper/swiper-image5.png" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/swiper/swiper-image5.png)"></a>
                                        <a href="images/swiper/swiper-image6.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/swiper/swiper-image6.jpg)"></a>
                                        <a href="images/swiper/swiper-image6.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/swiper/swiper-image6.jpg)"></a>
                                    </div>

                                    <div class="swiper-button-wp">
                                        <div class="swiper-button-prev swiper-button">
                                            <i class="uil uil-angle-left"></i>
                                        </div>
                                        <div class="swiper-button-next swiper-button">
                                            <i class="uil uil-angle-right"></i>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <br><br><br>
                            </div>
                        </div>


                    </div>
                </div>

            </section> -->

            <!--doctors section-->
            <!-- <section class="our-team section">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Here's The Top Doctors</p>
                                    <h2 class="h2-title">Get in touch with your desired Doctor to get proper guidance</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="images/dual-underline.svg" width="500px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row team-slider">
                            <div class="swiper-wrapper">
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(images/doctors/jha.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="title">Ajaya Nand Jha <br><h6 class="para"> Specialist in <br>Neurosurgeon</h6> </h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/hashtag/drajayanandjhachairmanmedantahospital/"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.facebook.com/hashtag/drajayanandjhachairmanmedantahospital/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/watch?v=VzZ8L4ydK8k">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(images/doctors/joshi.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="title">Suresh Joshi <br><h6 class="para"> Heart surgeon and Director Paediatric & Congenital Cardiac Centre </h6></h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/public/Suresh-Joshi">
                                                        <i class="uil uil-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/suresh.joshipura_official/?hl=en">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/watch?v=NbuUtOQVt7M">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(images/doctors/trehan.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="title">Naresh Trehan <br><h6 class="para">cardiovascular and cardiothoracic <br>surgeon</h6></h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/medanta/posts/dr-naresh-trehan-chairman-managing-director-medanta-leads-the-way-by-taking-the-/3727585013930667/"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.facebook.com/medanta/posts/dr-naresh-trehan-chairman-managing-director-medanta-leads-the-way-by-taking-the-/3727585013930667/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/watch?v=dTTAALCRheY">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(images/doctors/mukharjee.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="title">Aroop Mukherjee <br><h6 class="para"> Orthopaedics & Joint Replacement <br>Surgeon</h6></h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.maxhealthcare.in/doctor/dr-aroop-mukherjee"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/aroop3186/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/live/cIReV4Ht898?si=kuo59eDwkOk2jV1P">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(images/doctors/siddharth.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="title">Siddhartha Mukherjee <br><h6 class="para">haematologist and <br> Oncologist</h6></h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/DrSidMukherjee/">
                                                        <i class="uil uil-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/siddharthx/?hl=en">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/watch?v=fF6ykaYjp9U">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-wp">
                                <div class="swiper-button-prev swiper-button">
                                    <i class="uil uil-angle-left"></i>
                                </div>
                                <div class="swiper-button-next swiper-button">
                                    <i class="uil uil-angle-right"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section> -->
            
            <br><br><br>
            
            <!--reviews section-->
            <section class="testimonials section bg-light">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">What they say</p>
                                    <h2 class="h2-title">What our customers <span>say about us</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="images/dual-underline.svg" width="500px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="testimonials-img">
                                    <img src="images/customer/mainimage.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(images/customer/customer1.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:85%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="title">
                                                    Nilay Hirpara
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(images/customer/customer2.webp);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:80%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="title">
                                                    Ravi Kumawat
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(images/customer/customer3.avif);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:89%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="title">
                                                    Navnit Kumar
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(images/customer/customer4.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:100%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="title">
                                                    Somyadeep Bhowmik
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <br><br><br>
            
            <!--faq's section-->
            <section class="faq-sec section-repeat-img" style="background-image: url(images/);">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">faqs</p>
                                    <h2 class="h2-title">Frequently <span>asked questions</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="images/dual-underline.svg" width="500px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <div class="faq-box">
                                <h4 class="h4-title">How does a virtual guider appointment work?</h4>
                                <p>It is a remote appointment generator. You have to visit ours<a href="Doctors.php">"Doctors"</a> page.
                                    where you can find all contact links for contact and know about them.
                                </p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Do virtual visits meet my needs?</h4>
                                <p>Yess! It fulfill all your needs like precaution, medicines descriptions, </p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">How easy is it to use virtual know technology?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">What devices or equipment do I need in order to access virtual care?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio. Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Voluptates, distinctio?</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Is my virtual visit safe and secure?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio. Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Nam officiis ducimus, cum enim repudiandae animi.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Will using teletach change my wait times?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio. </p>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
            <br><br><br>

            <!--blogs section-->
            <!-- <div class="bg-pattern bg-light repeat-img" style="background-image: url(images/);">
                <section class="blog-sec section" id="blog">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sec-title text-center mb-5">
                                        <p class="sec-sub-title mb-3">Our blog</p>
                                        <h2 class="h2-title">Latest Publications</span></h2>
                                        <div class="sec-title-shape mb-4">
                                            <img src="images/dual-underline.svg" width="500px" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(images/blog.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">September.15.2021</p>
                                            <a href="#" class="h4-titles">Lorem ipsum dolor sit.</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(images/blog2.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">October.15.2021</p>
                                            <a href="#" class="h4-titles">Lorem ipsum dolor sit.</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(images/blog3.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">November.15.2021</p>
                                            <a href="#" class="h4-titles">Lorem ipsum dolor sit.</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </section> -->

                <!--contact section-->
                <!-- <section class="newsletter-sec section pt-0" id="contact">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 m-auto">
                                    <div class="sec-title text-center mb-5">
                                        <br><br><br>
                                        <p class="sec-sub-title mb-3">Contact</p>
                                        <h2 class="h2-title">Let's get in touch</span></h2>
                                        <img src="images/dual-underline.svg" width="500px" alt="">
                                    </div>
                                    <div class="newsletter-box text-center back-img white-text"
                                        style="background-image: url(images/login-backgroundimage.jpg);">
                                        <div class="bg-overlay dark-overlay"></div>
                                        <div class="sec-wp">
                                            <div class="newsletter-box-text">
                                                <h2 class="h2-title">Subscribe our newsletter</h2>
                                                <p class="para">This is Lorem ipsum dolor sit amet consectetur adipisicing elit ad
                                                    veritatis.</p>
                                            </div>
                                            <form action="#" class="newsletter-form">
                                                <input type="email" class="form-input"
                                                    placeholder="Enter your Email Here" required>
                                                <button type="submit" class="sec-btn primary-btn">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </section>
            </div> -->

            <!-- footer starts  -->
            <footer class="site-footer">
                <div class="top-footer section">
                    <div class="sec-wp"><br><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="footer-info">
                                        <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, tenetur.
                                        </p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-github-alt"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="footer-flex-box">
                                        <div class="footer-table-info">
                                            <h3 class="h3-title">open hours</h3>
                                            <ul class="para">
                                                <li><i class="uil uil-clock"></i> Mon-Thurs : 9am - 22pm</li>
                                                <li><i class="uil uil-clock"></i> Fri-Sun : 11am - 22pm</li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu nav-menu">
                                            <h3 class="h3-title">Links</h3>
                                            <ul class="column-2">
                                                <li>
                                                    <a href="index old.php" class="footer-active-menu">Home</a>
                                                </li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="Doctors.php">Doctors</a></li>
                                                <li><a href="blogs.php">Blogs</a></li>
                                                <li><a href="contact">Contact</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu">
                                            <h3 class="h3-title">Company</h3>
                                            <ul>
                                                <li><a href="#">Terms & Conditions</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Cookie Policy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <!-- jquery  -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

    <!-- fontawesome  -->
    <script src="js/font-awesome.min.js"></script>

    <!-- swiper slider  -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- mixitup -- filter  -->
    <script src="js/jquery.mixitup.min.js"></script>

    <!-- fancy box  -->
    <script src="js/jquery.fancybox.min.js"></script>

    <!-- parallax  -->
    <script src="js/parallax.min.js"></script>

    <!-- gsap  -->
    <script src="js/gsap.min.js"></script>

    <!-- scroll trigger  -->
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- scroll to plugin  -->
    <script src="js/ScrollToPlugin.min.js"></script>
    <!-- rellax  -->
    <!-- <script src="js/rellax.min.js"></script> -->
    <!-- <script src="js/rellax-custom.js"></script> -->
    <!-- smooth scroll  -->
    <script src="js/smooth-scroll.js"></script>
    <!-- custom js  -->
    <script src="main.js"></script>
    <script>
        var icon = document.getElementById("icon");

        icon.onclick = function(){
            document.body.classList.toggle("dark-theme");
            if(document.body.classList.contains("dark-theme")){
                icon.src = "images/sun.svg";
            }
            else{
                icon.src = "images/moon.svg";
            }
        }
    </script>
</body>

</html>