<?php
  $con = new mysqli('localhost', 'root', 'mysql143', 'crudoperation');

  if(!$con){
    // echo " Connection successful";
    die(mysqli_error($con));
  }
//   }else{
//     die(mysqli_error($con));
//   }

?>