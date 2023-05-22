<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../styles/resultpage.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
    $id = $_GET['id'];
    echo "The value of id is: " . $id;
    include('connect.php');
    $sql = "SELECT * FROM `food` WHERE foodID=($id)";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Loop through the results
    while ($row = mysqli_fetch_assoc($result)) {
      // Do something with each row
      ?>
      <h1>
        <?= $row['foodName']; ?>
      </h1>
      <p id="information">
        <?= $row['description']; ?>
      </p>
      <img src="<?= $row['foodImg']; ?>" alt="<?= $row['foodName'] . ' ' . 'picture'; ?> ">
      <div class="description">
        <div class="ingredient-info">
          <div class="info">
            <div class="prep-time">
              <h5>PREP TIME</h5>
              <p>
                <?= $row['prepTime']; ?>
              </p>
            </div>
            <div class="cook-time">
              <h5>COOK TIME</h5>
              <p>
                <?= $row['cookTime']; ?>
              </p>
            </div>
            <div class="servings">
              <h5>SERVINGS</h5>
              <p>
                <?= $row['servingSize']; ?>
              </p>
            </div>
          </div>
          <div class="ingredients">
            <h3>Ingredients</h3>
            <?php
            $string = $row['ingredients'];
            $array = explode(",", $string);

            foreach ($array as $element) {
              ?><label><input type="checkbox">
                <?= $element; ?>
              </label>
              <?php
            }
            ?>
          </div>
          <div class="instructions">
            <h3>Instructions</h3>
            <ol>
              <?php
              $string = $row['instructions'];
              $array = explode(".", $string);

              foreach ($array as $element) {
                ?>
                <li>
                  <?= $element . '.'; ?>
                </li>
                <?php
              }
              ?>
            </ol>
          </div>
        </div>
        <?php
    }
    ?>
      <div class="nutrition-facts">
        <h3>nutrition Facts</h3>
        <?php
        include('connect.php');
        $sql = "SELECT * FROM `nutritionfact` WHERE foodID=($id)";

        // Execute the query
        $result = mysqli_query($conn, $sql);

        // Loop through the results
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <section class="nutrition">
            <label for="" class="left">Calories</label>
            <label for="" class="rignt">
              <?= $row['calories']; ?>
            </label>
          </section>
          <section class="nutrition">
            <label for="" class="left">Fat</label>
            <label for="" class="rignt">
              <?= $row['fat']; ?>
            </label>
          </section>
          <section class="nutrition">
            <label for="" class="left">Protein</label>
            <label for="" class="rignt">
              <?= $row['protein']; ?>
            </label>
          </section>
          <section class="nutrition">
            <label for="" class="left">Carbs</label>
            <label for="" class="rignt">
              <?= $row['carbs']; ?>
            </label>
          </section>
          <section class="nutrition">
            <label for="" class="left">Cholestrol</label>
            <label for="" class="rignt">
              <?= $row['cholestrol']; ?>
            </label>
          </section>
          <section class="nutrition">
            <label for="" class="left">Sodium</label>
            <label for="" class="rignt">
              <?= $row['sodium']; ?>
            </label>
          </section>

          <?php
        }
        ?>
      </div>

    </div>
  </div>

</body>

</html>