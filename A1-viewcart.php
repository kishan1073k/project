
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View cart</title>
</head>
<body>

<button>Home</button> <button>cart</button>

<h2>Your Cart All Product</h2>

<?php

// foreach($_SESSION as $val){

//     print_r ($val);

// }

?>


<table border=2 width=100%>

    <tr>

        <th>Sno</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>update</th>
        <th>Delete</th>

    </tr>

    <tr>
        
       <?php
            // $sno =1;
            // $q =0;
            // $total;
            // $p = 0;
            // foreach($_SESSION as $products){

            //     echo"<tr>";
            //     echo"<td>".($sno++)."</td>";
            //     echo"<form action='A1-updatecart.php' method='post'>";
            //     foreach($products as $key => $value){

            //         if($key == 2){
            //             echo"<td><input type='number' name='name$key' value=".($value)."></td>";
            //             $q = $value;
    
            //         }
            //         elseif($key == 1){
            //             echo"<input type='hidden' name='name$key' value=".($value).">";
            //             echo"<td>".($value)."</td>";
            //             $p = $value;
            //         }
            //         elseif($key == 0){
            //             echo"<input type='hidden' name='name$key' value=".($value).">";
            //             echo"<td>".($value)."</td>";
            //         }
    
            //        }
               
            //    $total = $q * $p;
            //    echo "<td>$total </td>";
            //    echo "<td><input type='submit' name = 'event' value='update'></td>";
            //    echo "<td><input type='submit' name = 'event' value='delete'></td>";
             
            //     echo"</tr>";
            //     echo"</form>";


            // }

        ?>

    </tr>





</table>


</body>
</html> -->


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   

  <div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="text-warning">View cart</h1>
        </div>

    </div>

</div>


    <div class="container-fluid">

    <div class="row justify-content-around">

    <div class="col-sm-12 col-md-6 col-lg-9">

    <table class="table table-bordered text-center ">

    <thead class="bg-danger text-white fs-5 ">
<tr>
    <th>Sr no.</th>
    <th>Product Image</th>
    <th>Product Name</th>
    <th>Product price</th>
    <th>Product Quantity</th>
    <th>Total Price</th>
    <th>Update</th>
    <th>Delete</th>
</tr>
    </thead>

    <tbody>
<?php

session_start();
$total =0;
$bill = 0;


if(isset($_SESSION['cart'])){

    foreach($_SESSION['cart'] as $key => $value){

        $bill += (int)$value['productPrice']*$value['productQuantity'];
        $total = (int)$value['productPrice']*$value['productQuantity'];
        echo "<form action = 'A1-insertcart.php' method='post'>";
        echo "<tr>";
        echo "<td>". $key."</td>";
        echo "<td><img src='". $value['productImage']."'></td>";
        echo "<td> <input type='hidden' name= 'PName' value=". $value['productName'] .">". $value['productName'] ."</td>";
        echo "<td> <input type='hidden' name= 'PPrice' value=". $value['productPrice'] .">". $value['productPrice'] ."</td>";
        echo "<td> <input type='text' name= 'PQuantity' value=". $value['productQuantity'] ."></td>";
        echo "<td>". $total ."</td>";
        echo "<td><button name='update' class='btn btn-primary'>Update</button></td>";
        echo "<td><button name='remove' class='btn btn-danger'>Delete</button></td>";
        echo"<td><input type='hidden' name = 'item' value='$value[productName]'</td>";
     
        echo "</tr>";
        
        echo"</form>";

        ;


    }

}

?>

    </tbody>

    </table>

    </div>

    <div class="col-lg-3 text-center">

        <h3>TOTAL</h3>
        <h1 class="bg-danger text-white"><?php   $bill; echo number_format( $bill,2); ?></h1>

    </div>

    </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>



<!-- </body>
</html> -->