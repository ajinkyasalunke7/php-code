<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Add Two Numbers</title>
</head>

<body>
    <h2>Add Two Numbers</h2>
    <form action="" method="POST">
        <label for="num1">Enter first number:</label>
        <input type="text" id="num1" name="num1" required><br><br>
        <label for="num2">Enter second number:</label>
        <input type="text" id="num2" name="num2" required><br><br>
        <input type="submit" value="Add">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve values from the form
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        // Validate if both inputs are numeric
        if (is_numeric($num1) && is_numeric($num2)) {
            // Perform addition
            $sum = $num1 + $num2;
            echo "<h3>Result: $num1 + $num2 = $sum</h3>";
        } else {
            echo "<h3>Please enter valid numeric values.</h3>";
        }
    }
    ?>
</body>

</html>