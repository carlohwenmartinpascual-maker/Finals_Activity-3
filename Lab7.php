<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>
    <input type="submit">
</form>

<?php
if(isset($_POST['gender'])) {
    $gender = htmlspecialchars($_POST['gender']);
    echo "Selected Gender: " . $gender;
} else if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Please select a gender";
}
?>

</body>
</html>
