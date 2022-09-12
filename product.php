<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
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



<div class="small-container">
   

   <h1 class="n2">All Products</h1><br><br>
    <div class="row">

         <div class="col-4">
 <form action="manage.php" method="POST">
            <img src="images/gallery-2.jpg">
           <h4>Red printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>    
            </div>
            <p>300.00 Rs.</p>
            <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Red printed T-Shirt">
            <input type="hidden" name="price" value="300">

</form>
</div>     
        <div class="col-4">
<form action="manage.php" method="POST">      
            <img src="images/product-2.jpg">
            <h4>Hrx Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                
            </div>
            <p>500.00 Rs.</p>
            <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Hrx Shoes">
            <input type="hidden" name="price" value="500">
    
</form>
</div>

    <div class="col-4">
 <form action="manage.php" method="POST">
        <img src="images/product-3.jpg">
        <h4>Track Pants</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            
        </div>
        <p>750.00 Rs.</p>
        <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
        <input type="hidden" name="item_name" value="Track Pants">
            <input type="hidden" name="price" value="750">
         
</form>
</div>

<div class="col-4">
<form action="manage.php" method="POST">
        <img src="images/product-6.jpg">
        <h4>Black printed T-Shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            
        </div>
        <p>250.00 Rs.</p>
        <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
        <input type="hidden" name="item_name" value="Black printed T-Shirt">
            <input type="hidden" name="price" value="250">
        
</form>
</div>

<div class="col-4">
<form action="manage.php" method="POST">
    <img src="images/product-5.jpg">
    <h4>White Shoes</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            
        </div>
        <p>350.00 Rs.</p>
        <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
        <input type="hidden" name="item_name" value="White Shoes">
            <input type="hidden" name="price" value="350">
    
</form>
</div>

    <div class="col-4">
    <form action="manage.php" method="POST">
    <img src="images/product-4.jpg">
    <h4>Blue T-Shirt</h4>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        
    </div>
    <p>250.00 Rs.</p>
    <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
    <input type="hidden" name="item_name" value="Blue T-Shirt">
            <input type="hidden" name="price" value="250">
   
</form>
</div>
        <div class="col-4">
        <form action="manage.php" method="POST"> 
                       <img src="images/product-10.jpg">
                        <h4>Black Sport Shoes</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            
                        </div>
                        <p>650.00 Rs.</p>
                        <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
                        <input type="hidden" name="item_name" value="Black Sport Shoes">
            <input type="hidden" name="price" value="650">
                        
</form>
</div>

            <div class="col-4">
            <form action="manage.php" method="POST">
               <img src="images/product-8.jpg">
               <h4> Fossil Watch</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    
                </div>
                <p>350.00 Rs.</p>
                <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="item_name" value="Fossil Watch">
            <input type="hidden" name="price" value="350">
                
</form>
</div>
                <div class="col-4">
                <form action="manage.php" method="POST">                  
                    <img src="images/product-9.jpg">
                    <h4>Timing Watch</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        
                    </div>
                    <p>250.00 Rs.</p>
                     <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
                    <input type="hidden" name="item_name" value="Timing Watch">
            <input type="hidden" name="price" value="250">
                    
</form>
</div>
                    <div class="col-4">
                    <form action="manage.php" method="POST">
            <img src="images/product-7.jpg">
            <h4>Hrx Shocks</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                
            </div>
            <p>150.00 Rs.</p>
            <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Hrx Shocks">
            <input type="hidden" name="price" value="150">
            
</form>
</div>
                        <div class="col-4">
                        <form action="manage.php" method="POST">
                            <img src="images/product-11.jpg">
                            <h4>Normal Shoes</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                
                            </div>
                            <p>250.00 Rs.</p>
                            <button type="submit" class="btn btn-primary"  name="Add_To_Cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Normal Shoes">
            <input type="hidden" name="price" value="250">
                            
</form>
</div>
                            <div class="col-4">
                            <form action="manage.php" method="POST">                             
                                <img src="images/product-12.jpg">
                                <h4>Black Gym Track Pant</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    
                                </div>
                                <p>750.00 Rs.</p>
                                <button type="submit"   class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
                                <input type="hidden" name="item_name" value="Black Gym Track Pant">
            <input type="hidden" name="price" value="750">
                                
</form>
</div>
                        <div class="page-btn">
                            <span class="s1">1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>&#8594;</span>
                        </div>
            </div>
 
<!-----------footer------>
               <div class="footer">
                   <div class="container">
                       <div class="row">
                           <div class="footer-col-1">
                               <h3>Download Our App</h3>
                               <p>Download App for Android and ios mobile phone.</p>
                           <div class="app-logo">
                               <img src="images/play-store.png">
                               <img src="images/app-store.png">
                           </div>
                            </div>
                           <div class="footer-col-2">
                           <img src="images/logo.png">
                            <p>Download App for Android and ios mobile phone.</p>
                        </div>
                        <div class="footer-col-3">
                            <h3>Useful Links</h3>
                            <ul>
                                <li>Coupons</li>
                                <li>Blog Post</li>
                                <li>Return Policy</li>
                                <li>Join Affiliate</li>
                            </ul>
                        </div>
                        <div class="footer-col-4">
                            <h3>Follow us</h3>
                            <ul>
                                <li>Facebook</li>
                                <li>Twitter</li>
                                <li>Instagram</li>
                                <li>Youtube</li>
                            </ul>
                        </div>
                       </div>
                       <hr>
                       <p class="copyright">Copyright 2022 - Easy Tutorials</p>
                   </div>

               </div>


               <!-----js for toggle menu------->
               <script>
                   var MenuItems = document.getElementById("MenuItems");

                   MenuItems.style.maxHeight = "0px";

                   function menutoggle(){
                       if(MenuItems.style.maxHeight == "0px")
                       {
                           MenuItems.style.maxHeight = "200px";
                       }
                      else{
                          MenuItems.style.maxHeight="0px";
                      }
        
                   }


               </script>

    
</body>
</html>