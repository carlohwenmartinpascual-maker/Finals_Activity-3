<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>

    <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h3>Submitted Data</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}
?>

</body>
</html>

<!--It protects the form from malicious URL-based script injection (XSS) by sanitizing the page URL before it is used in the form action.-->
