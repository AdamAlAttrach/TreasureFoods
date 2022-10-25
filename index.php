<?php
    include_once 'header.php';
    ?>

<?php
if (isset($_SESSION["usersuid"])) {
    echo "<p class='welcome'>Welcome " . $_SESSION["usersuid"] . "!</p>";
    
}
?>
<section class="categories" id="categories">

    <div class="box-container">

        <div class="box">
            <img src="images/vegetables.jpg" class="img-fluid" alt="">
            <h3>Vegetables</h3>
            <p>Tomatoes are in this section</p>
            <a href="vegetable.php" class="btn btn-info">Shop Now!</a>
        </div>

        <div class="box">
            <img src="images/fruits.jpg" alt="">
            <h3>Fruits</h3>
            <p>Have a taste of our delicious apples!</p>
            <a href="fruits.php" class="btn btn-info">Shop Now!</a>
        </div>

        <div class="box">
            <img src="images/cereal.jpg" alt="">
            <h3>Dairy</h3>
            <p>All part of a nutritious breakfast!</p>
            <a href="dairy.php" class="btn btn-info">Shop Now!</a>
        </div>

        <div class="box">
            <img src="images/Butcher.jpg" alt="">
            <h3>Meat</h3>
            <p>For the meatlovers!</p>
            <a href="meat.php" class="btn btn-info">Shop Now!</a>
        </div>

        <div class="box">
            <img src="images/winecellar.jpg" alt="">
            <h3>Captain's Wine Cellar</h3>
            <p>Get your own bottle of Caberlot before we run out!</p>
            <a href="wine.php" class="btn btn-info">Shop Now!</a>
        </div>

        <div class="box">
            <img src="images/sweets.jpg" alt="">
            <h3>Treasure Trove</h3>
            <p>Approach with vigilance</p>
            <a href="sweets.php" class="btn btn-info">Shop Now!</a>
        </div>

    </div>

</section>






<?php
    include_once 'footer.php';
?>
