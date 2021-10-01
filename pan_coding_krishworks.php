<?php

    $penRegex = "/[A-Z]{3}(P|F|C|H|A|T).\d{4}[A-Z]/";
    $name = "KRISH";
    $pan = "AFZTK7190K";

    if(preg_match($penRegex, $pan) && $pan[4] == $name[0])
        echo "valid";
    else
        echo "Invalid";
    
    // $status = array("P", "F", "C", "H", "A", "T");

    // if(strlen($pan) != 10)
    //     die("PAN SHOULD BE 10 DIGIT");

    // // preg match first there char
    // if(!preg_match("/[A-Z]{3}/", $pan))  
    //     die("FIRST THREE MUST BE ALPHABETIC");

    // // in array fourth
    // if(! in_array($pan[3], $status))
    //     die("fourth charater must match a status");

    // // get name of user in fifth
    // if($pan[4] !== $name[0])    
    //     die("must be same as first char of name");

    // // 6 to 8 must be numberic pre_mathch
    // if(!preg_match("/.{5}\d{4}/", $pan))
    //     die("6 to 8 char must be number");

    // // last character is alphabetic
    // if(! ctype_upper($pan[9]))
    //     die("last character must be alpha");

    // echo "validated";
