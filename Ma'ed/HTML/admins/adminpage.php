<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/adminpage.css">
    <script src="https://kit.fontawesome.com/a837bf0db4.js" crossorigin="anonymous"></script>

    <style>
        input[type="checkbox"] {

            cursor: pointer;
        }

        input[type="checkbox"]+label {
            border-radius: 10px;
            padding: 5px;
            background-color: rgb(234, 234, 234);

            cursor: pointer;
        }

        input[type="checkbox"]:checked+label {
            border-color: #f88e28;
            background-color: #f88e28;
            border-radius: 10px;
            padding: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="login">

        <div class="wrapper">
            <div class="sidebar">
                <section class="logo" id="logo">
                    <a href="home.php"> <img src="../../pics/Maed_logo1-removebg.png" alt="" /></a>
                </section>
                <h3>Hello Admin</h3>
                <div class="link">
                    <a id="addfood"> Add Food</a>
                    <a id="adding">Add Ingredient</a>
                    <a id="users"> Users</a>

                    <div class="footer">
                        <a href="">Sign out</a>
                    </div>
                </div>

            </div>

            <!-- Page content -->
            <div id="addFoodPage">

                <h1>Add Food</h1>
                <form action="" method="post" autocomplete="off">
                    <label for="name">Food Name: </label>
                    <input type="text" name="name" id="name" value="8" />
                    <br>
                    <br>
                    <label for="foodimg">Food Image(Link): </label>
                    <input type="text" name="foodimg" id="foodimg" value="8" />
                    <br>
                    <br>
                    <label for="foodtype">Food Type: </label>
                    <input type="text" name="foodtype" id="foodtype" value="8" />
                    <br>
                    <br>
                    <label for="preptime">Food Time: </label>
                    <input type="text" name="preptime" id="preptime" value="8" />
                    <br>
                    <br>
                    <label for="servingsize">Serving Size: </label>
                    <input type="text" name="servingsize" id="servingsize" value="8" />
                    <br>
                    <br>
                    <label for="description">Description: </label>
                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    <br>
                    <br>
                    <label for="ingredients">Ingredients: </label>
                    <textarea name="ingredients" id="ingredients" cols="30" rows="10"></textarea>

                    <br>
                    <br>
                    <label for="instructions">Instructions: </label>
                    <!-- <input type="text" name="instructions" id="instructions" /> -->
                    <textarea name="instructions" id="instructions" cols=" 30" rows="10"></textarea>
                    <br>
                    <br>
                    <label for="calories">calories: </label>
                    <input type="text" name="calories" id="calories" value="8" />
                    <br>
                    <br>
                    <label for="fat">Fat: </label>
                    <input type="text" name="fat" id="fat" value="8" />
                    <br>
                    <br>
                    <label for="protein">protein: </label>
                    <input type="text" name="protein" id="protein" value="8" />
                    <br>
                    <br>
                    <label for="carbs">Carbs: </label>
                    <input type="text" name="carbs" id="carbs" value="8" />
                    <br>
                    <br>
                    <label for="cholestrol">cholestrol: </label>
                    <input type="text" name="cholestrol" id="cholestrol" value="8" />
                    <br>
                    <br>
                    <label for="sodium">sodium: </label>
                    <input type="text" name="sodium" id="sodium" value="8" />
                    <br>
                    <br>


                    <p>Select Ingredient:</p>

                    <?php
                    $con = mysqli_connect("localhost", "root", "", "maed");
                    $ing_query = "Select *from ingredient order by ingType,ingName";
                    $query_run = mysqli_query($con, $ing_query);

                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $ing) {
                    ?>

                            <input type="checkbox" name="ingList[]" value="<?= $ing['ingName']; ?>" /><?= $ing['ingName']; ?>
                    <?php
                        }
                    } else {
                        echo '<p>No record found</p>';
                    }
                    ?>
                    <br>
                    <br>
                    <input type="submit" value="Submit" name="submit-food" />
                </form>
                <?php

                if (isset($_POST["submit-food"])) {
                    echo "<script>alert('Please adadXxadAAD')</script>";
                    $foodName = $_POST["name"];
                    $ingList = $_POST["ingList"];
                    $foodimg = $_POST["foodimg"];
                    $foodtype = $_POST["foodtype"];
                    $preptime = $_POST["preptime"];
                    $servingsize = $_POST["servingsize"];
                    $description = $_POST["description"];
                    $ingredients = $_POST["ingredients"];
                    $instructions = $_POST["instructions"];
                    $calories = $_POST["calories"];
                    $fat = $_POST["fat"];
                    $protein = $_POST["protein"];
                    $carbs = $_POST["carbs"];
                    $cholestrol = $_POST["cholestrol"];
                    $sodium = $_POST["sodium"];


                    $ingid = 0;
                    $foodid = 0;
                    $con = mysqli_connect("localhost", "root", "", "maed");
                    if (!$con) {
                        die('Could not connect: ' . mysqli_connect_error());
                    }
                    $insert_food = "INSERT INTO food (foodName,foodImg,foodType,prepTime,servingSize,descriptions,ingredients,instructions)
                VALUES('$foodName','$foodimg','$foodtype','$preptime',$servingsize,'$description','$ingredients','$instructions')";
                    $query_run = mysqli_query($con, $insert_food);

                    $foodID_query = "SELECT foodID from FOOD where foodName='$foodName'";
                    $query_run = mysqli_query($con, $foodID_query);
                    $foodid = mysqli_fetch_array($query_run);

                    foreach ($ingList as $ing) {
                        $ing_query2 = "SELECT ingID from ingredient where ingName='$ing'";
                        $runquery = mysqli_query($con, $ing_query2);
                        $ingid = mysqli_fetch_array($runquery);

                        if (is_null($ingid[0])) {
                            echo "<script>alert('Error2')</script>";
                        } else {
                            $insert_food_ing = "INSERT INTO fooding VALUES('$foodid[0]','$ingid[0]')";
                            $run = mysqli_query($con, $insert_food_ing);
                        }
                    }
                    $insert_food = "INSERT INTO nutritionfact (foodID,calories,fat,protein,carbs,cholestrol,sodium)
                VALUES('$foodid[0]','$calories','$fat','$protein','$carbs','$cholestrol','$sodium')";
                    $query_run = mysqli_query($con, $insert_food);


                    echo "<script>alert('Food Added')</script>";
                }

                ?>

            </div>
            <div id="addIngredientsPage">
                <form action="" method="post" autocomplete="off">
                    <h1>Add Ingredient</h1>
                    <label for="ingredientname">ingredient Name: </label>
                    <input type="text" name="ingredientname" id="ingredientname" />
                    <br>
                    <br>
                    <label for="ingredienttype">ingredient Type: </label>
                    <input type="text" name="ingredienttype" id="ingredienttype" />
                    <br>
                    <br>
                    <input type="submit" value="Submit" name="submit-ing" />
                </form>
                <?php
                if (isset($_POST["submit-ing"])) {
                    $ingredientname = $_POST["ingredientname"];
                    $ingredienttype = $_POST["ingredienttype"];

                    $con = mysqli_connect("localhost", "root", "", "maed");
                    if (!$con) {
                        die('Could not connect: ' . mysqli_connect_error());
                    }
                    $insert_ing = "INSERT INTO ingredient (ingName,ingType)
                 VALUES('$ingredientname','$ingredienttype')";
                    $query_run = mysqli_query($con, $insert_ing);
                    echo "<script>alert('Ingredient Added')</script>";
                }
                ?>
            </div>
            <div id="usersPage">
                <h1>Users</h1>
                <table border="2">
                    <tr>
                        <td>ID</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>UserName</td>
                        <td>Gender</td>
                        <td>Age</td>
                        <td>Password</td>
                        <td>Email</td>
                        <td>Status</td>
                    </tr>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "maed");
                    $query = "Select *from users";
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                    ?>
                            <tr>
                                <td>
                                    <?= $row['id']; ?>
                                </td>
                                <td>
                                    <?= $row['firstName']; ?>
                                </td>
                                <td>
                                    <?= $row['lastName']; ?>
                                </td>
                                <td>
                                    <?= $row['username']; ?>
                                </td>
                                <td>
                                    <?= $row['gender']; ?>
                                </td>
                                <td>
                                    <?= $row['age']; ?>
                                </td>
                                <td>
                                    <?= $row['password']; ?>
                                </td>
                                <td>
                                    <?= $row['email']; ?>
                                </td>
                                <td><button class="removeBtn">

                                        <?php
                                        $id = $row['id'];
                                        // echo $id;

                                        echo "<a href='removeuser.php?status=" . $id . "'>Remove</a>";
                                        ?>
                                    </button></td>
                            </tr>

                    <?php
                        }
                    } else {
                        echo '<p>No record found</p>';
                    }


                    ?>

                </table>
            </div>
        </div>

        <script type="module" src="../../Scripts/jquery.js"></script>
        <script type="module" src="../../Scripts/adminpage.js"></script>
</body>

</html>