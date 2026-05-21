<form method="post" action="">
    <label>Age:</label>
    <input type="text" name="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>">
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $age = $_POST["age"];

    echo "<h3>Result:</h3>";

    if (empty($age)) {
        echo "Age is required.";
    }
    elseif (!is_numeric($age)) {
        echo "Age must be a number.";
    }
    elseif ($age < 1 || $age > 100) {
        echo "Age must be between 1 and 100.";
    }
    else {
        echo "Valid age: " . htmlspecialchars($age);
    }
}
?>
