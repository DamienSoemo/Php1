<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Getal door 3 delen</title>
</head>
<body>
<?php

for ($i = -10; $i <= 30 ; $i++) {
    if (checkIfDivisibleBy3($i)) {
        $wellesnietes = "";
    } else {
        $wellesnietes = "niet";

    }

    echo "{$i} is {$wellesnietes} deelbaar door 3.<br>\n";

}

function checkIfDivisibleBy3($number) {
    if ($number % 3 === 0) {
        $result = true;
    }else{
        $result = false;
        }
    return $result;

}

?>
</body>
</html>
