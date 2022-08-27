<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Foreach, While, Do...While and For Loops</title>
</head>
<body>

   <h1>PHP Foreach, While, Do...While and For Loops</h1>

   <?php

       $cars = array( 'BMW', 'Tesla', 'Ferrari', 'Toyota' );
       $bmw = array(
           'name'  => 'BMW',
           'model' => 'X1',
           'color' => 'Silver',
           'price' => '80 Lakh',
       );

       //  Foreach Loop
       //  if ( count( $cars ) > 0 ) {
       //      echo "<ul>";
       //      foreach ( $cars as $car ) {
       //          echo "<li>$car</li>";
       //      }
       //      echo "</ul>";
       //  }

      //  if ( count( $bmw ) > 0 ) {
      //      echo "<ul>";
      //      foreach ( $bmw as $key => $item ) {
      //          // if( $key === "color" ) {
      //          //    break;
      //          // }

      //          if ( $key === "color" ) {
      //              continue;
      //          }
      //          echo "<li>" . ucfirst( $key ) . ": $item</li>";
      //      }
      //      echo "</ul>";
      //  }

      //  While Loop
      // $x = 50;
      // while( $x <= 5 ) {
      //    echo "Iterate $x<br>";
      //    $x++;
      // }

      // $x = 5;
      // while( $x >= 0 ) {
      //    echo "Iterate $x<br>";
      //    $x--;
      // }

      // while( $x <= 50 ) {
      //    echo "Iterate $x<br>";
      //    $x+=5;
      // }

      // do {
      //    echo "Iterate $x<br>";
      //    $x+=5;
      // } while( $x <= 50 );

      // For Loop
      for( $x = 0; $x <= 10; $x+=2 ) {
         // if( $x === 5 ) {
         //    break;
         // }

         if( $x === 5 ) {
            continue;
         }
         echo "Iterate $x<br>";
      }

   ?>

</body>
</html>