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
            <a href="./index.php">
                <img src="./img/logo-white.png" alt="">
                </a>
        </div>
        <ul class="nav" id="nav">
            <ul class="navLogo">
                <a href="/index.php">
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


    <!-- Contact form -->
    <section class="gridSection contactSection">
        <div class="contactformContainer">
            <h1 class="sectionHeader">Get in touch</h1>
            <form action="#" class="contactForm">
                <div>
                    <input type="text" name="" id="" placeholder="full name" class="contactInput">
                    <input type="text" name="" id="" placeholder="Email" class="contactInput">
                </div>                               
                <textarea name="" id="" cols="30" rows="5" placeholder="Message" class="contactInput"></textarea>
                <button type="submit" class="btn primaryBtn contactBtn">Submit</button>
            </form>
        </div>
        <div class="sectionPic bouncepic contactPic" id="sectionPic">
            <img src="./img/contact-img.png" alt="">
        </div>
    </section>

    <h1 class="addressHeader">Find us Quickly</h1>
    <div class="address">
        <div class="eachAddress">
            <h1>Philippines</h1>
            <p>Phone: +639123456789</p>
            <p>Email: plmun@gmail.com</p>
            <p>Address: Pamantasan Ng Lungsod Nang Muntinlupa</p>
        </div>

</div>

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