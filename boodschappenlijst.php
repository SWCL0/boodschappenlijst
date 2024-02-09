<?php

$productenv = array();

echo "Hoeveel producten wil je toevoegen? ";
$aantalProducten = readline();

for ($i = 1; $i <= $aantalProducten; $i++) {
    echo "Product $i van $aantalProducten: ";
    $producten[] = readline();
}

var_dump($producten);

?>