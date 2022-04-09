<html>
    <head>
        <title>Testing</title>
    </head>
    <body>
        <div>
            <br>
        <?php
            echo "Hi there";
            ?>
            <br>
            <?php
            //    $student_marks = 90;
            //     if($student_marks >= 90){
            //         echo "Result: Excellent Result <br/>";
            //         if(5 == 5)
            //         echo "hello";
            //     }
            //     else if($student_marks >= 80)
            // echo "Result: Good Result <br/>";
            //     else if($student_marks >= 70)
            // echo "Result: Acceptable Result <br/>";
            //     else if($student_marks >= 60)
            //         echo "Result: Bad Result <br/>";
            //     else
            
            // echo "Result: Acceptable Result <br/>";
    
            // $fuel = 10;
            // $i = 1;
            // while ($fuel > 1) {
            //     print "Vroom vroom ".$i;
            //     echo "<br>";
            //     $i++;
            //     $fuel--;
            // }
            // echo "After Loop";

            // $fuel = 10;
            // $i = 1;
            //  do {
            //     print "Vroom vroom ".$i;
            //     echo "<br>";
            //     $i++;
            //     $fuel--;
            // }while ($fuel < 1);
            // echo "After Loop";

            for($fuel=10; $fuel>1; $fuel-- ) {
                for($i=0 ; $i<$fuel; $i++){
                    echo "*";
                }
                var_dump($fuel);
                echo "<br>";
                // print "Vroom vroom ".$fuel;
                // if(5==6){
                //     break;
                // }
                // echo "<br>";
              } 
              echo "lOOP bREAK"
              
        ?>

        </div>
    </body>
</html>