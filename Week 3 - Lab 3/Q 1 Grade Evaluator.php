<?php
$score = rand(0,100); // Get random value

function writeCongrats($letterGrade) {
    global $score; //Just call a func instead of writing it 5 times!
    echo ("Your score is $score, Your final grade is $letterGrade");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Grade Evaluator</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 3</h1>
        <h2>Lab 3</h2>
        <h2>Q 1: Grade Evaluator</h2>
        <p>
            <?php
            if($score >= 90) { #Assigning letter grade based on score
            writeCongrats("A");
            } else if($score >= 80) {
                writeCongrats("B");
            } else if($score >= 70) {
                writeCongrats("C");
            } else if($score >= 60) {
                writeCongrats("D");
            } else {
                writeCongrats("F");
            }
            ?>
        </p>
    </body>
</html>
