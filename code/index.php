<?php

// single dimension array
// $stuff = array("Chuck","WA4E","Laravel");
// print_r($stuff);
// echo "<br>";

// $stuff[4] = "hello";

// print_r($stuff);
// echo "<br>";

// $stuff[] = "PHP";
// print_r($stuff);
// echo "<br>";
// $total_length = count($stuff);
// $last = $total_length -3;
// echo $stuff[$last];
// echo "<br>";
// echo "<br>";

// echo $stuff[2], "\n";
// echo "<br>";

// echo $stuff[3], "\n";




// multiple dimension array
// $stuff = array("student" => "bilal",
//                 "course" => "Web");

// print_r($stuff);
// $stuff["tech"] = "PHP";
// echo "<br>";

// print_r($stuff);

// $stuff["designation"] = "Laravel Team Lead";

// echo "<br>";

// print_r($stuff);
// $stuff["designation"] = "Web Team Lead";

// echo "<br>";
// print_r($stuff);

// // echo $stuff;

// print_r($stuff);
// echo "<br>";

// $thing = FALSE;
// echo("One\n");
// echo "<br>";

// print_r($thing);
// // echo "<br>";

// echo("Two\n");
// echo "<br>";

// var_dump($thing);


$marks = array(10, 20, 30, 40, 50, 60, 70);
//  echo $marks[5]; //get
//  $marks[5] = 46; //update
//  $marks[] = 43; // create or insert
//  unset($marks[6]); //delete

// $result = [
//     "math" => 80,
//      "physics" => 90,
//     "chemistry" => 100,
//     "computer" => 195,
// ];
// $students['Bilal']['computer']. $students['Usman']['computer'];
echo  $students['Bilal']['islamiat'] ?? "not found";
$students = [
    'Bilal' => [
        "math" => 80,
        "physics" => 90,
        "chemistry" => 100,
        "computer" => 195
    ],
    'Usman' => [
        "math" => 80,
        "physics" => 90,
        "chemistry" => 100,
        "computer" => 195,
        "islamiat" => 90,
        "test" => 43
    ],
    'Amir' => [
        "math" => 80,
        "physics" => 90,
        "chemistry" => 100,
        "computer" => 195,
        "test" => [
            "test1" => 123,
            "test2" => 123
        ]
    ]
];


$students['amir']['islamiat'] = 100; // create or update
unset($students['amir']['islamiat']); //delete
echo $students['amir']['test']['test1']; //get 

foreach ($students as $student => $marks) {
    echo "Student Name:  $student";
    echo "<br>";
    // if ($student == "Amir") {
    //     echo $marks['computer'];
    // }
    // if ($student == "Usman") {
    //     echo $marks['chemistry'];
    // }
    foreach ($marks as $subject => $grade) {
        echo "$subject :";
        // if ($subject == 'test') {

        if (is_array($grade)) {
            foreach ($grade as $key => $test) {
                echo " =>  $key :  $test";
                echo "<br>";
            }
            // } 
        } else {
            print_r($grade);
        }
        echo "<br>";
    }
    echo "<br>";
}
// $students = array(
//     'Bilal' =>    array(
//         "math" => 80,
//         "physics" => 90,
//         "chemistry" => 100,
//         "computer" => 195
//     ),
//     'Usman' => array(
//         "math" => 80,
//         "physics" => 90,
//         "chemistry" => 100,
//         "computer" => 195
//     ),
//     'Amir' => array(
//         "math" => 80,
//         "physics" => 90,
//         "chemistry" => 100,
//         "computer" => 195
//     )
// );

// // echo $products['pens']['marker'];
// echo "<br>";
