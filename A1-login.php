<?php


$con = mysqli_connect('localhost','root','','pro1');

if($con){


    echo "Connected sucessfully";

}
else{

    echo "ERROR";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>

<style>

*{
        margin:0;
        padding:0;
        font-family:cursive;
        box-sizing:border-box;

    }
    h2{
        text-align:center;
    }
    pre{
        text-align:center;
        margin-left:25%;
        margin-top:0px;
        border-radius:10px;

        background-color:lightgreen;
        width:50%;
    }
   
    .conatiner{
        width:70%;
        height:100vh;
        text-align:center;
    }

    form{
         
        display: flex;
        flex-direction:column;
        margin:20px;
        background-color:lightblue;  
        text-align:center;
        align-items:center;
        justify-content:center;
        border-radius:5px;
        padding:5px;

           
    }

    input{
        margin:10px;
        border:2px solid lightgreen;
        border-radius:6px;
        padding: 5px;
        width:80%;
    }
    button{
        margin:10px;
        border:none;
        border-radius:6px;
        background-color:lightgreen;
        width:30%;
        padding:6px;
        text-align:center;
       
    }
    .main{
        background-color:#9cc2cf;
        height:auto;
    }
    #lform{
        display: none;
    }

    </style>


</head>
<body>



<div class="main">



<pre><button onclick="showOrHideDiv()">Signup</button>or<button onclick="showOrHideDiv1()">Login</button></pre>

<div class="container">

    <form method="post" class="sform" id="sform">

 <h2>Signup Form</h2>

    <input name="t1" placeholder="Enter Your Username"  type="text">
    <input name="t2" placeholder="Enter Your Email"  type="text">
    <input name="t3" placeholder="Enter Your Password"  type="text">
    <button name="b1">Signup</button>


    </form>

    </div>

    
    <div class="container">

<form method="post" id="lform">

<h2>Login Form</h2>

<!-- <input name="t1" placeholder="Enter Your Username"  type="text"> -->
<input name="t4" placeholder="Enter Your Email"  type="text">
<input name="t5" placeholder="Enter Your Password"  type="text">
<button name="b2">Login</button>


</form>

</div>


</div>
    
</body>
</html>


<?php


    if(isset($_POST['b1'])){

        $username = $_POST['t1'];
        $email = $_POST['t2'];
        $password = $_POST['t3'];

        $in = "INSERT into `test` (`username`,`email`,`password`)values('$username','$email','$password')";

        $result=mysqli_query($con,$in);

        if($result){

            echo '<script>alert("Data Inserted successfully")</script>';
        }
        else{

            echo"DATANOT INSERTED ERROR";

        }

    }



?>




<?php


    if(isset($_POST['b2'])){

        // $username = $_POST['t1'];
        $email = $_POST['t4'];
        $password = $_POST['t5'];

       // if(($email == `email`) && ($password ==`password`)){

        $in = "SELECT * from test where `email` = '$email' AND `password` = '$password'";

        

        $result=mysqli_query($con,$in);
        $num= mysqli_num_rows($result);


        if($num >0){

             session_start();
             $_SESSION['email']= $email;
    
            header('location:A1-homepage.php');
        }
        else{

            echo" username or password invalid ERROR";

        }

    }
   // }


?>

<script>
   function showOrHideDiv() {
      var v = document.getElementById("sform");
      var y = document.getElementById("lform");
      if (v.style.display === "none") {
         v.style.display = "block";
         y.style.display = "none";
      } else {
         v.style.display = "none";
         y.style.display = "block";
      }
   }

   function showOrHideDiv1() {
      var v = document.getElementById("lform");
      var y = document.getElementById("sform");
      if (v.style.display === "block") {
         v.style.display = "none";
         y.style.display = "block";
      } else {
         v.style.display = "block";
         y.style.display = "none";
      }
   }
</script>

