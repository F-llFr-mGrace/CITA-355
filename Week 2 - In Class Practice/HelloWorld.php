<?php
$WorldVar = "World";
$SunVar = "Sun";
$MoonVar = "Moon";
$WorldInfo = 92897000;
$SunTemp = 72000000;
$MoonInfo = 3456; 
?>

<!DOCTYPE html>
<html>
 <head>
 <title><?php echo"Hello World";?></title>
 </head>
<body>
<?php
echo"<p>Hello $WorldVar!<br />";
echo"The $WorldVar is $WorldInfo miles from the $SunVar.<br/>";
echo "Hello $SunVar!<br />";
echo "The $SunVar's core temperature is approximately $SunTemp degrees Fahrenheit.<br />";
echo "Hello $MoonVar!<br />";
echo "The $MoonVar's is $MoonInfo miles in diameter.<br />";
?>
</body>
</html>