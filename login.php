<?php
    include_once 'header.php';
?>

    <section class="login-form">
        <h2>Log In</h2>
        <div class="login-form-form">
            <form action="includes/login.inc.php" method="post">
                <div class="mb3">    
                    <label for="exampleFullName" class="form-label">Enter your Username or Email</label>
                    <input type="text" class="form-control" name="uid" >
                </div>
                
                <div class="mb3"> 
                    <label for="exampleFullName" class="form-label">Enter your password</label> 
                    <input type="password" class="form-control" name="pwd">
                </div>  
                <div class="mb3">  
                    <button type="submit" class="btn btn-success" name="submit">Log In</button>
                </div>    
            </form>
        </div>
        
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";

            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login information!</p>";
            }
        }
        ?>
    </section>
<?php
    include_once 'footer.php';
?>
