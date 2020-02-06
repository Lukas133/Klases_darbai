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
     <form class="" action="" method="GET">
       First name:<br>
       <input name="vardas"type="text" value=""><br>
       Last name:<br>
       <input name="pavarde"type="text" name="lastname" value=""><br>
       Email name:<br>
       <input name="email"type="email" name="" value=""><br>
       Password: <br>
       <input name="pasword"type="password" name="" value=""><br>
       <input type="submit" value="Submit">
     </form>
     <table class="table table-stripped">
       <thead>
         <?php foreach ($_GET as $key => $value):?>
         <th> <?php if (!empty($value))
             print $key ?></th>
         <?php endforeach; ?>
       </thead>
       <tbody>
         <tr>
           <?php foreach ($_GET as $value) :?>
              <td><?php if (!empty($value))
                print $value ?> </td>

          <?php endforeach; ?>
         </tr>
       </tbody>
     </table>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
