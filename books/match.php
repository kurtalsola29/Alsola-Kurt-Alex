<?php
$membership = 'new';

$offer = match($membership){
    'new' => 'Welcome! Your first purchase comes with 50% discount.',
    'old' => 'Hello customer! What would you like to purchase today?',
    default => 'Hello! Come register with us for a 50% discount on first purchase.'
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Home</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <h2>Hello, welcome to the Book Store!</h2>
    <p>Are you a new registered buyer? (new/old): <?= $membership ?></p>
    <p><?= $offer ?></p>
</body>
<footer>
    <?php include 'includes/footer.php'; ?>
</footer>
</html>