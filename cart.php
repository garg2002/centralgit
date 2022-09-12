<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="container">
         <div class="navbar">
     <div class="logo">
        <a href="index.php"><img src="images/logo.png" width="80px"></a>

     </div>
    
     <nav>
        <ul id="MenuItems">
            <li><a href="index.php"class="b1">Home</a></li>
            <li><a href="product.php"class="b2">Product</a></li>
            <li><a href="about.php"class="b4">About</a></li>
            <li><a href="account.php"class="b5">Account</a></li>
        </ul>
     </nav>
     <div class="c1"><a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a></div> 
     
    </div> 
</div>

<!------ cart items --- -->

<div class="cart-page col-lg-12">
    <div class="row">
     
            <h1>My Cart</h1><br>

    </div>

  <table>
  <div class="col-lg-9">
    <tr>
        <th>Serial_no</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th></th>
      
    </tr>
  </div>
    <?php
    
    if(isset($_SESSION['cart']))
    {
       
   
       foreach($_SESSION['cart'] as $key => $value)
         {
            $sr=$key+1;
           
            echo"
            <tr>
              <td>$sr</td>
              <td>$value[item_name]</td>
              <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
              <td>
              <form action='manage.php' method='POST'>
              <input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[quantity]' min='1' max='10'>
              </td>
              <td class='itotal'></td>
              <td>
              <form action='manage.php' method='POST'>
              <button name='Remove'  class='btn btn-primary'>Remove</button>
              <input type='hidden' name='item_name' value='$value[item_name]'>
              </form>
              </td>
            </tr>
            ";
         }
    }
    ?>
    
   </table>

   <div class="totalbtn">  
      <u><h3>Grand Total</h3></u><br>
      <h4 class="text-right" id="gtotal"></h4><br>
     </div>
</div>
</div>
<?php 
  if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
  { 
?>
<form class="formnew" action="purchase.php" method="POST">
  
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" name="full_name" class="form-control" required>
  </div>
  <br>
  <div class="form-group">
    <label>Phone No.</label>
    <input type="text"  name="phone_no"class="form-control" required>
  </div>
  <br>
  <div class="form-group">
    <label>Address  </label>
    <input type="text" name="address" class="form-control" required>
  </div>
  <br>
  <div class="form-check">
    <input type="radio" name="pay_mode" value="COD" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="flexRadioDefault2">
      Cash On Delivery
    </label>
    <div class="form-check">
    <input type="radio" name="pay_mode" value="NB" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="flexRadioDefault2">
      Net Banking
    </label>
    <div class="form-check">
    <input type="radio" name="pay_mode" value="paytm" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="flexRadioDefault2">
      Paytm Wallet
    </label>
    <br>
  </div>
  <button type="submit" class="btn btn-primary" name="purchase" >Order now</button>
</form>
<?php 
  }
?>


             <script>
                   
                   var gt=0;
                   var iprice = document.getElementsByClassName('iprice');
                   var iquantity = document.getElementsByClassName('iquantity');
                   var itotal = document.getElementsByClassName('itotal');
                   var gtotal = document.getElementById('gtotal');

                   function subTotal()
                   {
                       gt=0;
                       for(i=0;i<iprice.length;i++)
                       {
                           itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                           gt=gt+(iprice[i].value)*(iquantity[i].value);

                       }
                       gtotal.innerText=gt;
                   }

                   subTotal();
               </script>

  

</body>
</html>