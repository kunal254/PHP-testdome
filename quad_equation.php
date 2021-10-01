<?php
// ax^2 + bx + c = 0 
function findRoots($a, $b, $c){
    if($a == 0) 
        return "not quadratic";
    
    $d = $b * $b - 4 * $a * $c;
    $sd = sqrt(abs($d));

    if($d < 0)
        return "no real roots";
    else if($d >= 0){
        $root1 = (-$b + $sd)/(2 * $a);
        $root2 = (-$b - $sd)/(2 * $a);

        return [$root1, $root2];
    }

}
$roots = findRoots(2, 4 , 2);
if(is_array($roots))
    foreach ($roots as $key=>$item){
        echo $item.", ";
    }
else
    echo $roots;
