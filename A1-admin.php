

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>

<style>

    *{
        margin:0;
        padding:0;
        font-family:cursive;
        width:100%;
        box-sizing:border-box;

    }
    .conatiner{
        width:100%;
        height:100vh;
        text-align:center;
    }

    form{
         
        display: flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        margin:20px;
        background-color:lightblue;  
        width:80%;
        border-radius:10px;
        text-align:center;
        margin-left:150px;
        margin-top:100px;
           
    }

    input{
        margin:10px;
        width:80%;
        border:2px solid lightgreen;
        border-radius:6px;
        padding: 5px;
       
    }
    button{
        margin:10px;
        border:none;
        border-radius:6px;
        background-color:lightgreen;
        width:30%;
        text-align:center;
        margin-left:5%;
    }

    </style>


</head>
<body>

<div class="container">

    <form method="post">

    <h2><u>Admin Login</u></h2> 

    <!-- <input name="t1" placeholder="Enter Your Username"  type="text"> -->
    <input name="t2" placeholder="Enter Your username"  type="text">
    <input name="t3" placeholder="Enter Your Password"  type="text">
    <button name="b1">Submit</button>


    </form>

    </div>

    
</body>
</html>





<?php

   
$con = mysqli_connect('localhost','root','','pro1');
if(!$con){

    echo"ERROR Connect";

}


    if(isset($_POST['b1'])){

        // $username = $_POST['t1'];
        $username = $_POST['t2'];
        $password = $_POST['t3'];

       // if(($email == `email`) && ($password ==`password`)){

        $in = "SELECT * from admin where `username` = '$username' AND `password` = '$password'";

        

        $result=mysqli_query($con,$in);
        $num= mysqli_num_rows($result);


        if($num >0){

            session_start();
            $_SESSION['username']= $username;
          
            header('location:A1-adminhome.php');
        }
        else{

            echo" username or password invalid ERROR";

        }

    }
   // }


?>