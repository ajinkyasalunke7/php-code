<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Arithmetic Operations using Switch</title>
</head>

<body>
    <h2>Arithmetic Operations</h2>
    <form action="" method="post">
        <label for="operation">Select an operation:</label>
        <select name="operation" id="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        <br><br>
        <label for="num1">Enter first number:</label>
        <input type="text" id="num1" name="num1" required><br><br>
        <label for="num2">Enter second number:</label>
        <input type="text" id="num2" name="num2" required><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $operation = $_POST["operation"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                echo "<p>$num1 + $num2 = $result</p>";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "<p>$num1 - $num2 = $result</p>";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "<p>$num1 * $num2 = $result</p>";
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<p>$num1 / $num2 = $result</p>";
                } else {
                    echo "<p>Error: Division by zero</p>";
                }
                break;
            default:
                echo "<p>Invalid operation</p>";
                break;
        }
    }
    ?>
</body>

</html>