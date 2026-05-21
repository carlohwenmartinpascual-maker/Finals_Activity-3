<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST["name"]) || isset($_POST["email"])) {

    if (empty($_POST["name"])) {
        echo "Name is required<br>";
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["email"])) {
        echo "Email is required<br>";
    } else {
        $email = $_POST["email"];
    }

    if (!empty($_POST["name"]) && !empty($_POST["email"])) {
        echo "Hello, " . $name . "!<br>";
        echo "Your email is " . $email;
    }
}
?>

</body>
</html>
