<?php include_once './app/php/php.php';

 ?>


<!doctype html>
<html lang="en">
   <head>
     <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="./assets/css/stiliukas.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <title>Hello, world!</title>
   </head>
   <body class="container mt-5">
     <form class="" action="Klases_darbas.php" method="POST">
       <h3>Vardas</h3>
       <input type="text" name="name" value="">
       <br>
       <h3>Emailas</h3>
       <input type="email" name="email" value="">
       <br>
       <button type="submit">submit</button>
     </form>
     <table class="table">
       <?php foreach ($array as $user) :?>
         <tr>
           <?php foreach ($user as $info): ?>
       	     <td><?php print $info; ?> </td>
           <?php endforeach; ?>
          </tr>
        <?php endforeach; ?>
     </table>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
