<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bomen</title>
    <style>
        body {
            text-align: center;

        }
       .yellow  {
           border: yellow 5px ;
       }
       .blue  {
           border: blue 5px;
       }

    </style>
</head>
<body>
<?php

for($i = 1; $i<=10 ;$i++) {
    if ($i == 1) {
        $class  ="class='yellow'";
    }else {
        $class = "class='blue'";
    }

    echo "<img src='img/boom/".$i.".jpg'>";
}
?>
</body>
</html>