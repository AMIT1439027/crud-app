<?php
 include('connect.php');

 if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `crud` where id=$id";
    $result = mysqli_query($con,$ql);
    if($result){
        echo "Deleted successfull";
    }
    else{
        die(mysqli_error($con));
    }

 }
?>