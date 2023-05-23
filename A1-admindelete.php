<?php
   
$con = mysqli_connect('localhost','root','','pro1');
if(!$con){

    echo"ERROR Connect";

}




if(isset($_GET['deleteid'])){


    $id = $_GET['deleteid'];

    $sql = "DELETE from `items` WHERE `id` = $id ";

    $result = mysqli_query($con,$sql);
    if($result){

        echo"<script>alert('Deleted successfully')</script>";
        header('location:A1-adminhome.php');
       
    }
    else{
        die(mysqli_error($con));
    }

}

?>