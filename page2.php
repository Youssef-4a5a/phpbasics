<?php


//als eerst maak ik een functie
function uppercase($text){
    //in de functie geef ik een parameter
    //deze parameter roep ik op met de functie ucwords
    return ucwords($text);
}
//vervolgens heb ik hieronder de post gegevens van het formulier op de andere pagina
$theName = $_REQUEST["name"];
$theNumber = $_REQUEST["aNumber"];
//en hier echo ik de functie samen met de variable die het parameter vervangd in de functie
echo "Mijn naam is ".uppercase($theName)." en het nummer die ik heb gekozen is ".$theNumber;

//if (isset($_REQUEST["updateFile"])){
//    echo "<pre>";
//    var_dump($_REQUEST);
//    echo "</pre>";
//}

$submit = $_REQUEST["name"].".txt";
$mynyanpassu = fopen($submit, $mode);
$mode;

if (isset($_REQUEST["submit"])){
    $mode = "w+";
    $mynyanpassu;
    fwrite($submit, "Deze bestand is aangemaakt");
    fclose($submit);
} else if (isset($_REQUEST["delete"])){
    unlink($submit);
} else if (isset($_REQUEST["update"])){
    $mode = "a+";
    $mynyanpassu;
    fwrite($submit, "Deze bestand is aangepast");
    fclose($submit);
}


?>