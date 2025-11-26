<?php
$price = 200;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Shop</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <h2>Prices for Multiple books:</h2>
    <p><?php  
for ($x = 1; $x <= 5; $x++) {
    echo $x;
    echo ' books cost Php';
    echo $price * $x;
    echo '<br>';
}
?>  </p>
</body>
<footer>
    <?php include 'includes/footer.php'; ?>
</footer>
</html>