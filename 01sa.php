<?php
 ob_start();
// $L4D2 is the name of the array below
$L4D2 = array(
        array("id","species","type1","type2","ability","hp","attack","defense"),
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
        // this will print the L4D2 array
        echo 'L4D2 array </br> ' . print_r($L4D2, true);

        //this will count the number of elemnts
        echo '</br></br>';
        echo 'number of elements in L4D2 array = ' . count($L4D2, COUNT_RECURSIVE);
        
        //assign my favorite species is $favorite then print
        $favorite = $L4D2 [4][1];
        echo '</br></br> my favorite species is ';
        print_r($favorite);
        echo '<br><br>';

        //first foreach the $row is loop counter to current row the the $curRow is the value for that row
        //second foreachrow $ndx is loop counter to current index and $val is the value for that index
        //if statement checking if current row is not equal to 0 and if the index is 1 so it will print that species name only
        echo 'Species list: ';
        foreach ($L4D2 as $row => $curRow) {
            foreach ($curRow as $ndx => $val){
                if ($row != 0 && $ndx == 1){
                        echo $val;
                        break;
                }
            }
                        echo '<br>';
        }
?>