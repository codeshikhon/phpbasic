<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Operators - Assignment & Arithmetic operators</title>
</head>
<body>

   <h1>PHP Operators - Assignment & Arithmetic operators</h1>

   <?php

      // Assignment operators
      $name = "Shujon Mahmud";
      $age = 36;
      $country = "Bangladesh";

      // echo 'My name is ' . $name . '. I am ' . $age . ' years old. I am from ' . $country . '.';

      // echo "My name is $name . I am $age years old. I am from $country.";

      $my_intro = "My name is Shujon Mahmud.";
      $my_intro .= " I am 37 years old.";
      $my_intro .= " I am from Bangladesh.";

      // echo $my_intro;

      $output = '<ul>';
      $output .= '<li>Milk</li>';
      $output .= '<li>Bread</li>';
      $output .= '<li>Butter</li>';
      $output .= '</ul>';

      // echo $output;

      // Arithmetic operators
      $x = 10;
      $y = 3;
      // $x = $x + $y;
      // $x += $y; // $x = $x + $y
      // $x -= $y; // $x = $x - $y
      // $x *= $y; // $x = $x * $y
      // $x /= $y; // $x = $x / $y
      // $x %= $y; // $x = $x % $y
      // $x **= $y; // $x = $x ** $y (10 x 10 x 10)

      // echo $x;

      // Increment Operators
      $x++;
      $x++;
      $x++;
      $x++;

      // Decrement Operators
      $x--;
      $x--;
      $x--;
      $x--;

      echo $x;
   ?>

</body>
</html>