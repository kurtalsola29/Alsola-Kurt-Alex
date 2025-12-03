<?php
$name = "Kurt Alex Alsola";
$greeting = "Hello, $name, Welcome to Book Store!";
if ($name == "Kurt Alex Alsola") {
    $greeting = "Welcome Back, $name!";
};
$product = "Books Discounts";
$cost = 100;
$i = 1
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/styles.css">
    <title>Products</title>
</head>
<body>
    <?php require "includes/header.php" ?>
    <p><?= $greeting?></p>
    <p><?= $product ?> </p>
    <?php require "includes/footer.php" ?>
    <table>
        <tr>
            <th>Packs</th>
            <th>Cost</th>
        </tr>
        <tr>
            <td>Book 1</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Book 2</td>
            <td>200</td>
        </tr>
        <tr>
            <td>Book 3</td>
            <td>260</td>
        </tr>
        <tr>
            <td>Book 4</td>
            <td>340</td>
        </tr>
        <tr>
            <td>Book 5</td>
            <td>400</td>
        </tr>
    </table>
</body>
</html>