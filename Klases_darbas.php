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
<section>
  <!-- <h3>Tavo emailas yra: <?php print $_POST['email']; ?></h3>
  <h3>Tavo slaptazodis yra: <?php print $_POST['psw']; ?></h3>
  <h3>Tavo adresas yra: <?php print $_POST['address']; ?></h3>
  <h3>Tavo miestas yra: <?php print $_POST['city']; ?></h3>
  <h3>Tavo zipas yra: <?php print $_POST['state']; ?> </h3>
  <h3>Tavo zipas yra: <?php print $_POST['zip']; ?> </h3> -->
</section>
     <form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input name="psw"type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address"type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input name="address2" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input name="city" type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">


      <?php
      foreach ($countryArray as $key => $country) {
        print"<option value=\"$key\">" . $country['name'] . "<option>";
      }
       ?>



      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input value="pavyko" name="zip" type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  <table class="table table-stripped table-dark">
    <tbody>
      <thead>
        <th>Name</th>
        <th>Age</th>
        <th>Adress</th>
        <th>url</th>
      </thead>
  <?php foreach ($usersData as $value):?>
      <tr class="">
        <td class=""><?php print $value['name'] ?></td>
        <td><?php print $value['age'] ?></td>
        <td><?php print $value['address'] ?></td>
        <td> <img class="img"src="<?php print $value['url'] ?>" alt=""> </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
