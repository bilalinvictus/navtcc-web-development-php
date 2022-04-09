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
    

    $marks = [10,20,30,40,50,60,70];

    $result = [
        "math" => 80,
        "physics" => 90,
        "chemistry" => 100,
        "computer" => 195
    ];


    $students = array(
        'Bilal' =>	array( 
            "math" => 80,
            "physics" => 90,
            "chemistry" => 100,
            "computer" => 195
        ),
        'Usman' => array(
            "math" => 80,
            "physics" => 90,
            "chemistry" => 100,
            "computer" => 195
        ),
        'Amir' => array( 
            "math" => 80,
            "physics" => 90,
            "chemistry" => 100,
            "computer" => 195
            ) 
    );

    // echo $products['pens']['marker'];
    echo "<br>";

    

?>
<html>

<head>
    <title>PHP </title>
</head>
<body>
<h1>Single Dimensional Array</h1>

    <ol>
        <?php

            for($i = 0;$i<count($marks);$i++){

            ?>
            <li style="color:red">
                <?php
                    echo "Marks :".$marks[$i];
                ?>
            </li>
            <br>
            <?php
            }
        ?>

    </ol>

    <h1>'Multi Dimensional Array(Associative Array)</h1>
    <ol>
        <?php

            foreach($result as $subject => $marks){

            ?>
            <li style="color:green">
                <?php
                    echo $subject ." : ".$marks;
                ?>
            </li>
            <br>
            <?php
            }
        ?>

    </ol>
    <h1>Nested Array</h1>
    <ol>
        <?php

            foreach($students as $student => $result){

            ?>
            <li>
                <span style="color:red">
                    Student Name:
                </span>
                <span>
                <?php
                    echo $student;
                ?>
                </span>
                <h3>Result</h3>
                <?php
                     foreach($result as $subject => $marks){

                    ?>
                    <li>
                        <span style="color:red">
                        <?php
                            // echo $subject." : ".$marks;
                            echo $subject." : ";
                        ?>
                        </span>
                        
                        <?php
                            echo $marks;
                        ?>
                    

                    </li>
                    <br>
                    <?php
                    }
                    ?>
            </li>
            <br>
            <?php
            }
        ?>

    </ol>
</body>
</html>
