<?php
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Sign Up</h2>
        <div class="signup-form-form">
            <form action="includes/signup.inc.php" method="post">
                <div class="mb-3">
                    <label for="exampleFullName" class="form-label">Full name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email address</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                <label for="exampleUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" name="uid">
                </div>
                <div class="mb-3">    
                    <label for="examplePassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pwd">
                </div>
                <div class="mb-3">
                    <label for="exampleConfirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="pwdrepeat">
                </div>
                <div class="mb-3">
                    <button type="submit"  class="btn btn-success" name="submit">Sign Up</button>
                </div>
            </form>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields.</p>";

            }
            else if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose a proper username!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Email is invalid.</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords do not match.</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong! Try again.</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken!</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
            }
        }
        ?>
    </section>
<?php
    include_once 'footer.php';
?>

   
    