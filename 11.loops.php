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
       //  foreach ( $cars as $car ) {
       //    echo "$car<br>";
       //  }

      //  if ( count( $bmw ) > 0 ) {
      //      echo '<ul>';
      //      foreach ( $bmw as $key => $item ) {
      //          // if( "Silver" === $item ) {
      //          //    break;
      //          // }
      //          if( "model" === $key ) {
      //             continue;
      //          }
      //          echo '<li>' . ucfirst( $key ) . ": $item</li>";
      //      }
      //      echo '</ul>';
      //  }
       
       //  While Loop
       $x = 0;
      //  while( $x <= 50 ) {
      //    echo "Iterate $x<br>";
      //    $x+=5;
      //  }

      $x = 5;
      //  while( $x >= 0 ) {
      //    echo "Iterate $x<br>";
      //    $x--;
      //  }

      //  do {
      //    echo "Iterate $x<br>";
      //    $x--;
      //  } while( $x >= 0 );

       //  For Loop
       for( $x = 0; $x <= 10; $x++ ) {
         // if( 5 === $x ) {
         //    break;
         // }
         if( 5 === $x ) {
            continue;
         }
         echo "Iterate $x<br>";
       }

   ?>

</body>
</html>