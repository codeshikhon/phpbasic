<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP printf() to Output and sprintf() to Write a Formatted String</title>
</head>
<body>

   <h1>PHP printf() to Output and sprintf() to Write a Formatted String</h1>

   <?php

       //  printf(
       //      'My name is %1$s. I am %2$u years old.',
       //      'Shujon Mahmud',
       //      36
       //  );

       function post_date() {
           return date( 'j F, Y' );
       }

       function post_url() {
           return "/phpbasic/08.functions.php";
       }

       //  echo '<span class="posted-on">Posted on: <a href="'.post_url().'">'.post_date().'</a></span>';

       //  printf(
       //    '<span class="posted-on">Posted on: <a href="%1$s">%2$s</a></span>',
       //    post_url(),
       //    post_date()
       //  );

       $post_date = sprintf(
           '<span class="posted-on">Posted on: <a href="%1$s">%2$s</a></span>',
           post_url(),
           post_date()
       );
       echo $post_date;

   ?>

</body>
</html>