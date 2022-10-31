<?php

// Connect to DB
$conn = mysqli_connect("us-cdbr-east-06.cleardb.net", "b55e235a99ff55", "4dc93493", "heroku_f58f8abf2100592");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}