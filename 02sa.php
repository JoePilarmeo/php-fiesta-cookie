<?php
function hp_sum()
{
   require('01sa.php');
   ob_end_clean();

   // Declare the column of HP
   $HPcolumn = 5;
   // To keep out the heading of the array
   $remove_heading = array_slice($L4D2, 1);
   // Calculate and return the sum of HP
   return array_sum(array_column($remove_heading, $HPcolumn));
}

function ave_attack()
{
   require('01sa.php');
   ob_end_clean();

   // Declare the column of ATTACK
   $ATTACKcolumn = 6;
   // To keep out the heading of the array
   $remove_heading = array_slice($L4D2, 1);
   //Count the number of elements
   $rows_count = count($remove_heading);
   // Calculate and return the average
   return array_sum(array_column($remove_heading, $ATTACKcolumn)) / $rows_count;
}

echo 'The sum of the hp column is: ' . hp_sum();
echo '<br>';
echo 'The average of the attack column is: ' . ave_attack();

?>