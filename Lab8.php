<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Course:
    <select name="course">
        <option value="">-- Select Course --</option>
        <option value="BSIT">BSIT</option>
        <option value="BSOA">BSOA</option>
        <option value="CCS">CCS</option>
    </select>
    <br><br>
    <input type="submit">
</form>

<?php
if(isset($_POST['course']) && $_POST['course'] != "") {
    $course = htmlspecialchars($_POST['course']);
    echo "Selected Course: " . $course;
} else if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Please select a course";
}
?>

</body>
</html>
