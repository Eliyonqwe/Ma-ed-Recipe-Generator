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
    $sql = "SELECT * FROM food WHERE foodID IN ($id)";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Loop through the results
    while ($row = mysqli_fetch_assoc($result)) {
      // Do something with each row
      ?>
      <div class="<?= $row['foodName'] . ' ' . 'result'; ?>">
        <img src="<?= $row['foodImg']; ?>" alt="<?= $row['foodName'] . ' ' . 'picture'; ?> ">
        <h3 id="<?= $row['foodID']; ?>">
          <?= $row['foodName']; ?>
        </h3>
        <p>
          <?= $row['description']; ?>
        </p>
      </div>
      <?php
      $id[] = $row['foodID'];
    }

    ?>


    <h1>Tibs</h1>
    <p id="information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab suscipit dolorum, obcaecati
      doloribus vero quidem laboriosam ipsam rerum magni?</p>
    <img src="../pics/about us_pic.jpg" alt="" srcset="">

    <div class="description">
      <div class="ingredient-info">
        <div class="info">
          <div class="prep-time">
            <h5>PREP TIME</h5>
            <p>15 MIN</p>
          </div>
          <div class="prep-time">
            <h5>PREP TIME</h5>
            <p>15 MIN</p>
          </div>
          <div class="servings">
            <h5>SERVINGS</h5>
            <p>4 PEOPLE</p>
          </div>
        </div>
        <div class="ingredients">
          <h3>Ingredients</h3>
          <label><input type="checkbox">1 pound of beef, cut into small cubes</label>
          <label><input type="checkbox">1 onion, chopped</label>
          <label><input type="checkbox">2 tomatoes, chopped</label>
          <label><input type="checkbox">2-3 jalapeno peppers, chopped</label>
          <label><input type="checkbox">2 tablespoons of berbere spice</label>
          <label><input type="checkbox">2 tablespoons of oil or butter</label>
          <label><input type="checkbox">Salt and pepper to taste</label>
          <label><input type="checkbox">Injera bread</label>
        </div>
        <div class="instructions">
          <h3>Instructions</h3>
          <ol>
            <li>Heat the oil or butter in a large skillet over medium-high heat.</li>
            <li>Add the chopped onions and sauté until they are translucent.</li>
            <li>Add the beef cubes to the skillet and cook until they are browned on all sides.</li>
            <li>Add the chopped tomatoes and jalapeno peppers to the skillet and stir well.</li>
            <li>Add the berbere spice to the skillet and stir well to coat the meat and vegetables.</li>
            <li>Reduce the heat to medium-low and let the tibs simmer for 10-15 minutes, stirring occasionally.</li>
            <li>Season with salt and pepper to taste.</li>
            <li>Serve the tibs hot with injera bread on the side.</li>
          </ol>
        </div>

      </div>
      <div class="nutrition-facts">
        <h3>nutrition Facts</h3>
        <section class="nutrition">
          <label for="" class="left">Calories</label>
          <label for="" class="rignt">29.5g</label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Calories</label>
          <label for="" class="rignt">29.5g</label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Calories</label>
          <label for="" class="rignt">29.5g</label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Calories</label>
          <label for="" class="rignt">29.5g</label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Calories</label>
          <label for="" class="rignt">29.5g</label>
        </section>
        <section class="nutrition">
          <label for="" class="left">Calories</label>
          <label for="" class="rignt">29.5g</label>
        </section>

      </div>
    </div>

  </div>


  <script type="module" src="jquery.js"></script>
  <script type="module" src="searchpage.js"></script>

</body>

</html>