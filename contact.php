<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Process the form data (e.g., send an email)

    // Send a response to the user
    echo "Thank you, $name, for contacting me!";
}
?>