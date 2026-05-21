<?php
$name = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
}
?>

<form method="post" action="">
    Name: <input type="text" name="name" 
        value="<?php echo htmlspecialchars($name); ?>">

    <br><br>

    Email: <input type="email" name="email" 
        value="<?php echo htmlspecialchars($email); ?>">

    <br><br>

    <input type="submit" value="Submit">
</form>
