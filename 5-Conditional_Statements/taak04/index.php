<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$prod_besteld = 9;

if($prod_besteld < 10) {
    $prijs = 1.50;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.00;
}

echo $prijs;


$prod_besteld2 = 19;

if($prod_besteld2 < 10) {
    $prijs2 = 1.50;
} elseif($prod_besteld2 < 20) {
    $prijs2 = 1.25;
} else {
    $prijs2 = 1.00;
}

echo $prijs2;

$prod_besteld3 = 34;

if($prod_besteld3 < 10) {
    $prijs3 = 1.50;
} elseif($prod_besteld3 < 20) {
    $prijs3 = 1.25;
} else {
    $prijs3 = 1.00;
}

echo $prijs3;

?>
</body>
</html>

