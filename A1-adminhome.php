<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home page</title>

    <style>


    .btn{
        padding:8px 25px;
        margin:0px;
        border-radius:5px;
        background-color:lightblue;
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
         margin-top:0px;
            
     }
 
     input{
         margin:10px;
         width:80%;
         border:2px solid lightgreen;
         border-radius:6px;
         padding: 5px;
        
     }
    .container{

        width: 60%;
    }
    .main{
        display: flex;
        align-items:center;
        justify-content:center;
    }


    </style>

</head>
<body>


<div class="form">
    <h2 style="text-align:center;">Add items</h2>
<form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="upload" id="stdimg " ><br><br>
        <input type="text" name="t1" placeholder="Name"><br><br>
        <input type="text" name="t2" placeholder="Price "><br><br>
        <input type="text" name="t3" placeholder="Rating"><br><br>
        <input type="text" name="t4" placeholder="Description"><br><br>
        
   

       <button class="btn btn-primary" name="b1"> Add Record</button>
    </form>
    </div>
    <?php


   
$con = mysqli_connect('localhost','root','','pro1');
if(!$con){

    echo"ERROR Connect";

}

// else{

//     echo"ERROR Connect";

// };


if(isset($_POST['b1'])){

    $id = $_GET['updateid'];

    $filename=  $_FILES['upload']['name'];
    $tampname=  $_FILES['upload']['tmp_name'];
  
   $folder = "images/".$filename;
  
   move_uploaded_file($tampname, $folder);

   $name = $_POST['t1'];
   $price = $_POST['t2'];
   $rat = $_POST['t3'];
   $des = $_POST['t4'];


   $in = "INSERT INTO items(`img`,`name`,`price`,`rat`,`des`)values('$folder',' $name ',' $price ','$rat',' $des')";

   $q = mysqli_query($con,$in);

   if($con){

    echo"<script>alert('data successfully insertted in database')</script>";

}

else{

    echo"ERROR INSERT";

}


}


?>



<div class="conatiner">


    <table align=center border=2 style ="border-collapse: collapse; padding:20px;width:100%; " >
    <tr>
        <th>cid</th>
        <th>item-Image</th>
        <th>item-name</th>
        <th>item-price</th>
        <th>item-rating</th>
        <th>item-description</th>
        <th>Operation</th>
        
    </tr>

    <?php
  
//   $limit = 3;

//   $page = $_GET['page'];

//   if(isset($_GET['page'])){

//     $page = $_GET['page'];
//   }
//   else{

//     $page = 1;

//   }

//   $offset = ($page - 1)* $limit;

  
  $sql = "SELECT * FROM `items`";
    
  $result = mysqli_query($con,$sql);

if($result){

    while($row = mysqli_fetch_assoc($result)){

        $id = $row['id'];
        $img = $row['img'];
        $name = $row['name'];
        $price = $row['price'];
        $rat = $row['rat'];
        $des = $row['des'];
       
    echo '<tr>
      <td>'.$id.'      </td>
      <td> <img src='.$img.' height="100px" width="150px"> </td>
      <td>'.$name.'        </td>
      <td>'.$price.'      </td>
      <td>'.$rat.'         </td>
      <td>'.$des.'        </td>
      <td>  <button class= "btn btn-primary"id = "btn1"><a   href="A1-adminupdate.php? updateid='.$id.'  ">Update</a></button>
            <button class="btn btn-danger"id = "btn2" ><a   href="A1-admindelete.php? deleteid='.$id.'">Delete</a></button>
           </td>
          
       
    </tr>';

   



    }

}

?>


    </table>

</div>


<?php


// $sql1= "SELECT * from imgs";

// $result1 = mysqli_query($con,$sql1) or die("Query failed");


// if(mysqli_num_rows($result1)>0){


//     $total_records = mysqli_num_rows($result1);

  

//     $total_page = ceil($total_records / $limit);

//     echo '<ul style="display:flex; list-style:none; margin:20px;">';
//     if($page > 1){

//         echo'<li><a href="pagenation.php?page='.($page-1).'" class="btn link">Prev</a></li>';

//     }
   
//     for($i = 1; $i <= $total_page; $i++){

//         echo '<li style=" margin:20px; background-color:lightblue; padding:10px 20px; border-radius:4px;"><a href="pagenation.php?page='.$i.'"> '.$i.' </a></li>';

//     }

//     if($total_page > $page){

//         echo'<li><a href="pagenation.php?page='.($page+1).'" class="btn link">Next</a></li>';

//     }
  
//     echo '</ul>';
// }


?>




</body>
</html>