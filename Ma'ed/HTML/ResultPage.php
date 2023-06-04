<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../styles/resultpage.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://fonts.cdnfonts.com/css/dosis" rel="stylesheet">
  
 
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  



  </head>

<body>
  <div class="wrapper">
    <header class="header" id="header">
      <section class="logo" id="logo">
        <a href="home.php"><img src="../pics/Maed_logo1-removebg.png" alt="" /></a>
      </section>
      <section class="navigation" id="navigation">
        <input type="checkbox" id="dropcheckbox" />

        <label id="dropcheckbox_label" for="dropcheckbox">
          <span class="material-symbols-outlined"> menu </span>Menu
        </label>


        <ul>
          <li id="normal">
            <a href="home.php"><span class="material-symbols-outlined style" style="line-height: 1">Home</span>Home</a>
          </li>
          <li id="normal">
            <a href="home.php #aboutus"><span class="material-symbols-outlined">groups</span> About
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
                    <a href="account.php"><span class="material-symbols-outlined ">login</span>Account</a>
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
  </div>

  <div class="wrapper2">
    <?php
    include('connect.php');
    $foodid = $_GET['status'];
    $sql = "SELECT * FROM food WHERE foodID=$foodid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    // print_r($row);
    ?>
    <div class="title">
      <h1>
        <?php echo $row['foodName'] ?>
      </h1>

      <?php
      // Start the session and connect to the database
      
      include('connect.php');

      if (isset($_SESSION['username'])) {
        // Check if the item is already bookmarked
        $username = $_SESSION["username"];

        $sql = "SELECT id FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $userid = mysqli_fetch_array($result);


        $result = mysqli_query($conn, "SELECT * FROM user_foods WHERE user_id = $userid[0] AND foodID = $foodid");
        if (mysqli_num_rows($result) > 0) {
          $bookmarked = true;
        } else {
          $bookmarked = false;
        }

        // Handle the bookmark button click
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if ($bookmarked) {
            // Remove the bookmark
            mysqli_query($conn, "DELETE FROM user_foods WHERE user_id = $userid[0] AND foodID = $foodid");
            $bookmarked = false;
          } else {
            // Add the bookmark
            mysqli_query($conn, "INSERT INTO user_foods (user_id, foodID) VALUES ($userid[0], $foodid)");
            $bookmarked = true;
          }
        }

        // Output the bookmark button
        if ($bookmarked) {
          echo '<form action="" method="post"> <button type="submit" id="bookmark" name="bookmark"><span id="bk1" class="material-symbols-outlined" >
bookmark</span>bookmark</button></form>';
        } else {
          echo '<form action="" method="post"> <button type="submit" id="bookmark" name="bookmark"><span id="bk2" class="material-symbols-outlined">
bookmark</span>bookmark</button></form>';
        }
      } else {
        echo "<a href=signin.php><button class=account>
      <span class=material-symbols-outlined>person</span>Account
    </button></a>";
      }
      ?>

    </div>


    <p id="information">
      <?php echo $row['descriptions'] ?>
    </p>
    <!-- <div class="img" style="background-image: url(' <?=$row['foodImg'] ?>');"></div> -->

    <iframe width="100%" height="500px" src="<?=$row['youtube'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    <div class="description">
      <div class="ingredient-info">
        <div class="info">
          <div class="prep-time">
            <h5>PREP TIME</h5>
            <p>
              <?php echo $row['prepTime'] ?>
            </p>
          </div>
          <div class="prep-time">
            <h5>PREP TIME</h5>
            <p>
              <?php echo $row['prepTime'] ?>
            </p>
          </div>
          <div class="servings">
            <h5>SERVINGS</h5>
            <p>
              <?php echo $row['servingSize'] ?>
            </p>
          </div>
        </div>
        <div class="ingredients">
          <h3>Ingredients</h3>

          <?php
          $ingStr = $row['ingredients'];
          $index = true;
          while (true) {
            $index = strpos($ingStr, "\n");
            if ($index == false) {
              break;
            }
            echo "<label><input type='checkbox'>    ";
            for ($i = 0; $i <= $index; $i++) {
              echo $ingStr[$i];
            }
            echo "</label>";
            $ingStr = substr($ingStr, $index + 1);
          }
          // foreach ($ingArray as $i) {
          //   if (strstr($i, "\n")) {
          //     echo '<input type="checkbox" >';
          //   }
          // }
          

          // echo nl2br($row['ingredients']);
          ?>


        </div>
        <div class="instructions">
          <h3>Instructions</h3>

          <?php
          $insStr = $row['instructions'];
          $index = true;
          echo "<ol>";
          while (true) {
            $index = strpos($insStr, "\n");
            if ($index == false) {
              break;
            }
            echo "<li>";
            for ($i = 0; $i <= $index; $i++) {
              echo $insStr[$i];
            }
            echo "</li>";
            $insStr = substr($insStr, $index + 1);
          }
          echo "</ol>";
          // foreach ($ingArray as $i) {
          //   if (strstr($i, "\n")) {
          //     echo '<input type="checkbox" >';
          //   }
          // }
          

          // echo nl2br($row['ingredients']);
          ?>
        </div>

      </div>
      <div class="nutrition-facts">
        <h3>Nutrition Facts</h3>
        <?php
        include('connect.php');
        $foodid = $_GET['status'];
        $sql = "SELECT * FROM nutritionfact WHERE foodID=$foodid";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        ?>
        <section class="nutrition">

          <label for="" class="left">Calories</label>
          <label for="" class="rignt">
            <?php echo $row['calories'] ?>
          </label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Fat</label>
          <label for="" class="rignt">
            <?php echo $row['fat'] ?>
          </label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Protein</label>
          <label for="" class="rignt">
            <?php echo $row['protein'] ?>
          </label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Carbs</label>
          <label for="" class="rignt">
            <?php echo $row['carbs'] ?>
          </label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Cholestrol</label>
          <label for="" class="rignt">
            <?php echo $row['cholestrol'] ?>
          </label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Sodium</label>
          <label for="" class="rignt">
            <?php echo $row['sodium'] ?>
          </label>
        </section>

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



  <script type="module" src="../Scripts/jquery.js"></script>
  <script type="module" src="../Scripts/resultpage.js"></script>

</body>

</html>