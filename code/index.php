<?php

// function greet($test = 1,$test1 = 2){
//     echo "Hello World";
//     echo "<br>";
// }
// function greet($test, $test2){
//     echo "Hello World";
//     echo "<br>";
// }
    // function sum($test, $test2){
    //     echo $test + $test2;
    //     echo "<br>";
    //     return "asff";
    // }

    // greet(1,2);
    // greet();

    // $result =  sum('5',2);
    // echo $result;



    // function howdy($lang) {
    //     if ( $lang == 'es' ){
    //         return "Hola";
    //     }
    //     else if ( $lang == 'fr' ){
    //         return "Bonjour";
    //     } 
    //     else{   
    //         return "Hello";
    //     }
       
    //    }


    //    print howdy('es') . " Glenn\n";
    //    echo "<br>";
    //    print howdy('fr') . " Sally\n";
    //    echo "<br>";
    //    print howdy('ur') . " Bilal\n";



    // function double($alias) {
    //     $alias = $alias * 2;
    //     return $alias;
    //    }
    //    $val = 10;
    //    $dval = double($val);
    //    echo "Value = $val Doubled = $dval\n";


       function double(&$alias) {
        $alias = $alias * 2;
        return $alias;
       }
       $val = 10;
       $dval = double($val);
       $dval2 = double($dval);

       echo "Value = $val Doubled = $dval\n and 2nd val = $dval2";

?>