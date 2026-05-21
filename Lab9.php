<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Message:<br>
    <textarea name="message" rows="5" cols="40"></textarea>
    <br><br>
    <input type="submit">
</form>

<?php
if(isset($_POST['message']) && $_POST['message'] != "") {
    $message = htmlspecialchars($_POST['message']);
    echo "Your Message:<br>" . nl2br($message);
} else if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Please enter a message";
}
?>

</body>
</html>
