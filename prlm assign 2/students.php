<?php
$students = [
    ["name" => "Boq",  "grade" => 80],
    ["name" => "Elphaba",  "grade" => 96],
    ["name" => "Glinda",  "grade" => 93],
    ["name" => "Fiyero",  "grade" => 89],
    ["name" => "Nessa",  "grade" => 74],
];

$highest = 0;
$lowest = 100;
$total = 0;

foreach ($students as $index => $s) {
    $status = match(true) {
        $s['grade'] >= 95 => "HONOR STUDENT",
        $s['grade'] >= 80 => "PASSED",
        $s['grade'] >= 75 => "REMEDIAL",
        default => "FAILED"
    };

    $remarks = match(true) {
        $s['grade'] >= 95 => "Excellent, keep it up!",
        $s['grade'] >= 80 => "Good job!",
        $s['grade'] >= 75 => "Needs Improvement.",
        default => "Good luck next time."
    };

    $students[$index]['status'] = $status;
    $students[$index]['remarks'] = $remarks;

    if ($s['grade'] > $highest) $highest = $s['grade'];
    if ($s['grade'] < $lowest) $lowest = $s['grade'];
    $total += $s['grade'];
}

$average = $total / count($students);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Students Report Card</title>
</head>

<header><?php include "include/header.php"; ?></header>
<body>
    <div class="container">
        <table>
            <caption>Student Grades Report</caption>
            <tr>
                <th>Name</th>
                <th>Grade</th>
                <th>Status</th>
                <th>Remarks</th>
            </tr>
            <?php foreach ($students as $s): ?>
            <tr>
                <td><?= $s['name'] ?></td>
                <td><?= $s['grade'] ?></td>
                <td><?= $s['status'] ?></td>
                <td><?= $s['remarks'] ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <th colspan="4">Class Records</th>
            </tr>
            <tr>
                <th colspan="2">Highest Grade: <?= $highest ?></th>
                <th colspan="2">Lowest Grade: <?= $lowest ?></th>
            </tr>
        </table>
    </div>
</body>
<footer><?php include "include/footer.php"; ?></footer>
</html>