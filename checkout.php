<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Checkout</title>
    <style media="screen">
      .cam{
        text-align: center;
        margin-top: 50px;
      }
      body{
        background-color: #282828;
        color: white;
      }
      h1{
        text-align: center;
      }
      .overlay {
         height: 100%;
         width: 0;
         position: fixed;
         z-index: 1;
         top: 0;
         left: 0;
         background-color: rgb(0,0,0);
         background-color: rgba(0,0,0, 0.9);
         overflow-x: hidden;
         transition: 0.5s;
     }

     .overlay-content {
         position: relative;
         top: 25%;
         width: 100%;
         text-align: center;
         margin-top: 30px;
     }

     .overlay a {
         padding: 8px;
         text-decoration: none;
         font-size: 36px;
         color: #818181;
         display: block;
         transition: 0.3s;
     }

     .overlay a:hover, .overlay a:focus {
         color: #f1f1f1;
     }

     .overlay .closebtn {
         position: absolute;
         top: 20px;
         right: 0px;
         font-size: 60px;
     }

     @media screen and (max-height: 450px) {
       .overlay a {font-size: 20px}
       .overlay .closebtn {
         font-size: 40px;
         top: 15px;
         right: 35px;
       }
     }
     .menu{
                 z-index: 1;
               position: fixed;
             top: 1.8%;
         left: 1.5%;
         transform: scale(2);
             }
     .display{
     text-align: right;
             }

      .logout{
             background-color: #282828;
             border: none;
             font-size: 20px;
             position: fixed;
             right: 3%;
             top: 1.5%;
             color: white;
         }

         .button {
           background-color: #39b3d7;
           border: none;
           color: white;
           padding: 15px 250px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           margin: 280px 22px;
               margin-left: 22px;
           cursor: pointer;
           margin-left: 120px;
       }

    </style>
  </head>
  <body>
<h1>Pay</h1>
     <form class="cam" action="index.php" method="get">
       Full Name: <br> <input type="text" name="name" value=""><br>
       Email: <br><input type="text" name="email" value=""><br>
       Address: <br><input type="text" name="address" value=""><br>
       City: <br><input type="text" name="city" value=""><br>
       State: <br><input type="text" name="state" value=""><br>
       Zip Code: <br><input type="text" name="zip" value=""><br>
       Name on Card: <br><input type="text" name="cardname" value=""><br>
       CC Number: <br><input type="text" name="cc" value=""><br>
       Exp Month: <br><input type="text" name="exp" value=""><br>
       Exp Year: <br><input type="text" name="yr" value=""><br>
       CVV: <br><input type="text" name="cvv" value=""><br>
       <br>
       <input type="submit" name="" value="checkout">
     </form>
     <div id="myNav" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <div class="overlay-content">
           <a href="index.php">Rent Car</a>
           <a href="prepay.php">Get Parking Detail</a>
           <a href="home.php?logout='1'" >Logout</a>
         </div>
         </div>
     <span class="menu" style="font-size:15px;cursor:pointer" onclick="openNav()">&#9776;</span>

     <script>
     function openNav() {
       document.getElementById("myNav").style.width = "100%";
     }

     function closeNav() {
       document.getElementById("myNav").style.width = "0%";
     }
     </script>
  </body>
</html>
