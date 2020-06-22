<?php

$productenLijst = array ("IceTea", "Flessie Cola", "Goeie koekjes", "Rode aardbeien", "Stukkie cake", "Tony's reep", "Desinfecteerende gel", "Papier", "Smeerworst", "Appelsap");
$productenPrijs = array ( 2.40, 1.20, 2.50, 1.50, 0.60, 3.50, 1.40, 7.50, 2.10, 1.60);

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo var_dump($input);
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch($leeftijd) 
    {
        case 19:  
        break;
        case 18:       
        break;
        case 17:
        break;
        case 16:
        break;
        default:     
    }
    echo $leeftijd;
}

function getDiscount()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch($leeftijd) 
    {
        case 0.19:
        break;
        case 18:       
        break;
        case 17:
        break;
        case 16:
        break;
        default:     
    }
    echo $leeftijd;
}

function getPrijs()
{
    $productenLijst = array ("IceTea", "Flessie Cola", "Goeie koekjes", "Rode aardbeien", "Stukkie cake", "Tony's reep", "Desinfecteerende gel", "Papier", "Smeerworst", "Appelsap");
    $productenPrijs = array ( 2.40, 1.20, 2.50, 1.50, 0.60, 3.50, 1.40, 7.50, 2.10, 1.60);

    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    
    echo $aantalProd * $productenPrijs[$productnummer];
}



?>