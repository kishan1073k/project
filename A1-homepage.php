
<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page </title>
    <link rel="stylesheet" 
    href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>


        
body {
    animation: fadeInAnimation ease 3.5s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
    scroll-behavior: smooth;
}
 
@keyframes fadeInAnimation {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
     }
}


        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: cursive;
        }
        .logo{
            margin-left: 9px;
            height: 40px;
            width: 0px;
            border-radius: 6px;
        }

        .header{
            background-color:#f7aeb5;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            left: 0;
            box-sizing: border-box;
           

        }
        .header img{
            width: 80px;
        }
        .navbar{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
        }
        .list{
            display: flex;
            align-items: center;
            justify-content: center;
            list-style: none;
            margin: 10px 30px;
        }
        .list li{

            margin: 0px 10px;
        }
        .link{

            color: black;
            font-size: 14px;
            text-decoration: none;
            font-weight: 900;
            padding: 10px 15px;
           

        }
        .link:hover{

            background-color: lightblue;
            padding: 10px 15px;
            border-radius: 7px;

        }
        .main{

          
            width: 100%;
           
           
          background-image: url('img/bg22.png');
            background-color: #cccccc;
            height: 500px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            opacity: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;

        }

        .main-div{
            border-radius: 10px;
            margin-left: 490px;
            height:550px;
             width:38%;
             display: flex;
             align-items: center;
             justify-content: center;
             flex-direction: column;
         
             background-repeat: no-repeat;
             background-size: cover;

        }
      

        .main-p{
            font-size: 22px;
            margin-left: 50px;
            width: 600px;
            margin: 10px;
            font-weight: bold;
            box-sizing: border-box;
            margin-left: 70px;
           
        }
        .main-p1{
            font-size: 18px;
            box-sizing: border-box;
            font-weight: bold;
            width: 500px;
            margin: 10px;
            margin-left: -20px;
            color: rgb(35, 159, 201);
        }

        .main-btn{


           background-image: url('img/bgbtn.png');
            padding: 30px 40px;
            background-size: 100% 100%;
            width: 180px;
             
                background-position: bottom center;
                border: none;
                margin-left: 550px;
                margin-top: 120px;
                border-radius: 7px;
                cursor: pointer;
                font-weight: bold;
                
        }
        #image{

            width: 100%;
            height: 500px;
        }
        .arrow{
          padding: 5px  30px;
          background: transparent;
        }
        .product{
            border-radius: 10px;
        }

        .content{
            text-align: center;
            width: 100%;
        }
        .gallery{
            display: flex;
            height: 420px;
            width: 315px;
        }
        .gdiv{
            margin: 15px;
            height: 390px;
            width: 315px;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            border: 2px solid black;
            border-radius: 5px;
            
        }
        .img{
            height: 300px;
            width: 285px;
        }
        .img:hover{

       
            transform: scale(0.9);
            transition: 1s ease;
            border-radius: 30px;
            box-shadow: 0 0 0 5px #ffffff;
            transition: .5s ease;
        }
        .buy
        {
            background-color: lightpink;
            padding: 5px 20px;
            border-radius: 5px;
            margin: 6px;


        }
        .buy:hover{
            background-color: lightblue;
            cursor: pointer;
        }
        .service{

            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;

        }
        .service-container{

            width: 300px;
            background-color: lightblue;
            height: 150px;
            margin: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;

        }
        .service-container img{

            height: 40px;
            margin: 10px 30px;
            background-color: white;
            border-radius: 15px;
        }
        .service-container img:hover{

            transform: scale(1.2); 

        }

        .service-container pre{
            font-size: 14px;
            color: black;
            font-weight: bold;
        }

        .service-container pre:hover{

            font-size: 14px;
            color: white;
            font-weight: bold;
        }

        .fff{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0px 10px 10px 10px;
        }
        .news{
            width: 100%;
            height: 500px;

            display: flex;
        }

        .news-div{

            width: 100%;
            margin: 15px;
            margin-top: 50px;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            border-radius: 1px;
        
        }
        .news-div img{

            height: 300px;
            width: 400px;
            margin: 1px;

        }
        
        .footer{

            background-color: rgb(227, 141, 136);
            height: 70vh;
            width: 100%;

        }
        .footer-div{
            display: flex;
            align-items: center;
            justify-content: space-between;
            
        }
        .footer-div pre{
            margin: 30px 0px;
            
        }
        .footer-div pre span{
            border: 2px solid black;
            border-radius: 10px;
            cursor: pointer;
        }
        .footer-div pre span:hover{
            color: white;
         
        }
        .footer-div1{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px 40px;
        }
        .footer-div1 img{
            margin: 0px 30px;
        }
        .footer-div1  h2{
            color: white;
            font-size: 29px;
        }

        .footer-img{
            display: flex;
       
        }
        .footer-img img{

            height: 150px;
            width: 200px;
            margin: 18px 7px;
        }

        .logo-footer{

            
            background-image: url('img/bgbtn.png');
            padding: 40px 60px;
            background-size: cover;
            color: black;
        }
        .hide{
            display: none;
        }
