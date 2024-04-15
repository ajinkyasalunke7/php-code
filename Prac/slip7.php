<!DOCTYPE html>
<html>

<head>
    <title>Print Array Values using foreach</title>
</head>

<body>
    <h2>Array Values</h2>
    <?php
    // Define an array
    function func()
    {
        $numbers = array(10, 20, 30, 40, 50);
        // echo "<p>Array values:</p>";
        echo "<ul>";
        foreach ($numbers as $value) {
            $ran = rand(1000, 9999);
            echo "<li>$ran - $value</li>";
        }
        echo "</ul>";
    }

    $i = 0;
    while ($i < 1000) {
        func();
        $i++;
        // sleep(1);
    }
    ?>

</body>

</html>