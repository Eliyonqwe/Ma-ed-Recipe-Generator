<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../styles/resultpage.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
  <div class="wrapper">

    <div class="header">
      <header class="header">
        <section class="logo">
          <a href="home.html"><img src="../pics/Maed_logo1-removebg.png" alt="" /></a>
        </section>
        <section class="navigation">
          <p id="dropcheckbox_label" for="dropcheckbox">
            <span class="material-symbols-outlined"> menu </span>Menu
          </p>

          <ul>
            <li id="normal">
              <a href="#"><span class="material-symbols-outlined style" style="line-height: 1">Home</span>Home</a>
            </li>
            <li id="normal">
              <a href="#"><span class="material-symbols-outlined">groups</span> About
                Us</a>
            </li>
            <li id="normal">
              <a href="#">
                <span class="material-symbols-outlined">help</span>FAQs</a>
            </li>
            <li id="separator"><a href="#">|</a></li>
            <li id="account">
              <a href="#"><button class="account">
                  <span class="material-symbols-outlined">person</span>Account
                </button>
              </a>
            </li>
          </ul>
        </section>
      </header>
    </div>
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
    <h1><?php echo $row['foodName'] ?></h1>
    <p id="information"><?php echo $row['description'] ?></p>
    <img src="../pics/about us_pic.jpg" alt="" srcset="">

    <div class="description">
      <div class="ingredient-info">
        <div class="info">
          <div class="prep-time">
            <h5>PREP TIME</h5>
            <p><?php echo $row['prepTime'] ?></p>
          </div>
          <div class="prep-time">
            <h5>PREP TIME</h5>
            <p><?php echo $row['prepTime'] ?></p>
          </div>
          <div class="servings">
            <h5>SERVINGS</h5>
            <p><?php echo $row['servingSize'] ?></p>
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
          <label for="" class="rignt"><?php echo  $row['calories'] ?></label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Fat</label>
          <label for="" class="rignt"><?php echo  $row['fat'] ?></label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Protein</label>
          <label for="" class="rignt"><?php echo  $row['protein'] ?></label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Carbs</label>
          <label for="" class="rignt"><?php echo  $row['carbs'] ?></label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Cholestrol</label>
          <label for="" class="rignt"><?php echo  $row['cholestrol'] ?></label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Sodium</label>
          <label for="" class="rignt"><?php echo  $row['sodium'] ?></label>
        </section>

      </div>
    </div>

  </div>


  <script type="module" src="jquery.js"></script>
  <script type="module" src="searchpage.js"></script>

</body>

</html>