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
            <img src="images/vegetables.jpg" alt="">
            <h3>vegetables</h3>
            <p>Tomatoes are in this section</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="images/fruits.jpg" alt="">
            <h3>fresh fruits</h3>
            <p>Have a taste of our delicious apples!</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="images/cereal.jpg" alt="">
            <h3>dairy products</h3>
            <p>All part of a nutritious breakfast!</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="images/Butcher.jpg" alt="">
            <h3>fresh meat</h3>
            <p>For the meatlovers!</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="images/winecellar.jpg" alt="">
            <h3>Captain's Wine Cellar</h3>
            <p>Get your own bottle of Caberlot before we run out!</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>






<?php
    include_once 'footer.php';
?>
