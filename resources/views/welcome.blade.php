<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/3ca0a9bad6.js" crossorigin="anonymous"></script>

    <!-- poppines font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,600;1,500&amp;family=Kanit:wght@400;500&amp;family=Nosifer&amp;family=Poppins:wght@400;600&amp;display=swap"
        rel="stylesheet">

    <!-- remix cdn link below -->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet" />

    <title>MarketPlace</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic Styles */
        body {
            font-family: Arial, sans-serif;

        }

        /* Header layout with Flexbox */
        .header {
            display: flex;
            position: fixed;
            height: 12vh;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fefffe;
            color: #292c30;
            box-shadow: 1px 2px 3px #888f93;
            z-index: 3000;


        }

        .logo {
            padding-right: 48rem;

        }


        .hamburger {
            font-size: 30px;
            cursor: pointer;
            display: block;
            /* Always show the hamburger icon on all screen sizes */
        }

        /* Content Menu Styles (Slides from the Left) */
        .content {
            position: fixed;
            display: flex;
            flex-direction: column;

            font-family: "poppins";
            top: 0;
            left: -250px;
            /* Initially hidden off-screen from the left */
            width: 250px;
            height: 100%;
            background: linear-gradient(to right, #090c0f, #2b3a3d);
            padding-top: 50px;
            transition: 0.3s;
            color: #fff;
            z-index: 9999;

        }

        .content li {
            list-style-type: none;
            margin-top: 1rem;
            padding: 10px;
            align-items: center;



            width: 100%;
            height: 7vh;
        }

        .content li a {
            padding-top: 1rem;
            text-decoration: none;
            color: #fff;
            font-family: "Poppins";
            font-size: 1.2rem;




        }

        /* Styles for balance and logo */
        .balance h4 {
            color: #292c30;
        }

        .logo a {
            color: #292c30;
            font-size: 1rem;
            text-decoration: none;
            font-weight: 900;
            font-family: "Poppins";
            font-size: 2rem;
            text-shadow: 1px 2px 3px #018bad;
        }



        .close-btn {
            font-size: 30px;
            color: white;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }



        /* The hamburger will always show */

        /* for my side bar area */
        .sidebar-container {




            align-items: center;
            display: flex;
            width: 20%;
            height: 100vh;
            flex-direction: column;
        }

        .side-one {
            padding-top: 1rem;
            position: fixed;
            background: linear-gradient(to right, #090c0f, #2b3a3d);
            width: 20%;
            height: 100vh;
        }

        .side-one li {
            list-style: none;
            margin: 2rem;


        }

        .side-one li a {
            text-decoration: none;
            color: #fff;

        }

        hr {}

        .line {

            width: 200%;
            margin: auto;
            border: 1px solid #fff;
        }

        i {
            margin-right: 10px;
            color: white;
            font-size: 23px;
        }

        .main-container {
            display: flex;
            gap: 2rem;

        }

        .second-section h1 {
            color: #000;

        }

        .header2 {
            display: flex;
            justify-content: space-between;
            gap: 40rem;

        }

        .text1 {
            color: #2b3a3d;
            margin-top: 7rem;
            line-height: 1rem;
        }

        .middle-section {

            color: #2b3a3d;
            margin-top: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .middle-section h1 {
            font-size: 3rem;
            color: #2b3a3d;
            text-shadow: 1px 2px 3px #018bad;

        }

        .middle-section p {
            padding-top: 1rem;
            color: #68575e;
            padding-bottom: 1rem;
        }

        /* for my hero section area */
        .hero-slider {
            position: relative;
            width: 100%;
            height: 50vh;
            overflow: hidden;
            margin-top: 1rem;
        }

        .hero-slider .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;


            justify-content: center;
            text-align: center;
            align-items: center;

        }

        .hero-slider .slide.active {
            opacity: 1;
        }

        .hero-slider img {
            width: 100%;
            height: 50vh;
            border-radius: 10px;
            object-fit: cover;
        }

        .hero-slider .text {
            position: absolute;
            border-radius: 30px;
            top: 0;
            bottom: 20px;
            height: 50vh;
            width: 100%;
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            text-align: center;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .hero-slider .text h2 {
            margin: 0;
            font-size: 2em;
            font-family: "Poppins";
        }



        .slide-contain {
            background-color: transparent;
            border-radius: 1rem;

            height: 55vh;
            padding-inline: 1rem;
        }

        .main-section {
            margin-top: 2rem;
        }

        .header3 {
            display: flex;
            justify-content: space-between;
            background: linear-gradient(to right, #090c0f, #2b3a3d);
            color: white;
            height: 7vh;
            align-items: center;
            padding-inline: 1rem;
            border-radius: 5px;

        }

        .second a {
            text-decoration: none;
            color: white;
        }

        .container3 {
            display: flex;
            gap: 3rem;
            margin-top: 1rem;
            border: 1px solid #000;
            align-items: center;
            justify-content: center;
            height: 12vh;
            text-align: center;
        }

        .about {
            width: 50%;
        }

        .stock {
            background: linear-gradient(to right, #fff, #2b3a3d);
            width: 10%;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .price {

            background: linear-gradient(to right, #fff, #2b3a3d);
            width: 10%;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .buy button {
            height: 30px;
            width: 50px;
        }

        .hikk {
            height: 7vh;
        }
    </style>



</head>

<body>

    <div class="container">

        <div class="header">
            <div class="hamburger" onclick="toggleMenu()">&#9776;</div>




            <div class="logo">
                <a href="Logo">Marketplace</a>
            </div>

            <div class="balance">
                <h4>Balance:NGN <span>0.00</span></h4>
            </div>




            <div class="content">

                <div class="close-btn" onclick="toggleMenu()">&times;</div>

                <li> <img class="hikk" src="{{ asset('assets/facebook.png') }}" alt="Slide 1"> <a href="#">Facebook</a></li>
                <li>
                <li> <img class="hikk" src="{{ asset('assets/instagram.png') }}" alt="Slide 1"> <a href="#">Instagram</a></li>
                <li>
                <li> <img class="hikk" src="{{ asset('assets/tiktok.png') }}" alt="Slide 1"> <a href="#">Tiktok</a></li>
                <li>
                <li> <img class="hikk" src="{{ asset('assets/twitter.png') }}" alt="Slide 1"> <a href="#">Twitter</a></li>
                <li>
                <li> <img class="hikk" src="{{ asset('assets/telegram.png') }}" alt="Slide 1"> <a href="#">Telegram</a></li>
                <li>
                <li> <img class="hikk" src="{{ asset('assets/vpn.png') }}" alt="Slide 1"> <a href="#">VPN</a></li>
                <li>
                <li> <img class="hikk" src="{{ asset('assets/gmail.png') }}" alt="Slide 1"> <a href="#">Mails</a></li>

            </div>

        </div>
        <div class="main-container">

            <div class="sidebar-container">
                <div class="side-one">
                    <li><i class="ri-home-9-fill"></i><a href="#">Home</a></li>
                    <li><i class="ri-shopping-cart-2-fill"></i><a href="#">My Orders</a></li>
                    <li><i class="ri-wallet-3-fill"></i><a href="#">Add Funds</a></li>
                    <li><i class="ri-wallet-3-fill"></i><a href="#">How To Login</a></li>
                    <li><i class="ri-shield-user-fill"></i><a href="#">Rules</a></li>
                    <li><i class="ri-customer-service-fill"></i><a href="#">Customer Care</a></li>
                    <li>
                        <hr>
                    </li>




                    <li><i class="ri-user-3-fill"></i><a href="#">Profile</a></li>
                    <li><i class="ri-logout-box-r-line"></i><a href="#">Sign Out</a></li>


                </div>

                <hr class="line">
            </div>


            <div class="second-section">
                <div class="header2">
                    <div class="text1">
                        <h4>Welcome!! <span>Hazza</span></h4>
                    </div>

                    <div>

                        <h4>Balance:NGN <span>0.00</span></h4>

                    </div>


                </div>
                <div class="middle-section">
                    <h1>Buy social accounts and Followers</h1>
                    <p>Leading marketplace to buy established Facebook accounts,Youtube Followers, Theme Pages etc..</p>
                </div>
                <div class="slide-contain">
                    <div class="hero-slider">
                        <div class="slide">
                            <img src="{{ asset('assets/pexels-brettjordan-8829445.jpg') }}" alt="Slide 1">

                            <div class="text">
                                <h2>Buy all kinds of logs from
                                    marketplace.
                                </h2>

                            </div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/pexels-daliladalprat-2055500.jpg') }}" alt="Slide 1">

                            <div class="text">
                                <h2>Boost your social media platforms with marketplace.</h2>

                            </div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/pexels-marcos-felipe-336305216-14752458.jpg') }}" alt=" Slide 1">

                            <div class="text">
                                <h2>We sell logs at a very affordable price.</h2>

                            </div>
                        </div>
                    </div>


                    <div class="main-section">
                        <div class="header3">
                            <div class="first">
                                <H4>Popular Logs</H4>
                            </div>
                            <div class="second">
                                <a href="#">See More</a>
                            </div>
                        </div>
                        <div class="container3">
                            <div class="img">
                                <img class="hikk" src="{{ asset('assets/facebook.png') }}" alt="Slide 1">
                            </div>
                            <div class="about">
                                <p>Facebook:7-15 years USA facebook with 50-100 friends and Active Marketplace 80% have switch Profile with friends good quality</p>
                            </div>

                            <div class="stock">
                                <span>
                                    <h3>Stock</h3> 0
                                </span>
                            </div>
                            <div class="price">
                                <span>
                                    <h3>Price</h3> NGN:0.00
                                </span>
                            </div>
                            <div class="buy">
                                <button>Buy</button>
                            </div>
                        </div>
                        <div class="container3">
                            <div class="img">
                                <img class="hikk" src="{{ asset('assets/facebook.png') }}" alt="Slide 1">
                            </div>
                            <div class="about">
                                <p>Facebook:7-15 years USA facebook with 50-100 friends and Active Marketplace 80% have switch Profile with friends good quality</p>
                            </div>

                            <div class="stock">
                                <span>
                                    <h3>Stock</h3> 0
                                </span>
                            </div>
                            <div class="price">
                                <span>
                                    <h3>Price</h3> NGN:0.00
                                </span>
                            </div>
                            <div class="buy">
                                <button>Buy</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>


    </div>


</body>



<script>
    // script.js

    function toggleMenu() {
        const contentMenu = document.querySelector('.content');
        const currentLeft = contentMenu.style.left;

        // Toggle the sliding menu
        if (currentLeft === '0px') {
            contentMenu.style.left = '-250px'; // Slide menu off-screen to the left
        } else {
            contentMenu.style.left = '0px'; // Slide menu in from the left
        }
    }



    // JavaScript to create the auto-swiping effect
    let currentIndex = 0;
    const slides = document.querySelectorAll('.hero-slider .slide');
    const totalSlides = slides.length;

    function changeSlide() {
        slides.forEach((slide, index) => {
            slide.classList.remove('active');
            if (index === currentIndex) {
                slide.classList.add('active');
            }
        });
        currentIndex = (currentIndex + 1) % totalSlides; // Loop back to the first slide
    }

    setInterval(changeSlide, 3000); // Change slide every 3 seconds

    // Initialize the first slide as active
    changeSlide();
</script>

</html>