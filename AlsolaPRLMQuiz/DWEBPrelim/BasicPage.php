<?php

$username = "Kurt Alex Alsola";
$greeting = "Hello, $username, Welcome to Book Store!";
$offer = ["20% discount", 3, 100, 80];
$usual_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $offer_price - $usual_price;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/">
    <title>Book Store</title>
</head>
<body>
    <?php require "includes/header.php" ?>
    <p><?= $greeting?></p>
    <p>Total Saving: <?= $saving ?></p>
    <p>Purchase 3 or more books and get a 20% Discount</p>
    <p>(Usual Price: <?= $usual_price ?>)</p>
    <?php require "includes/footer.php" ?>
</body>
</html>