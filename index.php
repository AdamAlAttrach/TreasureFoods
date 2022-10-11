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
            <p>up to 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="images/fruits.jpg" alt="">
            <h3>fresh fruits</h3>
            <p>up to 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="images/cereal.jpg" alt="">
            <h3>dairy products</h3>
            <p>up to 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="images/Butcher.jpg" alt="">
            <h3>fresh meat</h3>
            <p>up to 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>






<?php
    include_once 'footer.php';
?>