/* 
        start media query of screen 800 to 400 

        */
        @media only screen and (max-width: 800px) and (min-width: 400px)  {

            .header{
                background-color: rgb(229, 212, 211);
                display: block;
                width: 100%;
                text-align: center;
                
    
            }
            .header img{
                width: 80px;
            }
            .navbar{
                display: none;
                width: 100%;
                align-items: center;
                text-align: center;
              
                background-color: rgb(229, 212, 211);
            }
            .list{
               display: block;
               background-color: rgb(229, 212, 211);
           
            }
            .list li{
    
             
              margin:   20px;
                
            }
            .link{
                margin: 20px;
                padding: 10px 18px;
            }
          
           
            .hide{
                display: block;
                position: absolute;
               margin-top: -40px;
               margin-left: 30px;
              
            }
        

           
            
            .gallery{
                display: flex;
                flex-wrap: wrap;
               height: auto;
                width: 100%;
                align-items: center;
                justify-content: center;
            }
           













            .service{

            
                flex-wrap: wrap;
    
            }
            .service-container{
    
                
                display: flex;
                align-items: center;
                justify-content: center;
    
            }





            .news{
              
    
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
                height: auto;
                flex: 1;
            }
    
            .news-div img{

                height: 300px;
                width: 100%;
                margin: 1px;
    
            }














            .footer{

                background-color: rgb(227, 141, 136);
                height: auto;
                width: 100%;
    
            }
            .footer-div{
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-wrap: wrap;
                
            }
            .footer-div pre{
                margin: 20px 0px;
                display: flex;
                flex-direction: column;
                margin: 20px;
                padding: 20px;
                
            }
            
            
            .footer-div1{
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 10px 40px;
                flex-wrap: wrap;
                
            }
            .footer-div1 img{
                margin: 0px 30px;
            }
            .footer-div1  h2{
                color: white;
                font-size: 29px;
            }
    
            .footer-img{
                display: flex;
                flex-wrap: wrap;
           
            }
            .footer-img img{
    
                height: 150px;
                width: 200px;
                margin: 18px 7px;
            }
    
            .logo-footer{
    
                
                background-image: url('bgbtn.png');
                padding: 40px 60px;
                background-size: cover;
                color: black;
            }

        }
        /* .loginlist{
            display: none;
            position: static;
            margin:0px;
            background-color:white;
        }
        .login:hover + .loginlist{

            display: block;
            cursor: pointer;
            position: absolute;
            z-index: 1;
            width: 200px;
            margin-top: -35px;
            margin-left: -10px;
            
            



        } */
            
        
    </style>

</head>
<body>
    

    <header class="header">

        <img src="img/logo1.png" alt="" class="logo">
        <button class="hide" id="show_hide" onclick="myFunction()">click</button>
<nav class="navbar" id="nav">
        <ul class="list">
            <li><a href="#" class="link">Home</a></li>
            <li><a href="shop.html" class="link">Shop</a></li>
            <!-- <li><a href="#" class="link">Blog</a></li> -->
            <li><a href="contact.html" class="link">Contact&nbsp;Us</a></li>
            <li><a href="#" class="link">About &nbsp;Us </a></li>
            <li>
              <a href="A1-admin.php" class="link login">Admin </a> /
              <a href="A1-login.php " class="link login"> User </a>
<!--             
              <ul class="loginlist" >
                <li><a href="A1-login.php"> User </a></li>
                <li >Admin</li>
              </ul> -->

            </li>
              <li>
                <a href="#" class="link">  <i class="fa-solid fa-bag-shopping"></i></a></li>
        </ul>
</nav>


    </header>



    <div class="main">
     
<div class="main-div">    
        <!-- <p class="main-p">Make your family and friends feel special.</p>
        <p class="main-p1">The best gift you can give is a hug: one size fits all and no one ever minds if you return it.</p> -->

        <a class="main-btn">Shop Now!</a> <br>

     

        
<h1>Welcome <?php echo $_SESSION['email']; ?></h1>
       
        
    </div> 
   
    <!-- <img src="g2.jpg" class="main-img"  alt=""> -->

        <!-- <div class="product">

            <img src="bg1.jpg" height="500px" width="100%" id="img" alt="">
        
             <button onclick="change()" class="arrow"> < </button>&nbsp;<button onclick="change()" class="arrow"> > </button>
        

        </div> -->



    </div>

    <h2 style="text-align: center; margin:20px;">Our Service's</h2>
<div class="service">

    <div class="service-container">
        
        <img src="img/s1.png" alt="">
    
        <pre>FREE SHIPPING & 
RETURN
On all orders over $99</pre>
    </div>

    <div class="service-container">
        
        <img src="img/s2.png" alt="">
    
        <pre>MONEY BACK 
GUARANTEE
100% money back guarantee</pre>
    
    </div>

    <div class="service-container">
        
        <img src="img/s3.png" alt="">
    
        <pre>SAVE 20% WHEN YOU
