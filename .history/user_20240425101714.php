<?php
 include('connect.php');
if(isset($_POST['submit'])) {  

    $name = $_POST["name "];
    $email = $_POST["email"]; 
    $mobile = $_POST[ 'mobile'];
    $password = $_POST['password'];

    $sql = "insert `crud (name"

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
  <div class="container my-5">

  <form method ="post">
  <div class="form-group">
    <label >Enter Your Name</label>
    <input type="text" name ="name"  class="form-control" placeholder="Enter Your Name " autocomplete="off">
 
  </div>

  <div class="form-group">
    <label >Enter Your Email</label>
    <input type="email" name ="email"  class="form-control" placeholder="Enter Your email ">
 
  </div>
  <div class="form-group">
    <label >Enter Your Mobile</label>
    <input type="text" name ="mobile"  class="form-control" placeholder="Enter Mob Number  ">
 
  </div>
  <div class="form-group">
    <label >Enter Your password</label>
    <input type="password" name ="password"  class="form-control" placeholder="Enter Your password">
 
  </div>
  <button type="submit" name ='submit' class="btn btn-primary">Submit</button>
</form>
  </div>
 
  </body>
</html>