<?php
$hobbies = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["hobbies"])) {
        $hobbies = $_POST["hobbies"];
    }
}
?>

<form method="post" action="">
    <p>Select your hobbies:</p>

    <label>
        <input type="checkbox" name="hobbies[]" value="Reading"
        <?php if (in_array("Reading", $hobbies)) echo "checked"; ?>>
        Reading
    </label><br>

    <label>
        <input type="checkbox" name="hobbies[]" value="Gaming"
        <?php if (in_array("Gaming", $hobbies)) echo "checked"; ?>>
        Gaming
    </label><br>

    <label>
        <input type="checkbox" name="hobbies[]" value="Cooking"
        <?php if (in_array("Cooking", $hobbies)) echo "checked"; ?>>
        Cooking
    </label><br>

    <label>
        <input type="checkbox" name="hobbies[]" value="Sports"
        <?php if (in_array("Sports", $hobbies)) echo "checked"; ?>>
        Sports
    </label><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($hobbies)) {
    echo "<h3>Selected Hobbies:</h3>";
    echo "<ul>";
    foreach ($hobbies as $hobby) {
        echo "<li>" . htmlspecialchars($hobby) . "</li>";
    }
    echo "</ul>";
}
?>
