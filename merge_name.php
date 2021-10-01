<?php

function unique_names($names1, $names2){
    return array_unique(array_merge($names1, $names2));
}

$names1 = ['Ava', 'Emma', 'Olivia'];
$names2 = ['Olivia', 'Sophia', 'Emma'];

print_r(unique_names($names1, $names2));