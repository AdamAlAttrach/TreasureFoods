<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TreasureFood</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/28fbd9adfb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body> 
    <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><i class="fa-solid fa-coins fa-bounce " style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; --fa-bounce-rebound: 0;" ></i>TreasureFood</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
                <?php
                    if (isset($_SESSION["usersuid"])) {
                        echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Profile page</a></li>";
                        echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Log out</a></li>";
                    }
                    else {
                        echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Sign Up</a></li>";
                        echo "<li class='nav-item'><a class='nav-link' href='login.php'>Log In</a></li>";
                    }
                ?>
            </ul> 
        </div>         
    </nav>
    


    <div class="wrapper">

