<?php
$books = 3;
$price = 200;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Checkout</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <h2>Receipt:</h2>
    <p><?php  
do {
    echo $books;
    echo ' books cost Php';
    echo $books * $price;
    echo '<br>';
    $books--;
} while ($books > 0);
?>  </p>
</body>
<footer>
    <?php include 'includes/footer.php'; ?>
</footer>
</html>