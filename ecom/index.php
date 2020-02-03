<!DOCTYPE html>
<html>
<head>
<title>Ecommers Shop</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
 integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    
    <div id="top"><!--TopBar Stats-->
       <div class="container"><!--container Stats-->
          <div class="col-md-6 offer"><!--col-md-6 offer Stats-->
             <a href="#" class="btn btn-success btn-sm">
                Wellcome Guest
             </a>
             <a href="#">Shopping Cart Total Price, INT Total items 2</a>
          </div><!--col-md-6 offer Stats-->
          <div class="col-md-6">
              <ul class="menu">
                 <li>
                    <a href="customer_registration.php">Register</a>
                 </il>
                 <li>
                    <a href="checkout.php">My Account</a>
                 </il>
                 <li>
                    <a href="cart.php">Go To Cart</a>
                 </il>
                 <li>
                    <a href="login.php">Login</a>
                 </il>
              </ul> 
          
          </div>
       </div><!--container Ends-->
    </div><!--TopBar Ends-->
    <div class="navbar navbar default" id="navbar"><!--navbar navbar default Starts-->
        <div class="container">
             <div class="navbar-header"><!--navbar header Starts-->
                <a class="navbar-brand home" href="index.php">
                    <img src="images/amazon10.png" alt="amazon1" class="hidden-xs">
                    <img src="images/amazon20.png" alt="amazon2" class="visible-xs">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>

                </button>
                <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="search">
                    <span class="sr-only"></span>
                    <i class="fa fa-search"></i>

                </button>
             </div><!--navbar header Ends-->

           <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse Starts-->
               <div class="padding-nav"><!--padding-nav Starts-->
                  <ul class="nav navbar-nav navbar-left">
                     <li class="active">
                         <a href="index.php">Home</a>
                     </li>
                     <li>
                         <a href="shop.php">shop</a>
                     </li>
                     <li>
                         <a href="checkout.php">My Account</a>
                     </li>
                     <li>
                         <a href="cart.php">Shopping Cart</a>
                     </li>
                     <li>
                         <a href="services.php">services</a>
                    </li>
                    <li>
                         <a href="contuctus.php">Contuct Us</a>
                    </li>
      
                  </ul>

               </div><!--padding-nav Ends-->
               <a href="cart.php" class="btn btn-primary navbar-btn right">
                   <i class="fa fa-shopping-cart"></i>
                   <span>4 items In Cart</span>
               </a>
               <div class="navbar-collapse collapse-right"><!--navbar-collapse collapse-right Starts-->
                   <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse"
                   data-target="#search"> 
                      <span class="sr-only">Toggle Search</span>
                      <i class="fa fa-search"></i>
                   </button>

               </div><!--navbar-collapse collapse-right Ends-->

               
         </div><!--navbar-collapse collapse Starts-->

      </div>

    </div><!--navbar navbar default Ends-->
</body>
</html>