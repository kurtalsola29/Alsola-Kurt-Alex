<?php
declare(strict_types=1);

$products = [
    "Wicked" => ["price" => 350.00, "stock" => 4],
    "Wicked: For Good" => ["price" => 420.00, "stock" => 15],
    "To Kill a Mockingbird" => ["price" => 300.00, "stock" => 8],
    "1984" => ["price" => 280.00, "stock" => 12],
    "Pride and Prejudice" => ["price" => 500.00, "stock" => 3]
];

$tax = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
    return ($price * $quantity) * ($tax_rate / 100);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/styles.css">
    <title>Book Store</title>
</head>
<body>
    <h2>Bookstore Inventory Table</h2>
    <table>
        <tr>
            <th>Book Title</th>
            <th>Stock Level</th>
            <th>Reorder?</th>
            <th>Total Value</th>
            <th>Tax Due</th>
        </tr>

        <?php foreach ($products as $product_name => $data): ?>
        <tr>
            <td><?= $product_name ?></td>
            <td><?= $data['stock'] ?></td>
            <td><?= get_reorder_message($data['stock']) ?></td>
            <td><?= get_total_value($data['price'], $data['stock']) ?></td>
            <td><?= get_tax_due($data['price'], $data['stock'], $tax) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>