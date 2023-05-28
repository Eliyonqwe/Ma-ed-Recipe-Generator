<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MA'ED | Recipe generator</title>
    <link rel="icon" type="image/x-icon" href="../pics/favicon.ico">
    <link rel="stylesheet" href="../Styles/searchfood.css" />
    <link href="https://fonts.cdnfonts.com/css/proxima-nova-2" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                        <a href="home.php"><span class="material-symbols-outlined"
                                style="line-height: 1">Home</span>Home</a>
                    </li>
                    <li id="normal">
                        <a href="#aboutus"><span class="material-symbols-outlined">groups</span> About
                            Us</a>
                    </li>
                    <li id="normal">
                        <a href="#">
                            <span class="material-symbols-outlined">help</span>FAQs</a>
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
                                        <a href="account.php"><span
                                                class="material-symbols-outlined ">Home</span>Account</a>
                                    </li>
                                    <li id="normal">
                                        <a href="favorites.php"><span
                                                class="material-symbols-outlined ">Star</span>Favorites</a>
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
    </div>
    <div class="main">
        <h1>Search Results </h1>
        <br>

        <input placeholder="Search..." type="text" name="searchtxt" id="search-input" value="<?php if(isset($_GET['searchtxt'])){
            echo $_GET['searchtxt'];
        }?>">
        <br>
        <div class="search-results">
            <?php
            include('connect.php');
            $sql = "SELECT * FROM food ORDER BY foodName ASC";
            $result = mysqli_query($conn, $sql);


            while ($row = mysqli_fetch_assoc($result)) {
                $foodName = $row['foodName'];
                $foodImg = $row['foodImg'];
                $description = substr($row['descriptions'], 0, 45) . '...';
                $id = $row['foodID'];
                ?>
                <div class="<?= $foodName . ' ' . 'result'; ?>" id="<?= strtolower($foodName); ?>">
                    <img src="<?= $foodImg; ?>" alt="<?= $foodName . ' ' . 'picture'; ?> ">
                    <h3>
                        <?= $foodName; ?>
                    </h3>

                    <p>
                        <?= $description; ?>
                    </p>
                    <button class="moreBtn">

                        <?php

                        // echo $id;
                        echo "<a href='ResultPage.php?status=" . $id . "'>More</a>";
                        ?>
                    </button>

                </div>

                <?php
            }

            // Close the database connection
            mysqli_close($conn);
            ?>

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
                        <li class="link_name"><span class="material-symbols-outlined style">explore</span><b>Explore</b></li>
                        <li><a href="#"><span class="material-symbols-outlined style">search</span>Search Food</a></li>
                        <li><a href="#"><span class="material-symbols-outlined style">login </span>Login</a></li>
                        <li><a href="#"><span class="material-symbols-outlined style">logout</span>Logout</a></li>

                    </ul>

                    <ul class="box">
                        <li class="link_name"><span class="material-symbols-outlined style">download</span> <b> Get our App</b></li>
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



    <script src="../Scripts/favorites.js"></script>
    <script src="../Scripts/searchfood.js"></script>
</body>

</html>