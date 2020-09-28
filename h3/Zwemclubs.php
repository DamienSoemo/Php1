<!doctype html>
<html lang="en">
<head>
<title>Zwemclubs</title>
    <style>
    table, tr, td {

        border-collapse: collapse;

    }
    td{

    padding:10px ;

    }
    td.border{

        border: solid 1px grey;

    }


    </style>
</head>
<body>

<?php

$zwemclubs = [
    "De spartelkuikens" => 25,
    "De waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje" => 23
];

echo '<table>';

foreach ($zwemclubs as $clubnaam => $aantal_leden) {
    echo '<tr>';
    echo '<td class="border">' . $clubnaam . '</td>';
    echo  '<td class="border">' . $aantal_leden . '</td>';
    $aantal_plaatjes = floor($aantal_leden / 5);
    echo '<td>';
    for ($i = 0 ; $i < $aantal_plaatjes ; $i++) {

        echo '<img src="//unsplash.it/30" alt="zwemmers">';
    }
    echo '</td>';
    echo '</tr>';
}
?>

</body>
</html>