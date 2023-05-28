<?php
session_start();
$_SESSION['array'] = [];
?>

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
    <link href="https://fonts.cdnfonts.com/css/dosis" rel="stylesheet">
</head>

<body>
    <?php
    function displayDiv($result)
    {
    ?>
        <div class="search_results">
            <script>
                var sortbtn = document.getElementsByClassName('sortbtn');

                function displaySortbtn() {
                    sortbtn[0].style.display = 'block';
                    sortbtn[1].style.display = 'block';
                    console.log('done');
                }
                displaySortbtn();
            </script>
            <?php

            // $gg = 1;
            // Loop through the results
            while ($row = mysqli_fetch_assoc($result)) {
                // Do something with each row
                $foodName = $row['foodName'];
                $foodImg = $row['foodImg'];
                $description = substr($row['descriptions'], 0, 45) . '...';
                $id = $row['foodID'];
                // Do something with each row
            ?>
                <div class="<?= $foodName . ' ' . 'result'; ?>" id="<?= strtolower($foodName);?>">
                    <img src="<?= $foodImg; ?>" alt="<?= $foodName . ' ' . 'picture'; ?> ">
                    <h3>
                        <?= $foodName; ?>
                    </h3>

                    <p>
                        <?= $description; ?> description
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
        }
        ?>

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

        <!-- ---------------------------------------------- -->

        <form action="" method="post">

            <div class="main">
                <aside id="ingredient" class="ingredient">
                    <header class="title">
                        <h2>Pantry</h2>
                        <h4 id="ingredient-count">You have selected 0 ingredients</h4>
                        <label for="search">Search for Ingredient</label><br>
                        <a href="#"> <input type="search" id="pantry_search" placeholder="search" list="pantry_options" />
                            <span id="pantry_searchbtn" class="material-symbols-outlined" style="background-color: white;
                            color: black;">search
                            </span>
                            <datalist id="pantry_options">
                                <?php
                                include('connect.php');
                                $sql = "SELECT * FROM ingredient ORDER BY ingName ASC";
                                $result = mysqli_query($conn, $sql);

                                // Loop through the results and display them by type
                                $current_type = "";
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Display the ingredient name and description
                                    echo "<option value='" . strtolower($row['ingName']) . "'>" . "</option>";
                                }

                                // Close the database connection
                                mysqli_close($conn);
                                ?>
                            </datalist>
                        </a>
                    </header>
                    <div class="collection">
                        <?php
                        include('connect.php');
                        $sql = "SELECT * FROM ingredient ORDER BY ingType";
                        $result = mysqli_query($conn, $sql);

                        // Loop through the results and display them by type
                        $current_type = "";
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['ingType'] != $current_type) {
                                // Close the previous container div if it exists
                                if ($current_type != "") {
                                    echo "</div>";
                                    echo "</div>";
                                }
                                // Start a new section for this type
                                $current_type = $row['ingType'];
                                echo "<div class='container " . strtolower($current_type) . "'>";
                                echo "<div class='ingredients-title'>";
                                echo "<h4>" . $current_type . "</h4>";
                                echo "</div>";
                                echo "<div class='ingredients " . strtolower($current_type) . "'>";
                            }
                            // Display the ingredient name and description
                            // echo " <label id='" . strtolower($row['name']) . "'>" . $row['name'] . "</label>";
                        ?>
                            <input name="check[]" type="checkbox" id="<?= $row['ingName']; ?>" value="<?= $row['ingName']; ?>" /><label id="<?= strtolower($row['ingName']) ; ?>" for="<?= $row['ingName']; ?>"><?= $row['ingName']; ?></label>
                        <?php
                        }
                        // Close the last container div
                        echo "</div>";
                        echo "</div>";
                        // Close the database connection
                        mysqli_close($conn);
                        ?>
                    </div>
                    <fieldset>
                        <p>
                            The only thing we assume you already have is salt and water
                        </p>
                    </fieldset>

                </aside>
                <article class="article">
                    <h1>
                        Select your ingredients to get started Every ingredient you add unlocks
                        more recipes
                    </h1>
                    <br />
                    <input type="submit" name="find" value="Find My Recipe">
                    <div class="sortsec">
                        <ul id="sortType">
                            <li class="sortLabel">Sort By</li>
                            <br>
                            <li><button type="submit" name="sortNameAsc" class="sortbtn">Name(A→Z)</button></li>
                            <li><button type="submit" name="sortNameDesc" class="sortbtn">Name(Z→A)</button></li>

                            <li> <button type="submit" name="sortTypeAsc" class="sortbtn">Type(A→Z)</button></li>
                            <li> <button type="submit" name="sortTypeDesc" class="sortbtn">Type(Z→A)</button></li>
                        </ul>
                    </div>

                    <?php
                    // ascending order sort for name
                    if (isset($_POST["sortNameAsc"])) {
                        include('connect.php');
                        $id_list = (count($_SESSION['array']) < 2) ? implode('', $_SESSION['array']) : implode(',', $_SESSION['array']); // Create a comma-separated string of IDs
                        $sql = "SELECT * FROM food WHERE foodID IN ($id_list) order by foodName  ";  // Build the SQL query
                        $result = mysqli_query($conn, $sql); // Execute the query
                        displayDiv($result);
                    }
                    // descending order sort for name
                    else if (isset($_POST["sortNameDesc"])) {
                        include('connect.php');
                        $id_list = (count($_SESSION['array']) < 2) ? implode('', $_SESSION['array']) : implode(',', $_SESSION['array']); // Create a comma-separated string of IDs
                        $sql = "SELECT * FROM food WHERE foodID IN ($id_list) order by foodName  ";  // Build the SQL query
                        $result = mysqli_query($conn, $sql); // Execute the query
                        displayDiv($result);
                    }
                    // ascending order sort for type
                    if (isset($_POST["sortTypeAsc"])) {
                        include('connect.php');
                        $id_list = (count($_SESSION['array']) < 2) ? implode('', $_SESSION['array']) : implode(',', $_SESSION['array']); // Create a comma-separated string of IDs
                        $sql = "SELECT * FROM food WHERE foodID IN ($id_list) order by foodType"; // Build the SQL query
                        $result = mysqli_query($conn, $sql); // Execute the query
                        displayDiv($result);
                    }
                    // descending order sort for type
                    else if (isset($_POST["sortTypeDesc"])) {
                        include('connect.php');
                        $id_list = (count($_SESSION['array']) < 2) ? implode('', $_SESSION['array']) : implode(',', $_SESSION['array']); // Create a comma-separated string of IDs
                        $sql = "SELECT * FROM food WHERE foodID IN ($id_list) order by foodName  ";  // Build the SQL query
                        $result = mysqli_query($conn, $sql); // Execute the query
                        displayDiv($result);
                    }




                    if (isset($_POST["find"])) {

                        $selected_ingredient_id = []; //holds selected ingredients id


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
                            function foodIng()
                            {
                                $data = [[]];
                                $con = mysqli_connect("localhost", "root", "", "maed");
                                $query = "SELECT *from fooding";
                                $get_fooding = mysqli_query($con, $query);
                                while ($row = mysqli_fetch_array($get_fooding)) {
                                    array_push($data, array($row["foodID"], $row["ingID"]));
                                }
                                return $data;
                            }
                            $food_ing_Table = foodIng();
                            $foodList_id = [];
                            foreach ($selected_ingredient_id as $ing_id) {
                                foreach ($food_ing_Table as $f) {
                                    if (isset($f[1])) {
                                        if ($ing_id == $f[1]) {
                                            array_push($foodList_id, $f[0]);
                                        }
                                    }
                                }
                            }
                            $distinct_foodList_id = array_unique($foodList_id);
                            $count_foodList_id = array_count_values($foodList_id);
                            ksort($count_foodList_id);




                            $displayedfoodid = [];
                            foreach ($count_foodList_id as $foodid => $count) {

                                $con = mysqli_connect("localhost", "root", "", "maed");
                                $query = "SELECT Count(ingid) from fooding where foodid='$foodid'";
                                $get_fooding = mysqli_query($con, $query);
                                $requiredIngredient_count = mysqli_fetch_array($get_fooding);

                                if ($count >= floor((($requiredIngredient_count[0]) * 0.75))) {
                                    if ($requiredIngredient_count[0] == $count) {
                                        echo 'Exact Match </br>';
                                    }
                                    array_push($displayedfoodid, $foodid);
                                }
                            }

                           print_r($displayedfoodid); //Holds the foodids of the selected ingredients.( you can make these foods with 75% and above of the selected ingredients) 
                            $_SESSION['array'] = $displayedfoodid;

                            if (count($displayedfoodid) == 0) {
                                echo '<h3>No food to display!</h3>';
                            } else {
                                ?>
                                <br>
                                <br>
                                <input  id="search-input" placeholder="Search..." type="text">
                                <?php
                                include('connect.php');
                                // Create a comma-separated string of IDs
                                $id_list = (count($displayedfoodid) < 2) ? implode('', $displayedfoodid) : implode(',', $displayedfoodid);

                                // Build the SQL query
                                $sql = "SELECT * FROM food WHERE foodID IN ($id_list)";

                                // Execute the query
                                $result = mysqli_query($conn, $sql);
                    ?>
                                <script>
                                    var sortbtn = document.getElementsByClassName('sortbtn');
                                    var sortLbl = document.getElementsByClassName('sortLabel');

                                    function displaySortbtn() {
                                        sortLbl[0].style.display = 'block';
                                        sortbtn[0].style.display = 'block';
                                        sortbtn[1].style.display = 'block';
                                        sortbtn[2].style.display = 'block';
                                        sortbtn[3].style.display = 'block';
                                        console.log('done');
                                    }
                                    displaySortbtn();
                                </script>

                            <?php

                                displayDiv($result);
                            }
                            ?>
            </div>
    <?php
                        } else {

                            echo "<script>alert('Please Select an Ingredient')</script>";
                        }
                    }
    ?>





    </article>
        </form>
        </div>
        </div>
        <script type="module" src="../Scripts/jquery.js"></script>
        <script type="module" src="../Scripts/searchpage.js"></script>

<br>
<br>
<br>

        
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


        

</body>

</html>