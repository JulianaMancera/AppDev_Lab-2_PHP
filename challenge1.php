<?php
   
echo '<h3> Sum of An Array</h3>';
   
// #1
    $numbers = [1, 2, 3, 4, 5];

// #2
    $sum = array_sum($numbers);

// #3
    $quantity = count($numbers);

// #4
    echo "The sum of the {$quantity} number is: {$sum}";