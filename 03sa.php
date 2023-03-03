<?php
// array
$L4D2 = array(
    array("id","species","type1","type2","hp","attack","defense"),
    array("1", "Bulbasaur", "Grass", "Poison", "Overgrow", 45, 49, 49),
    array("2", "Ivysaur", "Grass", "Poison", "Overgrow", 60, 62, 63),
    array("3", "Venusaur", "Grass", "Poison", "Overgrow", 80, 82, 83),
    array("4", "Charmander", "Fire", "N/A", "Blaze", 39, 52, 43),
    array("5", "Charmeleon", "Fire", "N/A", "Blaze", 58, 64, 58),
    array("6", "Charizard", "Fire", "Flying", "Blaze", 78, 84, 78),
    array("7", "Squirtle", "Water", "N/A", "Torrent", 44, 48, 65),
    array("8", "Wartortle", "Water", "N/A", "Torrent", 59, 63, 80),
    array("9", "Blastoise", "Water", "N/A", "Torrent", 79, 83, 100),
    array("10", "Caterpie", "Bug", "N/A", "Shield Dust", 50, 20, 55)
    );

function pokemon_defense($L4D2, $limit_number)
{
    // To keep out the heading of the array
    $remove_heading = array_slice($L4D2, 1);
    //Declare defense column
    $DEFENSEcolumn = 7;
    //Declare species column
    $SPECIEScolumn = 1;

    // iterate over each row and assign the current value to the $row
    foreach ($remove_heading as $row) {
        //check if the value is greater than or equal
        if ($row[$DEFENSEcolumn] >= $limit_number) {
            echo $row[$SPECIEScolumn] . '</br> ';
        }
    }
}
echo pokemon_defense($L4D2, 50);

?>