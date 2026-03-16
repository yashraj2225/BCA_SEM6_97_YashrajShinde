<!DOCTYPE html>
<html>
<head>
    <title>Radio Button Example</title>
</head>
<body>

<form method="post" action="">
    <h3>Select your favourite car:</h3>

    <input type="radio" name="car" value="Nissan"> Nissan <br>
    <input type="radio" name="car" value="Toyota"> Toyota <br>
    <input type="radio" name="car" value="Mitsubishi"> Mitsubishi <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $car = $_POST['car'];
    echo "<h3>Your favourite car is: $car</h3>";
}
?>

</body>
</html>