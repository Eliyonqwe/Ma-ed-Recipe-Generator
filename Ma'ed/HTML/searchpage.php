<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/searchpage.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <!-- ---------------------------------------------- -->
    <div class="wrapper">
        <div class="header">
            <header class="header">
                <section class="logo">
                    <a href="home.html"><img src="../pics/Maed_logo1-removebg.png" alt="" /></a>
                </section>
                <section class="navigation">
                    <label id="dropcheckbox_label" for="dropcheckbox">
                        <span class="material-symbols-outlined"> menu </span>Menu
                    </label>

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
                        <!--           
              <li id="signup">
                <a href="#"><span class="material-symbols-outlined">help</span>Sign Up </a>
              </li> -->
                        <li id="account">
                            <a href="#"><button class="account">
                                    <span class="material-symbols-outlined">person</span>Account
                                </button>
                            </a>
                        </li>
                    </ul>

                    <!-- <button id="dropdown">
              <span class="material-symbols-outlined">menu</span> Menu
            </button> -->
                </section>
            </header>
        </div>

        <!-- ---------------------------------------------- -->

        <form action="" method="post">

            <div class="main">
                <aside class="ingredient">
                    <section class="type1">


                        <header class="title">
                            <h2>Pantry</h2>
                            <h4>You have selected 0 ingredients</h4>
                            <label for="search">Search for Ingredient</label>
                            <a href="#"> <input type="search" id="search" placeholder="search" />
                                <span class="material-symbols-outlined" style="background-color: white;
                 color: black;">search
                                </span>

                            </a>
                        </header>
                        <div class="collection">

                            <div class="container one">
                                <div class="ingridents-title">
                                    <h4>Vegetables</h4>
                                </div>
                                <div class="ingredients one">
                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "maed");
                                    $ing_query = "Select *from ingredient where ingType='Vegetables'";
                                    $query_run = mysqli_query($con, $ing_query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $ing) {
                                    ?>
                                            <input name="check[]" type="checkbox" id="<?= $ing['ingName']; ?>" value="<?= $ing['ingName']; ?>" /><label for="<?= $ing['ingName']; ?>"><?= $ing['ingName']; ?></label>
                                    <?php
                                        }
                                    } else {
                                        echo '<p>No record found</p>';
                                    }
                                    ?>

                                </div>
                            </div>

                            <div class="container two">

                                <div class="ingridents-title">
                                    <h4>Fruit</h4>
                                </div>
                                <div class="ingredients two">
                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "maed");
                                    $ing_query = "Select *from ingredient where ingType='fruit'";
                                    $query_run = mysqli_query($con, $ing_query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $ing) {
                                    ?>

                                            <input name="check[]" type="checkbox" id="<?= $ing['ingName']; ?>" value="<?= $ing['ingName']; ?>" /><label for="<?= $ing['ingName']; ?>"><?= $ing['ingName']; ?></label>
                                    <?php
                                        }
                                    } else {
                                        echo '<p>No record found</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="container three">

                                <div class="ingridents-title">
                                    <h4>Dairy</h4>
                                </div>
                                <div class="ingredients three">
                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "maed");
                                    $ing_query = "Select *from ingredient where ingType='dairy'";
                                    $query_run = mysqli_query($con, $ing_query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $ing) {
                                    ?>
                                            <input name="check[]" type="checkbox" id="<?= $ing['ingName']; ?>" value="<?= $ing['ingName']; ?>" /><label for="<?= $ing['ingName']; ?>"><?= $ing['ingName']; ?></label>

                                    <?php
                                        }
                                    } else {
                                        echo '<p>No record found</p>';
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="container four">

                                <div class="ingridents-title">
                                    <h4>Essentials</h4>
                                </div>
                                <div class="ingredients four">
                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "maed");
                                    $ing_query = "Select *from ingredient where ingType='essentials'";
                                    $query_run = mysqli_query($con, $ing_query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $ing) {
                                    ?>
                                            <input name="check[]" type="checkbox" id="<?= $ing['ingName']; ?>" value="<?= $ing['ingName']; ?>" /><label for="<?= $ing['ingName']; ?>"><?= $ing['ingName']; ?></label>
                                    <?php
                                        }
                                    } else {
                                        echo '<p>No record found</p>';
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="container five">

                                <div class="ingridents-title">
                                    <h4>Stew</h4>
                                </div>
                                <div class="ingredients five">
                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "maed");
                                    $ing_query = "Select *from ingredient where ingType='stew   '";
                                    $query_run = mysqli_query($con, $ing_query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $ing) {
                                    ?>
                                            <input name="check[]" type="checkbox" id="<?= $ing['ingName']; ?>" value="<?= $ing['ingName']; ?>" /><label for="<?= $ing['ingName']; ?>"><?= $ing['ingName']; ?></label>
                                    <?php
                                        }
                                    } else {
                                        echo '<p>No record found</p>';
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="container six">

                                <div class="ingridents-title">
                                    <h4>Type 1</h4>
                                </div>
                                <div class="ingredients six">
                                    <label for="ing1">ing1</label>

                                    <label for="ing2">ing2</label>

                                    <label for="ing3">ing3</label>

                                    <label for="ing4">ing4</label>

                                    <label for="ing1">ing1</label>

                                    <label for="ing2">ing2</label>

                                    <label for="ing3">ing3</label>

                                    <label for="ing4">ing4</label>

                                </div>
                            </div>


                            <fieldset>
                                <p>
                                    The only thing we assume you already have is salt and water
                                </p>
                            </fieldset>
                        </div>

                    </section>
                    <section class="type2"></section>
                    <section class="type3"></section>
                    <section class="type4"></section>
                    <section class="type5"></section>
                    <section class="type6"></section>
                </aside>
                <article class="article">
                    <h1>
                        Add your ingredients to get started Every ingredient you add unlocks
                        more recipes
                    </h1>
                    <br />
                    <input type="submit" name="find" value="Find My Recipe">

                    <?php
                    // if (array_key_exists('read', $_POST)) {
                    //     button();
                    // }
                    // function button()
                    // {
                    // }


                    if (isset($_POST["find"])) {

                        $selected_ingredient_id = [];


                        if (!empty($_POST["check"])) {
                            foreach ($_POST["check"] as $checked) {
                                $con = mysqli_connect("localhost", "root", "", "maed");
                                if (!$con) {
                                    die('Could not connect: ' . mysqli_connect_error());
                                }
                                $getID_query = "SELECT ingID from ingredient where ingName='$checked'";
                                $query_run = mysqli_query($con, $getID_query);
                                $foodid = mysqli_fetch_array($query_run);
                                array_push($selected_ingredient_id, $foodid[0]);
                            }
                        } else {

                            echo "<script>alert('Please Select an Ingredient')</script>";
                        }
                    }
                    ?>



                </article>
        </form>
    </div>
    </div>
</body>

</html>