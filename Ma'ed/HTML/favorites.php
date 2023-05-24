<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="../pics/favicon.ico">
    <link href="https://fonts.cdnfonts.com/css/proxima-nova-2" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Favorites</title>
    <link rel="stylesheet" href="../styles/favorites.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend">

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
                        <a href="home.php"><span class="material-symbols-outlined style"
                                style="line-height: 1">Home</span>Home</a>
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
    <div class="main">
        <h1><span class="material-symbols-outlined ">Star</span>Favorites</h1>
        <div class="lists">
            <?php
            include('connect.php');
            
            if (isset($_SESSION['username'])) {
            $username=$_SESSION['username'];
            $sql = "SELECT id FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $sql);
            $userid = mysqli_fetch_array($result);

                $sql = "SELECT f.foodID,f.foodName, f.foodImg, f.foodType, f.prepTime, f.servingSize, f.description, f.ingredients, f.instructions, nf.calories, nf.fat, nf.protein, nf.carbs, nf.cholestrol, nf.sodium
                FROM user_foods uf
                JOIN food f ON uf.foodID = f.foodID
                LEFT JOIN nutritionfact nf ON f.foodID = nf.foodID
                WHERE uf.user_id = '$userid[0]'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                // Do something with each row
                ?>
                <div class="<?= $row['foodName'] . ' ' . 'result'; ?>">
                    <img src="<?= $row['foodImg']; ?>" alt="<?= $row['foodName'] . ' ' . 'picture'; ?> ">
                    <h3>
                        <?= $row['foodName']; ?>
                    </h3>
                    <p>
                        <?= $row['description']; ?> description
                    </p>
                    <button class="moreBtn">

                        <?php
                        $id = $row['foodID'];
                        // echo $id;
                        echo "<a href='ResultPage.php?status=" . $id . "'>More</a>";
                        ?>
                    </button>

                </div>
                <?php
            }
        } else {
            echo "please login";
        }

            ?>
        </div>
    </div>
    <script src="../Scripts/favorites.js"></script>
</body>

</html>