<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="../Styles/account.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="https://fonts.cdnfonts.com/css/dosis" rel="stylesheet">
    </head>
</head>

<body>
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
    <div class="main">
        <?php

        if (isset($_SESSION['username'])) { ?>

            <form action="" method="post">
                <div class="title">
                    <h2>Profile</h2>
                    <button type="submit" name="save">Save</button>
                </div>
                <div class="mainform">
                    <?php
                    $username = $_SESSION['username'];

                    include('connect.php');

                    $sql = "SELECT * FROM users where username=	
                    '$_SESSION[username]'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $oldpassword = $row['password'];
                    ?>

                        <div class="profile">
                            <div id="pic" class="pic"><img src="../pics/photo_2021-05-31_08-56-23.jpg" alt="">
                            </div>
                            <button type="submit" name="Change-photo">Change photo</button>
                            <button type="submit" name="remove">Remove</button>
                        </div>
                        <div class="names">
                            <label for="">First Name</label>
                            <input required id="fname" type="text" name="firstname" value="<?= $row['firstName']; ?>">
                            <label for="">Last Name</label>
                            <input required id="lname" type="text" name="lastname" value="<?= $row['lastName']; ?>">
                            <label for="">User Name</label>
                            <input required id="username" type="text" name="username" value="<?= $row['username']; ?>">
                            <label for="">Gender</label>
                            <input required id="gender" type="text" name="gender" value="<?= $row['gender']; ?>">
                            <label for="">Age</label>
                            <input required id="age" type="number" name="age" value="<?= $row['age']; ?>">
                            <label for="">password</label>
                            <input required id="password" type="text" name="password" value="<?= $row['password']; ?>">
                            <label for="">Email</label>
                            <input required id="email" type="email" name="email" value="<?= $row['email']; ?>">
                        </div>
                        <div class="account-action">
                            <button><a href="logout.php"><span class="material-symbols-outlined ">logout</span>Sign
                                    out</a></button>
                            <button type="submit" name="delete">
                                <?php
                                $id = $row['id'];
                                // echo $id;

                                echo "<a href='removeuser.php?status=" . $id . "'>Delete Account</a>";
                                ?>
                            </button>
                        </div>

                    <?php
                    }
                    // Close the database connection
                    mysqli_close($conn);
                    ?>
                </div>

            </form>
        <?php } else {
            echo " <h3>Please login</h3>";
        }

        if (isset($_POST["save"])) {
            include('connect.php');
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = ($oldpassword === $_POST['password'] ? $_POST['password'] : md5($_POST['password']));

            $sql = "UPDATE users SET firstName='$fname',lastName='$lname' ,age='$age',gender='$gender',
            username='$username',email='$email',password='$password' WHERE username='$_SESSION[username]'";

            // execute the query
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
                $_SESSION['username'] = $username;
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }

            // close the database connection
            mysqli_close($conn);
        }

        ?>
    </div>
    <script src="../Scripts/jquery.js"></script>
    <script src="../Scripts/account.js"></script>

</body>

</html>