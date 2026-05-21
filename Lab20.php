<?php
function clean($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$errors = [];
$success = false;

$name = $email = $gender = $course = $message = "";
$hobbies = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $errors[] = "Name is required.";
    } else {
        $name = clean($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $errors[] = "Email is required.";
    } else {
        $email = clean($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }
    }

    if (empty($_POST["gender"])) {
        $errors[] = "Gender is required.";
    } else {
        $gender = clean($_POST["gender"]);
    }

    if (empty($_POST["course"])) {
        $errors[] = "Course is required.";
    } else {
        $course = clean($_POST["course"]);
    }

    $hobbies = isset($_POST["hobbies"]) ? $_POST["hobbies"] : [];

    if (empty($_POST["message"])) {
        $errors[] = "Message is required.";
    } else {
        $message = clean($_POST["message"]);
    }

    if (empty($errors)) {
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>

<h2>Student Registration Form</h2>
<form method="post" action="">

    Name:<br>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <br><br>

    Email:<br>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <br><br>

    Gender:<br>
    <input type="radio" name="gender" value="Male" <?php if ($gender=="Male") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="Female" <?php if ($gender=="Female") echo "checked"; ?>> Female
    <br><br>

    Course:<br>
    <select name="course">
        <option value="">Select</option>
        <option value="BSIT" <?php if ($course=="BSIT") echo "selected"; ?>>BSIT</option>
        <option value="BSCS" <?php if ($course=="BSOA") echo "selected"; ?>>BSOA</option>
        <option value="BSBA" <?php if ($course=="CCS") echo "selected"; ?>>CCS</option>
    </select>
    <br><br>

    Hobbies:<br>
    <input type="checkbox" name="hobbies[]" value="Reading"
        <?php if (in_array("Reading", $hobbies)) echo "checked"; ?>> Reading

    <input type="checkbox" name="hobbies[]" value="Gaming"
        <?php if (in_array("Gaming", $hobbies)) echo "checked"; ?>> Gaming

    <input type="checkbox" name="hobbies[]" value="Sports"
        <?php if (in_array("Sports", $hobbies)) echo "checked"; ?>> Sports
    <br><br>

    Message:<br>
    <textarea name="message"><?php echo $message; ?></textarea>
    <br><br>

    <input type="submit" value="Register">

</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>

    <hr>

    <?php if (!empty($errors)): ?>
        <h3 style="color:red;">Errors:</h3>
        <ul>
            <?php foreach ($errors as $err): ?>
                <li><?php echo $err; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <h3 style="color:green;">Registration Successful!</h3>
        <p><b>Name:</b> <?php echo $name; ?></p>
        <p><b>Email:</b> <?php echo $email; ?></p>
        <p><b>Gender:</b> <?php echo $gender; ?></p>
        <p><b>Course:</b> <?php echo $course; ?></p>
        <p><b>Hobbies:</b>
            <?php echo !empty($hobbies) ? implode(", ", array_map("htmlspecialchars", $hobbies)) : "None"; ?>
        </p>
        <p><b>Message:</b> <?php echo $message; ?></p>
    <?php endif; ?>

<?php endif; ?>

</body>
</html>
