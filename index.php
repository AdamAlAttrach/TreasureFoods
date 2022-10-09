<?php
    include_once 'header.php';
    ?>

<?php
if (isset($_SESSION["usersuid"])) {
    echo "<p class='welcome'>Welcome " . $_SESSION["usersuid"] . "!</p>";
    
}
?>
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3"> 
    <a href="meat-section.php">
        <div class="veggies aisle border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
            <div class="my-3 py-3 border">
                <h2 class="display-5"> Trendy Vegetables </h2>
                <p class="display-5">Aisle 1</p>
            </div>
        </div>
    </a>

</div>
<!-- 
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
-->





<?php
    include_once 'footer.php';
?>
