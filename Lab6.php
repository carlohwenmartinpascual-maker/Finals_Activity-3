<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Email: <input type="text" name="email">
    <input type="submit">
</form>

<?php
if(isset($_POST['email'])) {
    $email = $_POST['email'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email: " . htmlspecialchars($email);
    } else {
        echo "Invalid email";
    }
}
?>

</body>
</html>
