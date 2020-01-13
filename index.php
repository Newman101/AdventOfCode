<?php

include 'autoloader.php';

$solutionPartOne = (new Day6())->solvePartOne();
$solutionPartTwo = (new Day6())->solvePartTwo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>AdventOfCode Day 6</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .bg-1 {
        background-color: #1abc9c;
        color: #ffffff;
    }
    </style>
</head>

<body>
    <div class="container-fluid bg-1 text-center">
        <h3>AdventOfCode Day 6</h3>
        <img src="img/code.jpg" class="img-circle" alt="Code">
        <h3>Part 1 Solution: <?php echo $solutionPartOne; ?></h3>
        <h3>Part 2 Solution: <?php echo $solutionPartTwo; ?></h3>
    </div>
</body>
</html> 