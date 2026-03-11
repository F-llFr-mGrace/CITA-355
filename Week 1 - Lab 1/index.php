<?php
	$studentName = "Grace";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Week 1 Lab 1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1><?php echo "Hello, I am ",$studentName; ?></h1>
        <img src="images/profile.jpg" alt="A photo of me">
        <h2>Interests</h2>
        <ul>
            <li>Snowboarding</li>
            <li>Playing and building games</li>
            <li>Hiking</li>
        </ul>
        <h2>Education</h2>
        <ol>
            <li>Bachelor's in Technology</li>
            <li>Major in Game Programming Minor in Cybersecurity</li>
        </ol>
        <table>
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                    <th>Sunday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Morning</td>
                    <td>Retail Work</td>
                    <td>Class</td>
                    <td>Retail Work</td>
                    <td>Class</td>
                    <td>Retail Work</td>
                    <td>Retail Work</td>
                    <td>Retail Work</td>
                </tr>
                <tr>
                    <td>Afternoon</td>
                    <td>Internship</td>
                    <td>Retail Work</td>
                    <td>Internship</td>
                    <td>Retail Work</td>
                    <td>Internship</td>
                    <td>Retail Work</td>
                    <td>Retail Work</td>
                </tr>
                <tr>
                    <td>Evening</td>
                    <td>Open</td>
                    <td>Class Homework</td>
                    <td>Internship</td>
                    <td>Class Homework</td>
                    <td>Internship Meeting</td>
                    <td>Open</td>
                    <td>Open</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>