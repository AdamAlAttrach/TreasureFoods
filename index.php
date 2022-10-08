<?php
    include_once 'header.php';
    ?>

<?php
if (isset($_SESSION["usersuid"])) {
    echo "<p>Welcome " . $_SESSION["usersuid"] . "!</p>";
    
}
?>
<div class="products-container">
    
    <div class="meat-section">
        <img src="images/Butcher.jpg" class="img-rounded" alt="Meats" width="500px" heigth="auto"  >
    </div>
    <div class="vegetable-section">
        <img src="images/vegetables.jpg" class="img-rounded" alt="vegetables" width="500px" heigth="auto"  >
    </div>
    <div class="fruit-section">
        <img src="images/fruits.jpg" class="img-rounded" alt="fruits" width="500px" heigth="auto"  >
    </div>
    <div class="cereal-section">
        <img src="images/cereal.jpg" class="img-rounded" alt="cereal" width="500px" heigth="auto"  >
    </div>
</div>



<?php
    include_once 'footer.php';
?>
