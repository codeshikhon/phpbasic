<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Arrays - Indexed Array, Associative Arrays</title>
</head>
<body>
   
   <h1>PHP Arrays - Indexed Array and Associative Arrays</h1>

   <?php
   $cars = array( 'BMW', 'Tesla', 'Ferrari', 'Toyota' );
   // $cars = ['BMW', 'Tesla', 'Ferrari', 'Toyota'];
   // echo $cars;

   // echo '<pre>';
   // print_r( $cars );
   // echo '</pre>';

   // Push Item to array
   // $cars = array();
   // $cars[] = 'BMW';
   // $cars[] = 'Tesla';
   // $cars[] = 'Ferrari';
   // $cars[] = 'Toyota';

   // var_dump( $cars );
   // echo $cars[0] . '<br>';
   // echo $cars[1] . '<br>';
   // echo $cars[2] . '<br>';
   // echo $cars[3];

   // foreach( $cars as $car ) {
   //    echo $car . '<br>';
   // }

   // Associative Arrays
   // $car = array( 
   //    'name' => 'BMW',
   //    'model' => 'X1',
   //    'color' => 'Silver',
   //    'price' => '80 Lakh'
   // );

   // $car['weight'] = '50';
   
   $car = array();
   $car['name'] = 'BMW';
   $car['model'] = 'X1';
   $car['color'] = 'Silver';
   $car['price'] = '80 Lakh';

   // var_dump( $car );
   // echo $car['name'];
   // foreach( $car as $key => $bmw ) {
   //    echo ucfirst($key) . ': ' . $bmw . '<br>';
   // }

   // Multidimensional Arrays
   // $cars = array(
   //    array(
   //       'BMW', 'X1', 'Silver', '90 Lakh'
   //    ),
   //    array(
   //       'Toyota', 'Rav4', 'White', '85 Lakh'
   //    ),
   //    array(
   //       'Ferrari', '296 GTS', 'Red', '4 Crores'
   //    ),
   //    array(
   //       'Tesla', 'S 2022', 'Blue', '95 Lakh'
   //    ),
   // );

   // var_dump( $cars[1] );
   // echo $cars[2][1];
   // echo $cars[1][3];
   // foreach( $cars as $car ) {
   //    // var_dump( $car );
   //    echo '<h2>' . $car[0] . '</h2>';
   //    echo '<ul>';
   //    foreach( $car as $item ) {
   //       echo '<li>' . $item . '</li>';
   //    }
   //    echo '</ul>';
   // }

   $cars = array(
      array(
         'name' => 'BMW',
         'model' => 'X1',
         'color' => 'Silver',
         'price' => '90 Lakh'
      ),
      array(
         'name' => 'Toyota', 
         'model' => 'Rav4', 
         'color' => 'White', 
         'price' => '85 Lakh'
      ),
      array(
         'name' => 'Ferrari', 
         'model' => '296 GTS', 
         'color' => 'Red', 
         'price' => '4 Crores'
      ),
      array(
         'name' => 'Tesla', 
         'model' => 'S 2022', 
         'color' => 'Blue', 
         'price' => '95 Lakh'
      ),
   );

   // var_dump( $cars );

   foreach( $cars as $car ) {
      echo '<h2>' . $car[ 'name' ] . '</h2>';
      echo '<ul>';
      foreach( $car as $key => $item ) {
         echo '<li>' . ucfirst( $key ) . ': ' . $item . '</li>';
      }
      echo '</ul>';
   }

   ?>

</body>
</html>