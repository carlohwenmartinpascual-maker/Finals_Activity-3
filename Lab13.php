<?php
$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
}
?>

<form method="post" action="">
    Username: <input type="text" name="username"
        value="<?php echo htmlspecialchars($username); ?>">

    <br><br>

    Password: <input type="password" name="password"
        value="">

    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Username: " . htmlspecialchars($username) . "</p>";
    echo "<p>Password: " . str_repeat("*", strlen($password)) . "</p>";
}
?>
