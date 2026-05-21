<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name">
    <input type="submit">
</form>

<?php
if (isset($_POST['name'])) {
    echo $_POST['name'];
}
?>

</body>
</html>
