<?php
// clousers "use" | can't access global inside function
// fun ask(){}  - $fun = 'ask' | $fun();
function make_pipeline(...$func){
    return function($arg) use ($func){
         foreach ($func as $key => $value) {
            $arg = $func[$key]($arg);
         }
         return $arg;
    };
}

$fun = make_pipeline( function($x) { return $x * 3; },
                      function($x) { return $x + 1; },
                      function($x) { return $x / 2; } );
echo $fun(4);

