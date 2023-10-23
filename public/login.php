<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $correctEmail = "aivarsklavins9@gmail.com";
    $correctPassword = "social123";

    if ($email == $correctEmail && $password == $correctPassword) {
        // Redirect to intro.html if the input is correct
        header("Location: intro.html");
        exit();
    } else {
        // Display an error message if the input is incorrect
        echo "Incorrect email or password. Please try again.";
    }
}
?>