Use credit card.</pre>
    
    </div>

    <div class="service-container">
        
        <img src="img/s4.png" alt="">
        <pre>100% SATISFACTION
If your are unable.</pre>
    
    
    </div>


</div>



    <div class="content">

        <h2>Our Latest Products</h2>

        <div class="gallery">

            <div class="gdiv"><img class="img" src="img/g1.jpg" alt=""> <br><div class="fff"><h3> <br> Teddy Bear <br>  ⭐⭐⭐⭐</h3> <pre>200.00$ <br><a href="coustmerinfo.html"><button class="buy">Buy Now!</button></a></pre> </div></div>  
            <div class="gdiv"><img class="img" src="img/g2.jpg" alt=""> <br><div class="fff"><h3> <br> Wallpaper <br>  ⭐⭐⭐⭐</h3> <pre>200.00$ <br> <a href="coustmerinfo.html"><button class="buy">Buy Now!</button></a></pre> </div></div>
            <div class="gdiv"><img class="img" src="img/g3.jpg" alt=""> <br><div class="fff"><h3> <br> Chocalate <br>  ⭐⭐⭐⭐</h3> <pre>200.00$ <br> <a href="coustmerinfo.html"><button class="buy">Buy Now!</button></a></pre> </div></div>
            <div class="gdiv"><img class="img" src="img/g4.jpg" alt=""> <br><div class="fff"><h3> <br> Watch <br>  ⭐⭐⭐⭐</h3> <pre>200.00$ <br>     <a href="coustmerinfo.html"><button     class="buy">Buy Now!</button></a></pre> </div> </div>

        </div>

    </div>

    <div class="content">


        <div class="gallery">

            <div class="gdiv"><img class="img" src="img/g6.webp" alt=""> <br><div class="fff"><h3> <br> Spray <br>  ⭐⭐⭐⭐</h3> <pre>200.00$ <br>         <a href="coustmerinfo.html"><button class="buy">Buy Now!</button></a></pre> </div></div>  
            <div class="gdiv"><img class="img" src="img/g11.jpeg" alt=""> <br><div class="fff"><h3> <br> Birthday-Gift <br>  ⭐⭐⭐⭐</h3> <pre>200.00$ <br><a href="coustmerinfo.html"><button class="buy">Buy Now!</button></a></pre> </div></div>
            <div class="gdiv"><img class="img" src="img/g9.webp" alt=""> <br><div class="fff"><h3> <br> Flowers <br>  ⭐⭐⭐⭐</h3> <pre>200.00$ <br>       <a href="coustmerinfo.html"><button class="buy">Buy Now!</button></a></pre> </div>  </div>
            <div class="gdiv"><img class="img" src="img/g10.jpg" alt=""> <br><div class="fff"><h3> <br>Special Gift <br>  ⭐⭐⭐⭐</h3> <pre>200.00$ <br>   <a href="coustmerinfo.html"><button class="buy">Buy Now!</button></a></pre> </div></div>

        </div>
        
    </div>



<h2 style="text-align: center;">OUR LATEST NEWS <br>
    <p>    Check out our most recent items </p> </h2>
    <div class="news">


        <div class="news-div"><img src="img/bg1.jpg" alt="">
        
            <p>

                <h2>Our Review</h2>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit facere reprehenderit molestiae cumque velit, harum voluptates modi a maiores tempora perspiciatis consequatur fugit.

            </p>

        </div>

        <div class="news-div"><img src="img/bg2.jpg" alt="">
            <p>

                <h2>Our Review</h2>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit facere reprehenderit molestiae cumque velit, harum voluptates modi a maiores tempora perspiciatis consequatur fugit. 

            </p>
        </div>

        <div class="news-div"><img src="img/bg3.jpg" alt="">
            <p>

                <h2>Our Review</h2>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit facere reprehenderit molestiae cumque velit, harum voluptates modi a maiores tempora perspiciatis consequatur fugit. 

            </p>
        </div>


    </div>





    <div class="footer">

        <div class="footer-div">
            <pre style="text-align: center;">
                           <span>   <b>  Phone: </b>(00) 123 456 789  </span>          <span>  <b> Address: </b>795 Folsom Ave, Suite 600 San Francisco, CA 94107 </span>         <span> <b> Email:</b> sales@yoursite.com  </span>                  </pre>
        </div>

        

        <div class="footer-div1">

            <img src="img/logo.jpg" height="100px" alt="">
            <h2 class="logo-footer">The Gift Library</h2>

        </div>


        <div class="footer-img">

            <img src="img/f1.jpg" alt="">
            <img src="img/f2.jpg" alt="">
            <img src="img/f3.jpg" alt="">
            <img src="img/f4.jpg" alt="">
            <img src="img/f5.jpg" alt="">
          
            <img src="img/f7.jpg" alt="">

        </div>

        <p style="text-align: center;">Copyright © 2021 Gifts Shop. All rights reserved.</p>
    </div>




    <script>
        function myFunction(){


            var navbar = document.getElementById('nav');
    
            navbar.classList.toggle("navbar");
    
        }
       
        </script>

</body>
</html>

