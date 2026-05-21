<form method="post" action="">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
    <br><br>

    <input type="reset" value="Reset">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Submitted Data:</h3>";
    echo "Name: " . htmlspecialchars($_POST["name"]) . "<br>";
    echo "Email: " . htmlspecialchars($_POST["email"]);
}
?>
