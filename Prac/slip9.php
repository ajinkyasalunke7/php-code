<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Count Words in String</title>
</head>

<body>
    <h2>Count Words in String</h2>
    <form action="" method="post">
        <label for="input">Enter a string:</label>
        <input type="text" id="input" name="input" required>
        <input type="submit" value="Count">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];
        // Function to count words in a string
        function countWords($str)
        {
            $wordCount = 0;
            $isWord = false;
            // Iterate through each character of the string
            for ($i = 0; $i < strlen($str); $i++) {
                // If current character is not a space, set isWord to true
                if ($str[$i] != ' ') {
                    $isWord = true;
                } else {

                    if ($isWord) {
                        $wordCount++;
                        $isWord = false;
                    }
                }
            }
            if ($isWord) {
                $wordCount++;
            }
            return $wordCount;
        }
        // Count words in the input string
        $wordCount = countWords($input);
        echo "<p>Number of words in the string: $wordCount</p>";
    }
    ?>
</body>

</html>