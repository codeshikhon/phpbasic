<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Sorting Arrays and Array Functions</title>
</head>
<body>

   <h1>PHP Sorting Arrays and Array Functions</h1>
   <?php

      $cars = array( 'BMW', 'Tesla', 'Ferrari', 'Toyota' );

      // Return an array in the reverse order
      // $cars = array_reverse( $cars );

      // Sort arrays in ascending order
      // sort( $cars );

      // Sort arrays in descending order
      // rsort( $cars );

      //  Associative Arrays
      $car = array(
         'name'  => 'BMW',
         'model' => 'X1',
         'color' => 'Silver',
         'price' => '80 Lakh',
      );

      //  Sort associative arrays in ascending order, according to the value
      // asort( $car );

      // Sort associative arrays in descending order, according to the value
      // arsort( $car );

      // Sort associative arrays in ascending order, according to the key
      // ksort( $car );

      // Sort associative arrays in descending order, according to the key
      // krsort( $car );

      // foreach ( $car as $key => $item ) {
      //    echo ucfirst( $key ) . ': ' . $item . '<br>';
      // }

      // Randomize the order of the elements
      // shuffle( $cars );

      // foreach ( $cars as $car ) {
      //    echo $car . '<br>';
      // }

      // Returns a random key from an array
      // $random_key = array_rand( $cars, 2 );

      // echo $cars[$random_key[0]] . '<br>';
      // echo $cars[$random_key[1]];
      // print_r( $random_key );

      // Merge one or more arrays into one array.
      $cars2 = array( 'Tata', 'Honda', 'Ferrari', 'Toyota' );
      $merged = array_merge( $cars, $cars2 );
      // var_dump( $merged );

      // Create an array by using the elements from one "keys" array and one "values" array.
      // var_dump( array_combine( $cars, $cars2 ) );

      // Return the value of the current
      // echo current( $cars );

      // Return the value of the last element
      // echo end( $cars );

      // Return the value of the next element:
      // echo next( $cars );

      // Return the value of the next element
      // echo prev( $cars );

      // Search an array for a value and returns the key
      // $nums = array( "10", "10", 10, 10 );
      // echo array_search( "Tesla", $cars );
      // echo array_search( 10, $nums, true );

      // Compare the values of two arrays, and return the differences
      // var_dump( array_intersect( $cars, $cars2 ) );
      // var_dump( array_diff( $cars, $cars2 ) );
      // var_dump( array_diff( $cars2, $cars ) );

      // Remove duplicate values from an array:
      // var_dump( array_unique( $merged ) );

      // Insert one or more elements to the end of an array
      // array_push( $cars, "Corolla", "Hiace" );

      // Insert new elements in the beginning of the array.
      // array_unshift( $cars, "Corolla", "Hiace" );

      // Delete the last element of an array:
      // array_pop( $cars );

      // Remove the first element from an array
      // array_shift( $cars );

      // Remove selected elements from an array and replace it with new elements
      // $new_items = array( "Corolla", "Hiace" );
      // array_splice( $cars, 1, 2, $new_items );

      
      // Return selected parts of an array
      // var_dump( array_slice( $cars, 1, 2 ) );

      // Pagination
      $carlist = array_unique( array_merge( $cars, $cars2 ) );

      $current_page = (isset( $_GET['page'] ) && $_GET['page']) ? $_GET['page'] : 1;
      $per_page = 2;
      $total_pages = count( $carlist ) / $per_page;

      $items = array_slice( $carlist, ($current_page - 1) * $per_page, $per_page );

      foreach ($items as $item) {
         echo $item . '<br>';
      }

      if( $current_page > 1 ) {
         echo '<a href="?page='.($current_page - 1).'">&larr; Previous</a> ';
      }

      if( $current_page < $total_pages ) {
         echo ' <a href="?page='.( $current_page + 1).'">Next &rarr;</a>';
      }

   ?>

</body>
</html>