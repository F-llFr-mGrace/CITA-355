<?php
$dayIndex = rand(0,6); // Get random value
$daysOfWeek = [ // Array of days of the week
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
    "Sunday"
];
function WeekdayOrEnd($dayIndex) { // Weekday if 0-4, Weekend if 5-6
    global $daysOfWeek;
    if ($dayIndex >= 0 && $dayIndex <= 4) {
        echo ("Today is $daysOfWeek[$dayIndex], so it is a weekday.");
    } else {
        echo ("Today is $daysOfWeek[$dayIndex], so it is the weekend.");
    }
};
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Day of the Week</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 3</h1>
        <h2>Lab 3</h2>
        <h2>Q 2: Day of the Week</h2>
        <p>
            <?php
            WeekdayOrEnd($dayIndex); // Call func
            ?>
        </p>
    </body>
</html>
