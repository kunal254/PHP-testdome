<?php

function groupByOwners($fileOwner){
    $ownerFile = array();

    foreach ($fileOwner as $file => $owner) {
        if(array_key_exists($owner, $ownerFile))
            array_push($ownerFile[$owner], $file);
        else
            $ownerFile[$owner] = array($file);
    }
    return $ownerFile;
}

$fileOwner =  ["Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy", "beta.php" => "Stan", "kara.java" => "john", "bag.c" => "papa", "hara.cpp" => "Stan", "nabhai.py" => "john", "chal.html" => "john", "people.s" => "Randy"];

$ownerFile = groupByOwners($fileOwner);
print_r($ownerFile);

