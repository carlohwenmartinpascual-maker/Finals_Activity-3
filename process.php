<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "<h2>Form Submitted Successfully</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email);
} else {
    echo "No data received.";
}
?>
