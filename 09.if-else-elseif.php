<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP if...else...elseif and switch Statements</title>
</head>
<body>

   <h1>PHP if...else...elseif and switch Statements</h1>

   <?php

       // $x = "";
       // $x = null;
       // $x = true;
       // $x = false;
       // $x = "10";

       // if( is_int($x) ) {
       //    echo "ঠিক আছে।";
       // }

       // if( is_float( $x ) ) {
       //    echo "ঠিক আছে।";
       // }

       // if( is_numeric( $x ) ) {
       //    echo "ঠিক আছে।";
       // }

       // if( is_string($x) ) {
       //    echo "ঠিক আছে।";
       // }

       $x = 10;
       // PHP Comparison Operators
       // if( $x > 10 ) {
       //    echo "ঠিক আছে।";
       // }

       // if( $x >= 10 ) {
       //    echo "ঠিক আছে।";
       // }

       // if( $x < 11 ) {
       //    echo "ঠিক আছে।";
       // }

       // if( $x <= 9 ) {
       //    echo "ঠিক আছে।";
       // }

       // if( $x == 10 ) {
       //    echo "ঠিক আছে।";
       // }

       // if( $x != 12 ) {
       //    echo "ঠিক আছে।";
       // }

       // $x = "10";
       // if( $x === 10 ) {
       //    echo "ঠিক আছে।";
       // }

       // if( $x !== 9 ) {
       //    echo "ঠিক আছে।";
       // }

       $y = 20;
       // PHP Logical Operators
       // if( $x > 8 && $y > 19 ) {
       //    echo "ঠিক আছে।";
       // }

       // if( $x > 10 || $y > 20 ) {
       //    echo "ঠিক আছে।";
       // }

       // If...else...
       // if( $x > 10 || $y > 20 ) {
       //    echo "ঠিক আছে।";
       // } else {
       //    echo "কোথাও ভুল আছে!!";
       // }

       // Ternary Operators
       // $result = ($x > 9 || $y > 20) ? "ঠিক আছে।" : "কোথাও ভুল আছে!!";
       // $result = $_GET['name'] ?? "কোথাও ভুল আছে!!";
       // echo $result;

       // PHP Array Operators
       $car = array(
           'name'  => 'BMW',
           'model' => 'X1',
           'color' => 'Silver',
           'price' => '80 Lakh',
       );
       $car2 = array(
           'name'  => 'BMW',
           'model' => 'X1',
           'color' => 'Silver',
           'price' => '80 Lakh',
       );

       //  if( $car == $car2 ) {
       //     echo "ঠিক আছে।";
       //  }

       //  if( $car === $car2 ) {
       //    echo "ঠিক আছে।";
       // }

       // Check whether a variable is an array or not.
       // $car = array();
       //  if( is_array( $car ) && count($car) > 0 ) {
       //     echo "ঠিক আছে।";
       //  }

       // Searche an array for a specific value.
       //  if ( in_array( 'Silver', $car ) ) {
       //      echo "ঠিক আছে।";
       //  }

       // Check an array for a specified key
       //  if ( array_key_exists( 'model', $car ) ) {
       //      echo "ঠিক আছে।";
       //  }

       // Check function exists or not
       //  function my_function() {
       //    echo "Hello world!";
       //  }

       //  if( ! function_exists( 'my_function' ) ) {
       //    function my_function() {
       //       echo "Hello universe!";
       //    }
       // }
       // my_function();

       // PHP if...else...elseif
       $day = date( 'l' );
       /*  if ( 'Saturday' === $day ) {
       echo "আজ শনিবার।";
       } elseif ( 'Sunday' === $day ) {
       echo "আজ রবিবার।";
       } elseif ( 'Monday' === $day ) {
       echo "আজ সোমবার।";
       } elseif ( 'Tuesday' === $day ) {
       echo "আজ মঙ্গলবার।";
       } elseif ( 'Wednesday' === $day ) {
       echo "আজ বুধবার।";
       } elseif ( 'Thursday' === $day ) {
       echo "আজ বৃহস্পতিবার।";
       } elseif ( 'Friday' === $day ) {
       echo "আজ শুক্রবার, ছুটির দিন।";
       } else {
       echo "কোথাও ভুল আছে!!";
       } */

       /* if ( 'Saturday' === $day ):
           echo "আজ শনিবার।";
       elseif ( 'Sunday' === $day ):
           echo "আজ রবিবার।";
       elseif ( 'Monday' === $day ):
           echo "আজ সোমবার।";
       elseif ( 'Tuesday' === $day ):
           echo "আজ মঙ্গলবার।";
       elseif ( 'Wednesday' === $day ):
           echo "আজ বুধবার।";
       elseif ( 'Thursday' === $day ):
           echo "আজ বৃহস্পতিবার।";
       elseif ( 'Friday' === $day ):
           echo "আজ শুক্রবার, ছুটির দিন।";
       else:
           echo "কোথাও ভুল আছে!!";
       endif; */

       // Switch Statement
       switch ( $day ) {
         case "Saturday":
            echo "আজ শনিবার।";
            break;
         case 'Sunday':
            echo "আজ রবিবার।";
            break;
         case 'Monday':
            echo "আজ সোমবার।";
            break;
         case 'Tuesday':
            echo "আজ মঙ্গলবার।";
            break;
         case 'Wednesday':
            echo "আজ বুধবার।";
            break;
         case 'Thursday':
            echo "আজ বৃহস্পতিবার।";
            break;
         case 'Friday':
            echo "আজ শুক্রবার, ছুটির দিন।";
            break;
         default:
            echo "কোথাও ভুল আছে!!";
       }

   ?>

</body>
</html>