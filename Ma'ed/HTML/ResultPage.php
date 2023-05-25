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
</head>

<body>
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
          <li id="separator"><a href="#">|</a></li>
          <?php
          if (isset($_SESSION['username'])) {
            ?>
            <li class="phone" id="normal">
              <a href="#"><span class="material-symbols-outlined ">Home</span>Account</a>
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
                    <a href="#"><span class="material-symbols-outlined ">login</span>Account</a>
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
      <?php echo $row['description'] ?>
    </p>
    <img src="../pics/about us_pic.jpg" alt="" srcset="">

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


  <script type="module" src="../Scripts/jquery.js"></script>
  <script type="module" src="../Scripts/resultpage.js"></script>

</body>

</html>