<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MA'ED | Recipe generator</title>
    <link rel="icon" type="image/x-icon" href="../pics/favicon.ico">
    <link rel="stylesheet" href="../Styles/home.css" />
    <link href="https://fonts.cdnfonts.com/css/proxima-nova-2" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://fonts.cdnfonts.com/css/dosis" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adobe-garamond-pro-2" rel="stylesheet">



    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <noscript>You need to enable JavaScript to run this site.</noscript>
    <div class="wrapper">
        <header class="header" id="header">
            <section class="logo" id="logo">
                <a href="home.php"><img src="../pics/Maed_logo1-removebg.png" alt="" loading="eager" /></a>
            </section>
            <section class="navigation" id="navigation">
                <input type="checkbox" id="dropcheckbox" />

                <label id="dropcheckbox_label" for="dropcheckbox">
                    <span class="material-symbols-outlined"> menu </span>Menu
                </label>


                <ul>
                    <li id="normal">
                        <a href="home.php"><span class="material-symbols-outlined" style="line-height: 1">Home</span>Home</a>
                    </li>
                    <li id="normal">
                        <a href="#aboutus"><span class="material-symbols-outlined">groups</span> About
                            Us</a>
                    </li>
                    <li id="normal">
                        <a href="#">
                            <span class="material-symbols-outlined">help</span>FAQs</a>
                    </li>
                    <li id="normal">
                        <a href="searchfood.php">
                            <span class="material-symbols-outlined">search</span>Search</a>
                    </li>
                    <li id="separator"><a href="#">|</a></li>
                    <?php
                    session_start();
                    if (isset($_SESSION['username'])) {
                    ?>
                        <li class="phone" id="normal">
                            <a href="account.php"><span class="material-symbols-outlined ">Home</span>Account</a>
                        </li>
                        <li class="phone" id="normal">
                            <a href="favorites.php"><span class="material-symbols-outlined ">Star</span>Favorites</a>
                        </li>
                        <li class="phone" id="normal">
                            <a href="logout.php"><span class="material-symbols-outlined ">logout</span>Sign out</a>
                        </li>
                    <?php
                    }
                    ?>
                    <!--           
            <li id="signup">
              <a href="#"><span class="material-symbols-outlined">help</span>Sign Up </a>
            </li> -->
                    <li id="account">
                        <?php

                        if (isset($_SESSION['username'])) {
                            $username = $_SESSION['username'];
                        ?>
                            <div id="pic" class="pic"><img src="../pics/photo_2021-05-31_08-56-23.jpg" alt=""></div>
                            <div class="profile">
                                <ul id="profile">
                                    <li id="normal">
                                        <a href="account.php"><span class="material-symbols-outlined ">Home</span>Account</a>
                                    </li>
                                    <li id="normal">
                                        <a href="favorites.php"><span class="material-symbols-outlined ">Star</span>Favorites</a>
                                    </li>
                                    <li id="normal">
                                        <a href="logout.php"><span class="material-symbols-outlined ">logout</span>Sign
                                            out</a>
                                    </li>
                                </ul>
                            </div>

                        <?php
                        } else {
                        ?>
                            <a href="signin.php"><button class="account">
                                    <span class="material-symbols-outlined">person</span>Account
                                </button></a>
                        <?php
                        }
                        ?>
                    </li>
                </ul>
            </section>
        </header>

        <div class="main_box">
            <aside class="floatingimg">
                <!-- <img src="./pics/plate.png" alt="" class="pla" /> -->
                <img src="../pics/plate.png" alt="" id="pl" />
            </aside>
            <aside class="text">
                <h1>Welcome to <span id="orange"> Ma'ed.</span></h1>
                <h3>
                    The First <span id="orange"> Recipe Generator</span> Site in
                    Ethiopia.
                </h3>
                <h5 id="lighter">
                    Enter your available ingredients, and
                    <span id="orange"> <b>Ma'ed</b> </span> will give you delicious
                    recipes.
                </h5>
                <br />
                <a href="signin.php"><button class="button-start"> <b> GET STARTED<span class="material-symbols-outlined"> arrow_forward </span></b></button>
                </a>
            </aside>
        </div>
        <div class="aboutus" id="aboutus">
            <div class="aboutus_pic">
                <img src="../pics/about us_pic.jpg" alt="" />
            </div>
            <div class="aboutus_text">
                <h1>About Us</h1>

                <p>
                    Welcome to Maed, your go-to destination for authentic Ethiopian cuisine. Our team is passionate
                    about sharing the rich culinary traditions of Ethiopia with the world, and we're dedicated to
                    providing high-quality recipes, beautiful food photography, and helpful cooking tips to help you
                    bring the flavors of Ethiopia into your own kitchen.
                </p>
                <br />
                <p>
                    Our team is made up of experienced home cooks and food enthusiasts who have spent years exploring
                    the diverse and delicious cuisine of Ethiopia. We believe that food is a powerful way to connect
                    with others and celebrate different cultures, and we're excited to share our love of Ethiopian
                    cuisine with you.
                </p>
                <br />
                <p>
                    Whether you're a seasoned home cook or just starting out, we're here to help you explore the rich
                    culinary traditions of Ethiopia and discover new flavors and ingredients along the way. So come join
                    us on this culinary journey, and let's explore the delicious world of Ethiopian cuisine together!
                </p>
            </div>
        </div>
        <div class="grid_gallery">
            <header class="exploretitle">
                <h3>Explore different Ethiopian Cuisines</h3>
            </header>

            <div class="gridone">
                <div class="gridimg">
                    <div class="gridone_image">
                        <img src="../Logo/https __cdn.cnn.com_cnnnext_dam_assets_190205205048-kitfo.jpg" alt="" />
                    </div>
                </div>
                <div class="gridtext">
                    <h1 id="gridtitle">Kitfo</h1>
                    <p id="gridtext">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam
                        non, dolorum eos illum sed odio!
                    </p>
                    <a href="#"><button id="clickgrid">Click Here &rarr;</button></a>

                </div>
            </div>
            <div class="gridtwo">
                <div class="gridimg">
                    <div class="gridtwo_image">
                        <img src="../Logo/Ethiopian-food-.jpg" alt="" />
                    </div>
                </div>
                <div class="gridtext">

                    <h1 id="gridtitle">Beyanetu</h1>
                    <p id="gridtext">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam
                        non, dolorum eos illum sed odio!
                    </p>
                    <a href="#"> <button id="clickgrid">Click Here &rarr;</button></a>
                </div>

            </div>
            <div class="gridthree">
                <div class="gridimg">
                    <div class="gridthree_image">
                        <img src="../Logo/190205144959-shekla-tibs.jpg" alt="" />
                    </div>
                </div>
                <div class="gridtext">
                    <h1 id="gridtitle">Shekla Tibs</h1>
                    <p id="gridtext">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam
                        non, dolorum eos illum sed odio!
                    </p>
                    <a href="#"> <button id="clickgrid">Click Here &rarr;</button></a>
                </div>

            </div>
        </div>
        <div class="searchFood">
            <form action="searchfood.php" method="get">
                <label for="searching">Search</label>
                <input placeholder="  Search food" type="search" name="searchtxt" id="searching" style="border-radius: 1rem;" required>
                <button type="submit" name="searchfoodbtn" class="searchfoodbtn"><span class="material-symbols-outlined" id="searchIcon"> search</span>
                </button>
            </form>




        </div>
        <div class="mobileapp">
            <div class="mobileapp_pic">
                <img src="../pics/ourapp-removebg.png" alt="" />
            </div>
            <div class="mobileapp_text">
                <h1>Get Ma'ed for any device</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                    sapiente dolores atque nostrum reprehenderit ullam minus laborum
                    neque delectus iure veritatis, excepturi dolore nam eius!
                </p>
                <br />

                <a href="/" target="_blank" tabIndex="0"><img class="bn45" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/2560px-Google_Play_Store_badge_EN.svg.png" alt="Google Playstore" /></a>
                <!-- <br> -->
                <a href="/" target="_blank" tabIndex="0"><img class="bn46" src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store" /></a>
                <!-- <br> -->
                <a href='/' target="_blank"><img class="bn44" src='https://developer.microsoft.com/en-us/store/badges/images/English_get-it-from-MS.png' alt='Badge' /></a>
            </div>
        </div>

        <div class="testimony">
            <h1>Testimonials</h1>
            <div class="container">
                <div class="indicator">
                    <span class="btn activeInd"></span>
                    <span class="btn"></span>
                    <span class="btn"></span>
                    <span class="btn"></span>
                </div>
                <div class="testimonial">
                    <div class="slide-row" id="slide">
                        <div class="slide-col">
                            <div class="user-text">
                                <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum minima quae
                                    reiciendis accusamus et eum soluta, error perferendis, cumque quo sint corrupti
                                    nobis quam eligendi magnam tempore asperiores, iusto quasi."
                                </p>
                                <h3>Chef Yohanis</h3>
                                <p>Executive Chef at Antica Restaurant & Farm </p>
                            </div>
                            <div class="user-img">
                                <img src="../pics/Chef/ChefYohanis-removebg-preview.png" alt="Chef Yohanis" loading="eager">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <p>"Well, well, well, what do we have here? A website that actually knows how to cook
                                    Ethiopian? I have to say, I'm pleasantly surprised. The Maed team has done a
                                    fantastic job of showcasing the bold flavors and unique ingredients of Ethiopian
                                    cuisine in a way that is both informative and engaging. The recipes are well-written
                                    and easy to follow, and the food photography is absolutely mouth-watering. I can
                                    tell that the team behind this website is truly passionate about Ethiopian cuisine
                                    and dedicated to sharing it with the world. So, if you're looking to spice up your
                                    cooking game and try something new, give Maed a try. Trust me, your taste buds will
                                    thank you."</p>
                                <h3>Chef Gordon Ramsey</h3>
                                <p>Celebrity Chef</p>
                            </div>
                            <div class="user-img">
                                <img src="../pics/Chef/GR-removebg-preview.png" alt="Chef Gordon" loading="eager">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <p>"I have to say, I'm thoroughly impressed with this website. The team behind Maed has
                                    done an incredible job of showcasing the unique flavors and ingredients of Ethiopian
                                    cuisine in a way that is both accessible and informative. The recipes are
                                    well-written and easy to follow, and the food photography is absolutely stunning. As
                                    someone who has spent a lot of time exploring the culinary traditions of Ethiopia, I
                                    can tell you that this website is the real deal. I highly recommend it to anyone
                                    looking to expand their culinary horizons and try something new."</p>
                                <h3>Chef Marcus Samuelsson</h3>
                                <p>Head chef of Red Rooster </p>
                            </div>
                            <div class="user-img">
                                <img src="../pics/Chef/Cropped-Marcus-Samuelsson-copy-removebg-preview.png" alt="Chef Marcus">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <p>"Let me tell you, this website is a real gem. The Maed team has done an amazing job
                                    of bringing the flavors and traditions of Ethiopian cuisine to life in a way that is
                                    both authentic and approachable. The recipes are easy to follow and the food
                                    photography is absolutely stunning. As someone who has spent a lot of time in the
                                    kitchen, I can tell you that the Maed team really knows their stuff. I highly
                                    recommend this website to anyone looking to explore the rich culinary traditions of
                                    Ethiopia and try something new in the kitchen."
                                </p>
                                <h3>Chef Andre Rush</h3>
                                <p>American celebrity chef and military veteran </p>
                            </div>
                            <div class="user-img">
                                <img src="https://dogtagbuddies.org/wp-content/uploads/64876075_1031067970422773_4149167810729213952_n.jpg" alt="Chef Rush">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="content">
                <div class="top">
                    <div class="logo-details">

                        <span class="logo_name"> <b> Ma'ed</b></span>
                    </div>
                    <div class="media-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="link-boxes">
                    <ul class="box">
                        <li class="link_name"><span class="material-symbols-outlined">
                                restaurant
                            </span><b>Ma'ed</b></li>
                        <li><a href="#"><span class="material-symbols-outlined style" style="line-height: 1">Home</span>Home</a></li>
                        <li><a href="#"><span class="material-symbols-outlined style">
                                    send
                                </span>Contact us</a></li>
                        <li><a href="#"><span class="material-symbols-outlined style">
                                    groups
                                </span>About us</a></li>
                        <li><a href="#"><span class="material-symbols-outlined style">
                                    start
                                </span>Get started</a></li>
                    </ul>
                    <ul class="box">
                        <li class="link_name"><span class="material-symbols-outlined style">explore</span><b>Explore</b>
                        </li>
                        <li><a href="#"><span class="material-symbols-outlined style">search</span>Search Food</a></li>
                        <li><a href="#"><span class="material-symbols-outlined style">login </span>Login</a></li>
                        <li><a href="#"><span class="material-symbols-outlined style">logout</span>Logout</a></li>

                    </ul>

                    <ul class="box">
                        <li class="link_name"><span class="material-symbols-outlined style">download</span> <b> Get our
                                App</b></li>
                        <li><a href="#"><span class="material-symbols-outlined style">
                                    phone_android
                                </span>Android</a></li>
                        <li><a href="#"><span class="material-symbols-outlined style">
                                    phone_iphone
                                </span>IOS</a></li>
                        <li><a href="#"><span class="material-symbols-outlined style">
                                    desktop_windows
                                </span>Microsoft</a></li>

                    </ul>

                    <ul class="box input-box">
                        <li class="link_name"><span class="material-symbols-outlined style">
                                mail
                            </span> <b> Subscribe</b></li>
                        <li><input type="text" placeholder="Enter your email"></li>
                        <li><input type="button" value="Subscribe"></li>
                    </ul>
                </div>
            </div>
            <div class="bottom-details">
                <div class="bottom_text">
                    <span class="copyright_text">Copyright &#169; 2023 <a href="#">Ma'ed </a>All rights reserved</span>
                    <span class="policy_terms">
                        <a href="#">Privacy policy</a>
                        <a href="#">Terms & condition</a>
                    </span>
                </div>
            </div>
        </footer>






        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script>
            var indBtn = document.getElementsByClassName("btn");
            var slid = document.getElementById("slide");

            function removeActive() {
                for (i = 0; i < 4; i++) {
                    indBtn[i].classList.remove("activeInd");
                }
            }
            indBtn[0].onclick = function() {
                slide.style.transform = "translateX(0px)";
                removeActive();
                this.classList.add("activeInd");
            }
            indBtn[1].onclick = function() {
                slide.style.transform = "translateX(-800px)";
                removeActive();
                this.classList.add("activeInd");
            }
            indBtn[2].onclick = function() {
                slide.style.transform = "translateX(-1600px)";
                removeActive();
                this.classList.add("activeInd");
            }
            indBtn[3].onclick = function() {
                slide.style.transform = "translateX(-2400px)";
                removeActive();
                this.classList.add("activeInd");
            }
        </script>

</body>

</html>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="../Scripts/home.js"></script>