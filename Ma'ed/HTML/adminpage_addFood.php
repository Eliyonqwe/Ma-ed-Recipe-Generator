<?php

if (isset($_POST["submit"])) {
    $foodName = $_POST["name"];
    $ingList = $_POST["ingList"];
    $ingid = 0;
    $foodid = 0;
    $con = mysqli_connect("localhost", "root", "", "maed");
    if (!$con) {
        die('Could not connect: ' . mysqli_connect_error());
    }
    $insert_food = "INSERT INTO FOOD VALUES('','$foodName')";
    $query_run = mysqli_query($con, $insert_food);

    $foodID_query = "SELECT foodID from FOOD where foodName='$foodName'";
    $query_run = mysqli_query($con, $foodID_query);
    $foodid = mysqli_fetch_array($query_run);
    echo $foodid[0];
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
    echo "<script>alert('Food Added')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
    <h1>Add Food</h1>
    <form action="" method="post" autocomplete="off">
        <label for="name">Food Name: </label>
        <input type="text" name="name" id="name" />
        <p>Select Ingredient</p>

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

        </select>
        <br />
        <br />
        <br />
        <input type="submit" value="Submit" name="submit" />
    </form>
</body>

</html>