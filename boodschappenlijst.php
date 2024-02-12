<?php

$producten = array();

echo "Hoeveel producten wil je toevoegen?" . PHP_EOL;
$aantalProducten = readline();

for ($i = 1; $i <= $aantalProducten; $i++) {
    echo "Product $i van $aantalProducten: ";
    $producten[] = readline();
}

echo PHP_EOL . "De volgende producten staan op je boodschappenlijstje:" . PHP_EOL;
foreach ($producten as $boodschappen) {
    echo $boodschappen . PHP_EOL;
}

?>