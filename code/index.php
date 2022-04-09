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



// function howdy($lang, $name = "Bilal")
// {
//     if ($lang == 'es') {
//         $result =  "Hola";
//     } else if ($lang == 'fr') {
//         $result = "Bonjour";
//     } else {
//         $result = "Hello";
//     }
//     return "$result  $name";
// }


// print howdy('es');
// echo "<br>";
// print howdy("Sally", 'fr');
// echo "<br>";
// print howdy('ur', "Bilal");
// echo "<br>";



// function double($alias) {
//     $alias = $alias * 2;
//     return $alias;
//    }
//    $val = 10;
//    $dval = double($val);
//    echo "Value = $val Doubled = $dval\n";


// function double(&$alias)
// {
//     $alias = 90;
//     return 40;
// }
// $val = 10;
// $dval = double($val);
// // $dval2 = double($dval);

// echo "Value = $val Doubled = $dval\n and 2nd val";



$val = 10;

function tryzap()
{
    global $val;
    $val = 100;
    $cal2 = 200;
    return $cal2;
}


echo tryzap();
echo "TryZap = $val\n";
