<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="container">
         <div class="navbar">
     <div class="logo">
        <a href="index.php"><img src="images/logo.png" width="125px"></a>

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
     <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div> 
</div>

<!-------single product details---->

<div class="small-container single-product">
    <div class="row";>
        <div class="col-2">

            <img src="images/gallery-1.jpg" width="100%" id="ProductImg">

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="images/gallery-1.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-2.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-3.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-4.jpg" width="100%" class="small-img">
                </div>
            </div>




        </div>
        <div clas="col-2">
            <p>Home/T-shirt</p>
            <h1>Red Printed T-shirt</h1>
            <h4>300.00 Rs.</h4>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Large</option>
                <option>Medium</option>
                <option>Small</option>
            </select>
            <input type="number" value="1">
            <a href="cart.php" class="btn">Add To Cart</a>
            <h3>Product Details<i class="fa fa-indent"></i></h3>
            <br>
            
                <ul class="bulet">
                   <li> Care Instructions: Machine Wash</li>
                   <li>Fit Type: Regular</li>
                   <li>Color name: High Risk Red</li>
                   <li> Material: Cotton</li>
                   <li> Short Sleeves</li>
                   <li>Machine Wash</li>
                </ul>
           
        </div>
    </div>
</div>


<!-----title------>
 <div class="small-container">
     <div class="row row-2">
         <h2>Related Products</h2>
         <p>View More</p>
     </div>

 </div>
<div class="small-container">
  <div class="row">       
   <div class="col-4">
        <img src="images/product-5.jpg">
        <h4>white Shoes</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            
        </div>
        <p>350.00 Rs.</p>
    </div>
       
          <div class="col-4">
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
            </div>
            
                <div class="col-4">
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
                    </div>
                    <div class="col-4">
                        <img src="images/product-10.jpg">
                        <h4>Black Shoes</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            
                        </div>
                        <p>650.00 Rs.</p>
                        </div>
                        
                                
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

    ------js for product gallery------->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function(){
            ProductImg.src= SmallImg[0].src;
        }
        SmallImg[1].onclick = function(){
            ProductImg.src= SmallImg[1].src;
        }
        SmallImg[2].onclick = function(){
            ProductImg.src= SmallImg[2].src;
        }
        SmallImg[3].onclick = function(){
            ProductImg.src= SmallImg[3].src;
        }

    </script>


</body>
</html>
