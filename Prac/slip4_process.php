<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customer Details</title>
</head>

<body>
    <h2>Customer Details</h2>
    <?php
    // Retrieve form data
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $item_purchase = $_POST['item_purchase'];
    $amount = $_POST['amount'];
    // Display user-inserted values
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Mobile Number:</strong> $mobile</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Item Purchased:</strong> $item_purchase</p>";
    echo "<p><strong>Amount:</strong> $amount</p>";
    ?>
</body>

</html>