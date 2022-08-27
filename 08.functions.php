<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Functions - Create and Use</title>
</head>
<body>

   <h1>PHP Functions - Create and Use</h1>

   <?php

   function my_function( int|float $x = null, int|float $y = null ) {
      return $x + $y . '<br>';
   }

   // echo my_function( 10, 20 );
   // echo my_function( 30, 20 );
   // echo my_function( 30, 60 );
   // echo my_function( 10.5, 30 );

   function sum( int|float ...$numbers ) {
      return array_sum( $numbers );
   }

   // echo sum( 10.3, 20, 12, 36, 32, 45 );

   function item_title( string $before = '', string $title = '', string $after = '' ) {
      echo $before . $title . $after;
   }

   $facebook = "https://www.facebook.com/";
   $youtube = "https://www.youtube.com/";
   $twitter = "https://www.twitter.com/";

   // item_title( '<h2><a href="' . $facebook . '">', "Facebook", "</a></h2>" );
   // item_title( '<h2><a href="' . $youtube . '">', "YouTube", "</a></h2>" );
   // item_title( '<h2><a href="' . $twitter . '">', "Twitter", "</a></h2>" );

   function food_list() {
      $output = '<div class="food-list">';
      $output .= '<ul>';
      $output .= '<li>Burger</li>';
      $output .= "<li>Pizza</li>";
      $output .= "<li>Sandwitch</li>";
      $output .= "<li>Fried Chicken</li>";
      $output .= '</ul>';
      $output .= '</div>';

      return $output;
   }

   // echo food_list();

   function adding( &$value ) {
      return $value += 30;
   }

   $x = 10;
   echo adding( $x );

   ?>

</body>
</html>