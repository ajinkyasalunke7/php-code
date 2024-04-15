<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Employee Form</title>
</head>

<body>
    <h2>Employee Information</h2>
    <form action="<?php echo
                    htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Employee Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" required><br><br>
        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $designation = $_POST["designation"];
        $salary = $_POST["salary"];
        echo "<h2>Employee Details</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Designation:</strong> $designation</p>";
        echo "<p><strong>Salary:</strong> $salary</p>";
    }
    ?>
</body>

</html>