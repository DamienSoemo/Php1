<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celsius</title>
</head>
<body>

<?php

for ($i = 0; $i <= 40 ; $i++) {
    calculateFahrenheitFromCelsius($i);

}

function calculateFahrenheitFromCelsius($celsius) {
    $fahrenheit = $celsius * 1.8 + 32;
    echo "{$celsius} degrees Celsius amount to {$fahrenheit} degree.Fahrenheit<br>\n";

}

?>

</body>
</html>