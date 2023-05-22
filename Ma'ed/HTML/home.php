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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
  <noscript>You need to enable JavaScript to run this site.</noscript>
  <div class="wrapper">
    <header class="header" id="header">
      <section class="logo" id="logo">
        <a href="home.html"><img src="../pics/Maed_logo1-removebg.png" alt="" /></a>
      </section>
      <section class="navigation" id="navigation">
        <input type="checkbox" id="dropcheckbox" />

        <label id="dropcheckbox_label" for="dropcheckbox">
          <span class="material-symbols-outlined"> menu </span>Menu
        </label>


        <ul>
          <li id="normal">
            <a href="#"><span class="material-symbols-outlined style" style="line-height: 1">Home</span>Home</a>
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
          <!--           
            <li id="signup">
              <a href="#"><span class="material-symbols-outlined">help</span>Sign Up </a>
            </li> -->
          <li id="account">                            
            <?php
            session_start();
            
                            if (isset($_SESSION['username'])) {
                                $username = $_SESSION['username'];
                                ?>
                                    <div id="pic" class="pic"><img src="../pics/photo_2021-05-31_08-56-23.jpg" alt=""></div>
                                    <div  class="profile">
                                        <ul id="profile">
                                            <li id="normal">
                                                <a href="#"><span class="material-symbols-outlined ">Home</span>Account</a>
                                            </li>
                                            <li id="normal">
                                                <a href="#"><span class="material-symbols-outlined ">Star</span>Favorites</a>
                                            </li>
                                            <li id="normal">
                                                <a href="logout.php"><span class="material-symbols-outlined ">logout</span>Sign out</a>
                                            </li>
                                        </ul>
                                    </div>
                                   
                                <?php
                            } else {
                                ?>
                                <a href="signin.php"><button class="account">
                                <span class="material-symbols-outlined">person</span>Account 
                            </button></a><?php                       
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
        <button class="button-start">
          <b> GET STARTED</b>
          <span class="material-symbols-outlined"> arrow_forward </span>
        </button>
      </aside>
    </div>
    <div class="aboutus" id="aboutus">
      <div class="aboutus_pic">
        <img src="../pics/about us_pic.jpg" alt="" />
      </div>
      <div class="aboutus_text">
        <h1>About Us</h1>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui,
          corporis id eveniet deleniti ducimus quis alias suscipit tempora
          facilis velit esse a.
        </p>
        <br />
        <p>
          Sit labore, sequi eaque voluptates harum consectetur! Adipisci,
          deserunt. Aspernatur a in consectetur repellat vitae nisi
          consequuntur soluta alias qui dolores sapiente numquam ab
          consequatur, et vel! Aliquam.
        </p>
        <br />
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga
          tempora quam vel. Eaque sunt, maiores praesentium reprehenderit
          excepturi eligendi, dicta facere sequi nihil aut tempore architecto
          unde possimus provident, aliquam omnis. Distinctio eaque sapiente,
          autem voluptatem repellendus iste enim nam ipsa, culpa unde delectus
          dolorem repudiandae, dicta harum et temporibus!
        </p>
      </div>
    </div>
    <div class="grid_gallery">
      <header class="exploretitle">
        <h3>Explore different Ethiopian Cuisines</h3>
      </header>
      <div class="gridone">
        <div class="gridone_text">
          <div class="gridone_image">
            <img src="../Logo/https __cdn.cnn.com_cnnnext_dam_assets_190205205048-kitfo.jpg" alt="" />
          </div>
          <h1 id="gridtitle">Kitfo</h1>
          <p id="gridtext">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam
            non, dolorum eos illum sed odio!
          </p>
          <button id="clickgrid"><a href="#">Click Here &rarr;</a></button>
        </div>
      </div>
      <div class="gridtwo">
        <div class="gridtwo_text">
          <div class="gridtwo_image">
            <img src="../Logo/190205144959-shekla-tibs.jpg" alt="" />
          </div>
          <h1 id="gridtitle">Beyanetu</h1>
          <p id="gridtext">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam
            non, dolorum eos illum sed odio!
          </p>
          <button id="clickgrid"><a href="#">Click Here &rarr;</a></button>
        </div>
      </div>
      <div class="gridthree">
        <div class="gridthree_text">
          <div class="gridthree_image">
            <img src="../Logo/190205144959-shekla-tibs.jpg" alt="" />
          </div>
          <h1 id="gridtitle">Shekla Tibs</h1>
          <p id="gridtext">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam
            non, dolorum eos illum sed odio!
          </p>
          <button id="clickgrid"><a href="#">Click Here &rarr;</a></button>
        </div>
      </div>
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


    <footer>
      <div class="footer-content">

        <h3>MA-ED Recpie Generator</h3>
        <p>Footer content .....Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo consequatur harum
          dolores cupiditate atque! Quasi, inventore possimus sunt nulla, excepturi dicta eos impedit err
          or sint quae, obcaecati eaque voluptas porro.</p>
        <ul class="socials">
          <li><a href="#"> <i class="facebook"></i> </a></li>
          <li><a href="#"> <i class="linkedin"></i> </a></li>
          <li><a href="#"> <i class="twitter"></i> </a></li>
          <li><a href="#"> <i class="instagram"></i> </a></li>
        </ul>

      </div>

      <div class="footer-bottom">
        <p>copyright &copy;2021 <a href="#">ME-AD</a></p>
      </div>

      <div class="footer-menu">
        <ul class="foot-menu">
          <li><a href="">Home</a></li>
          <li><a href="">About us</a></li>
          <li><a href="">FAQ</a></li>
        </ul>
      </div>



    </footer>




</html>
</div>
</body>

</html>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="../Scripts/home.js"></script>