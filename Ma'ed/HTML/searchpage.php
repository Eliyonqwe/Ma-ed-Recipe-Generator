<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/searchpage.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                            <a href="#"><span class="material-symbols-outlined style"
                                    style="line-height: 1">Home</span>Home</a>
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
                    <header class="title">
                        <h2>Pantry</h2>
                        <h4 id="ingredient-count">You have selected 0 ingredients</h4>
                        <label for="search">Search for Ingredient</label><br>
                        <a href="#"> <input type="search" id="pantry_search" placeholder="search"
                                list="pantry_options" />
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
                            <input name="check[]" type="checkbox" id="<?= $row['ingName']; ?>"
                                value="<?= $row['ingName']; ?>" /><label for="<?= $row['ingName']; ?>"><?= $row['ingName']; ?></label>
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



                    <?php
                    // if (array_key_exists('read', $_POST)) {
                    //     button();
                    // }
                    // function button()
                    // {
                    // }
                    

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
                    
                            include('connect.php');
                            // Create a comma-separated string of IDs
                            if (count($displayedfoodid) == 0) {
                                echo "<h3>No foods found!</h3>";
                            } else {
                                $id_list = (count($displayedfoodid) > 2) ? $displayedfoodid : implode(',', $displayedfoodid);

                                // Build the SQL query
                                $sql = "SELECT * FROM food WHERE foodID IN ($id_list)";

                                // Execute the query
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <div class="search_results">

                                    <?php

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
                                    
                                    }
                            }
                            ?>
                            </div>
                            <?php

                        } else {

                            echo "<h3>Please Select an Ingredient</h3>";
                        }
                    }
                    ?>
                    <script>
                        // Get all the div elements with class "result"
                        // Get all the div elements with class "result"
                        var results = document.querySelectorAll('.result');
                        //
                        // Loop through each div and add an event listener
                        results.forEach(function (div) {
                            div.addEventListener('click', function () {
                                // Do something when the div is clicked
                                console.log('Div clicked!');
                                id = this.querySelector('h3').getAttribute('id');
                                //console.log(id);
                                window.location.href = 'ResultPage.php?id=' + id;
                    
                            });
                        });


                    </script>


                </article>
        </form>
    </div>
    </div>
    <script type="module" src="../Scripts/jquery.js"></script>
    <script type="module" src="../Scripts/searchpage.js"></script>

</body>

</html>