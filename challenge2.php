<?php

echo '<h3>Color Array</h3>';

   //Given array color value
    $colors = ['red', 'blue', 'green', 'yellow'];

// #1
    sort($colors);
// #2
   array_push($colors, 'purple', 'orange');
// #3
    array_unshift($colors, 'Red Apple');
// #4
    $colors[array_search('green', $colors)] = 'Green Apple';
    
print_r($colors);