<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('site/Images/bb_logo(white).png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('site/index.css')}}">
    <link rel="stylesheet" href='https://fontawesome.com/v4.7.0/icon/bars'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<title>BLOOD BUDDY</title>
<!-- <div class="preloader">
    <img src="pre-loader.svg" alt="spinner">
</div> -->

<body>
    <!--Scroll to top button-->
    <button onclick="topFunction()" id="myBtn" class="fas fa-arrow-up"></button>
    <!-- Home Page -->
    <header>
        <video autoplay muted loop plays-inline id="homevideo">
            <source src="{{asset('site/video/homevideo1.mp4')}}" type="video/mp4">
        </video>
        <div id="logo"> <a href="index.html"><img src="{{asset('site/Images/logo.png')}}"></a>
        </div>
        <div id="nav">
            <div class="header-list" id="headerl">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a class="scroll" href="">Home</a></li>
                    <li><a class="scroll" href="#about-us">About Us</a></li>
                    <li><a href="donate.html" target="_blank">Donate</a></li>
                    <li><a href="help.html" target="_blank">Get Help</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
        <div class="text-box">
            <h1> Donate Blood </h1>
            <h1>SaveLives </h1>
            <p>Donate blood and be the reason for someone's existence.</p>
            <a href="{{route('register')}}" class="hero-btn" target="_blank">Register</a>
        </div>
    </header>

    <!--ABOUT US -->


    <main>
        <section id="about-us">
            <div class="about">
                <h1 class="heading">What is this all about ?</h1> <br>
                <p class="head-des" class="text">We solve the problem of blood emergencies by connecting <span
                        class="one-line"><br></span> blood donors directly with people in blood need. </p>
                <div class="row">
                    <div class="about-col">
                        <div class="image">
                            <img src="{{asset('site/Images/drop.png')}}">
                        </div>
                        <h3>What we do ?</h3>
                        <p>We connect blood donors with the blood, without any intermediary such as blood banks, for an
                            efficient and seamless process.</p>
                    </div>

                    <div class="about-col">
                        <div class="image">
                            <img src="{{asset('site/Images/cost.png')}}">
                        </div>
                        <h3>Totally Free</h3>
                        <p>Rakt Seva ultimate goal is to provide an easy -to-use, easy-to-access, fast, efficient,
                            and reliable way to get life-saving blood, totally <span>Free of cost.</span></p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="{{asset('site/Images/save.png')}}">
                        </div>
                        <h3>Save Life</h3>
                        <p>We are a non profit foundation and our main objective is to make sure that everything is done
                            to protect vulnerable persons.<span>Help
                                us by making a gift!</span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Table-->
    <section class="bloodtype">
        <h1>Who Can You Give Blood To?</h1>
        <div class="bloodtable">

            <div class="table">
                <img src="{{asset('site/Images/bloodtable.jpg')}}" alt="img table">
            </div>
            <div class="text">
                <h2>
                    Who can give blood?</h2>
                <p>Almost anyone who is healthy, at least 16 years old, and weighs at least 110 pounds. (16-year-olds
                    must weigh at least 130 lbs and need signed parental consent.)</p>


                <h2>What are the major blood types?</h2>
                <p>Your blood type is determined by the antigens it contains. There are two major types of blood
                    antigens: ABO and Rh, which combine to create blood types: O+. O-, A+, A-, B+, B-, AB+ & AB-</p>

                <h2>Who can receive my blood?</h2>
                <p>A patient can receive blood that has the same ABO antigens as theirs, plus O. Rh+ can receive Rh+ or
                    Rh-, while Rh- must receive Rh- blood.</p>
            </div>
        </div>
    </section>

    <!--FOOTER-->

    <footer>
        <div class="siteFooterBar">
            <div class="content1">
                <div class="foot">2023 All rights are reserved</div>
            </div>
        </div>
        <div class="footer-content">
            <h3>Why to donate blood?</h3>
            <p>Donating blood saves lives and helps support your community.<br>
                Donate blood and be the reason for someone’s existence.<br>
                Once a blood donor, always a lifesaver. <br>


            </p>
            <div class="socials">
                <ul class="sci">
                    <li><a href="https://www.facebook.com/givebloodnhs/" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/indiablooddonation/?hl=en" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="http://nbtc.naco.gov.in/" target="_blank"><i class="fas fa-globe"></i></a>
                    </li>
                </ul>
            </div>
        </div>


    </footer>
    <!--Javascript for pre-loader-->


    <!--js for scroll to top-->
    <script src="{{asset('site/up.js')}}"></script>

    <!--JAVASCRIPT FOR TOGGLE MENU -->
    <script>
        var headerl = document.getElementById("headerl");

        function showMenu() {
            headerl.style.right = "0";
        }

        function hideMenu() {
            headerl.style.right = "-210px";
        }
    </script>


    <!--js for scroll effects-->
    <script src="{{asset('site/scroll.js')}}"></script>

</body>

</html>