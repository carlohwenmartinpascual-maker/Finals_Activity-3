<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name:<input type="text" name="name"><br><br>

    Email:<input type="text" name="email"><br><br>

    Gender:<input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Course:
    <select name="course">
        <option value="">-- Select Course --</option>
        <option value="BSIT">BSIT</option>
        <option value="BSCS">BSCS</option>
        <option value="BSIS">BSIS</option>
    </select>
    <br><br>

    Message:<br>
    <textarea name="message" rows="5" cols="40"></textarea>
    <br><br>

    <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $gender = $_POST['gender'] ?? "";
    $course = $_POST['course'] ?? "";
    $message = trim($_POST['message']);

    $errors = [];

    if($name == "") {
        $errors[] = "Name is required";
    }

    if($email == "") {
        $errors[] = "Email is required";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if($gender == "") {
        $errors[] = "Gender is required";
    }

    if($course == "") {
        $errors[] = "Course is required";
    }

    if($message == "") {
        $errors[] = "Message is required";
    }

    if(count($errors) > 0) {
        foreach($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<h3>Submitted Data</h3>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Gender: " . htmlspecialchars($gender) . "<br>";
        echo "Course: " . htmlspecialchars($course) . "<br>";
        echo "Message: <br>" . nl2br(htmlspecialchars($message));
    }
}
?>

</body>
</html>
