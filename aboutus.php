<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./commonStyle.css">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">

   
    <script src="https://kit.fontawesome.com/aa7454d09f.js" crossorigin="anonymous"></script>
</head>
<body>
     <!-- Header -->
     <header>
        <div id="logo">
            <a href="index.php">
               <img src="./img/logo-white.png" alt="">
            </a>
        </div>
        <ul class="nav" id="nav">
            <ul class="navLogo">
                <a href="index.php">
                    <img src="./img/logo-white.png" alt="">
                </a>
            </ul>
            <li class="nav-link"><a href="index.php">Home</a></li>
            <li class="nav-link"><a href="aboutus.php">About Us</a></li>
            <li class="nav-link"><a href="contact.php">Contact</a></li>
            <li class="sociallinkContainer">
                <img class="sociallink" src="./img/fabook-icon-white.svg" alt="">
                <img class="sociallink" src="./img/twitter-icon-white.svg" alt="">
                <img class="sociallink" src="./img/inkedin-icon-white.svg" alt="">
                <img class="sociallink" src="./img/whatsapp-icon-white.svg" alt="">
            </li>
        </ul>
        <div id="barContainer">
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
    </header>

    <!-- navbar -->
    <nav>
        <div class="container">
            <div class="profile-area">
                <div class="theme-btn">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
             </div>
        </div>
    </nav>

    <!-- aboutus hero  -->
    <section class="gridSection">
        <div class="sectionDesc aboutusDesc">
            <h1 class="headline">
                The Company History
            </h1>
            <p class="sub-headline">
                Variety of students from Pamantasan Ng Lungsod Nang Muntinlupa, a project for finals Midterm
            </p>
        </div>
        <div class="sectionPic bouncepic aboutusPic" id="sectionPic">
            <img src="./img/about-hero.png" alt="">
        </div>
    </section>

    <!-- About us status -->
    <div class="statusContainer">
        <div class="status">
            <h1><b>100+</b> Clients</h1>
            <p>Everybody love us and our ideas.</p>
        </div>

        <div class="status">
            <h1><b>100+</b> Projects</h1>
            <p>With the help of everyone this project is made possible to exist.</p>
        </div>

        <div class="status">
            <h1><b>100+</b> Countries</h1>
            <p>The best website for crypto you could think of!</p>
        </div>
    </div>

    <div class="services">
        <div class="aboutusimgContainer">
            <img src="./img/about-image-1.png" alt="">
            <img src="./img/about-image-2.png" alt="">
        </div>

        <div class="offers">
            <div class="eachOffer">
                <img src="./img/fast-forward-icon-white.svg" alt="">
                <div class="offerDesc">
                    <h1>Fast Management</h1>
                    <p>The Complete Guide to Management and How to Implement it Quickly and Effectively</p>
                </div>
            </div>

            <div class="eachOffer">
                <img src="./img/support-agent-icon-white.svg" alt="">
                <div class="offerDesc">
                    <h1>Best Support</h1>
                    <p>The Best Support for Online crypto & How to Craft a Compelling Description</p>
                </div>
            </div>

            <div class="eachOffer">
                <img src="./img/progress-warning-icon-white.svg" alt="">
                <div class="offerDesc">
                    <h1>Best Progress</h1>
                    <p>What is a Crypto-Mining Malware and Why You MUST Protect Against Them</p>
                </div>
            </div>
        </div>
    </div>


       <!-- Carousel -->
    <section class="teamSection">
        <h1 class="sectionHeader">Our Strong & Creative Team</h1>
        <div class="carouselContainer">
            <div class="eachCarousel eachTeam">
                <div class="teamPic">
                    <img src="/img/team-image-1.png" alt="">
                    <div class="teamSocialLink">
                        <img src="./img/Facebook_black.svg" alt="">
                        <img src="./img/Vimeo_black.svg" alt="">
                        <img src="./img/Twitter_black.svg" alt="">
                        <img src="./img/Instagram_black.svg" alt="">
                    </div>
                </div>
                <div class="teamDesc">
                    <h1 class="teamName">John Rey Carpio</h1>
                    <p class="position">Developer</p>
                </div>

            </div>
    
            <div class="eachCarousel eachTeam">
                <div class="teamPic">
                    <img src="/img/team-image-2.png" alt="">
                    <div class="teamSocialLink">
                        <img src="./img/Facebook_black.svg" alt="">
                        <img src="./img/Vimeo_black.svg" alt="">
                        <img src="./img/Twitter_black.svg" alt="">
                        <img src="./img/Instagram_black.svg" alt="">
                    </div>
                </div>
                <div class="teamDesc">
                    <h1 class="teamName">Venice Lei Maceda</h1>
                    <p class="position">UI UX Designer</p>
                </div>
            </div>
    
            <div class="eachCarousel eachTeam">
                <div class="teamPic">
                    <img src="./img/team-image-3.jpg" alt="">
                    <div class="teamSocialLink">
                        <img src="./img/Facebook_black.svg" alt="">
                        <img src="./img/Vimeo_black.svg" alt="">
                        <img src="./img/Twitter_black.svg" alt="">
                        <img src="./img/Instagram_black.svg" alt="">
                    </div>
                </div>
            
                
                <div class="teamDesc">
                    <h1 class="teamName">Danilo Casim Jr.</h1>
                    <p class="position">Developer</p>
                </div>
            </div>
    
            <div class="eachCarousel eachTeam">
                <div class="teamPic">
                    <img src="./img/team-image-3.jpg" alt="">
                    <div class="teamSocialLink">
                        <img src="./img/Facebook_black.svg" alt="">
                        <img src="./img/Vimeo_black.svg" alt="">
                        <img src="./img/Twitter_black.svg" alt="">
                        <img src="./img/Instagram_black.svg" alt="">
                    </div>
                </div>
                <div class="teamDesc">
                    <h1 class="teamName">Daniel Equipaado</h1>
                    <p class="position">UI UX Designer</p>
                </div>

            </div>
        </div>
        <div class="carouselIndicator">
            <div class="indicator activeIndicator" onclick="slideCarousel(0)"></div>
            <div class="indicator" onclick="slideCarousel(1)"></div>
            <div class="indicator" onclick="slideCarousel(2)"></div>
            <div class="indicator" onclick="slideCarousel(3)"></div>
            <div class="indicator" onclick="slideCarousel(4)"></div>
            <div class="indicator" onclick="slideCarousel(5)"></div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="joinSection">
            <div class="joinDesc">
                <h1 class="sectionHeader">Join with us</h1>
                <p class="sectionPara">
                    Once you have created your account, you can purchase coins from website
                </p>
            </div>
            <button class="btn primaryBtn">JOIN NOW</button>
        </div>

        <div class="footerlinksContainer">
            <div class="footerAboutus">
                <img src="./img/logo-white.png" alt="">
                <p class="darkPara">Easiest and is the most reliable way to trade for 
                 Cryptocurrency.
                </p>
                <div class="footersociallinkContainer">
                    <img class="sociallink" src="./img/fabook-icon-white.svg" alt="">
                    <img class="sociallink" src="./img/twitter-icon-white.svg" alt="">
                    <img class="sociallink" src="./img/inkedin-icon-white.svg" alt="">
                    <img class="sociallink" src="./img/whatsapp-icon-white.svg" alt="">
                </div>
            </div>

            <div class="footerlink">
                <h1 class="linkTitle">Explore</h1>
                <a href="#" class="eachLink">About us</a>
                <a href="#" class="eachLink">FAQ</a>
                <a href="#" class="eachLink">Blog</a>
                <a href="#" class="eachLink">Contact</a>
            </div>

            <div class="footerlink">
                <h1 class="linkTitle">Service</h1>
                <a href="#" class="eachLink">Mining</a>
                <a href="#" class="eachLink">Control Data</a>
                <a href="#" class="eachLink">Design</a>
                <a href="#" class="eachLink">Security</a>
            </div>

            <div class="footerlink">
                <h1 class="linkTitle">Resource</h1>
                <a href="#" class="eachLink">Style Guide</a>
                <a href="#" class="eachLink">Change Log</a>
                <a href="#" class="eachLink">License</a>
            </div>
        </div>

    
    <script src="./script.js"></script>
</body>
</html>