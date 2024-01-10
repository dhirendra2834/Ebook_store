<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <style>
      a{
         font-size: 24px;
      }
        a:hover{
         font-size: 36px;
         background-color: aqua;
        }
        .zoom-in-out {
        transition: transform 0.3s;
    }

    .zoom-in-out:hover {
        transform: scale(1.2); /* Increase the font size by 20% on hover */
    }
    </style>
</head>
<body>


<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>


<header class="header">

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo"><strong>BOOKHUB</strong></a>

         <nav class="navbar" style="font-weight: bold; color:black;">

            <a href="home.php" class="zoom-in-out">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="shop.php">SHOP</a>
            <a href="contact.php">CONTACT</a>
            <a href="orders.php">ORDERS</a>
            <a href="products.php">PRODUCT</a>
         </nav>
         <div class="navitem">
            <div class="icons" style="display: inline-block;">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
            </div>

           <div class="user-box">
             <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
             <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
             <a href="logout.php" class="delete-btn">logout</a>
           </div>
         <!-- <div style="display: inline-block; margin-left: 15px;">
             <a href="login.php"><button type="button" class="btn btn-outline-primary">Login</button></a>
             <a href="register.php"><button type="button" class="btn btn-outline-primary">Signup</button></a>
         
         </div> -->
         
      </div>
   </div>

</header>


</body>
</html>
