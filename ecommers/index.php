<?php
include("includes/db.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fashion Life</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>

<body>

<!--Main contener starts-->
 <div class="main_wrapper">
<!-- Header starts-->
     <div class="header_wrapper">
          <img src="image/shopping-cart-.jpg" style="float:left" height="100px" width="300px"/>
          <img src="image/images.jpg" style="float:right" height="100px" width="700px"/>
     </div>
<!-- Header Ends-->
<!-- Navigation bar Stats-->
     <div id="navbar">
        
        <ul id="menu">
           <li><a href="#">Home</a></li>
           <li><a href="#">All Products</a></li>
           <li><a href="#">My Account</a></li>
           <li><a href="#">Sing Up</a></li>
           <li><a href="#">Shopping Cart</a></li>
           <li><a href="#">Contact Us</a></li>
        </ul>
        
        <div id="form">
            <form method="get" action="results.php" enctype="multpart/form-data">
              
             <input type="text" name="user-query" placeholder="search a product"/>
             <input type="submit" name="search" value="search" />
             
            </form> 
         </div>
     </div>
<!-- Navigation bar Ends-->     
     
     <div class="contener_warpper">
         <div id="left_sidebar">
            <div id="sidebar_title">categories</div>
              
                <ul id="cats">

                <?php

                  $get_cats = "select * from categories";

                  $run_cats = mysqli_query($con, $get_cats);

                  while ($row_cats=mysqli_fetch_array($run_cats)){

                     $cat_id = $row_cats['cat_id'];
                     $cat_title = $row_cats['cat_title'];
                  echo  "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
                  }
                 ?>   
                </ul>
                
               <div id="sidebar_title">Brand</div>
               
                 <ul id="cats">
                   <li><a href="#">mobail</a></li> 
                   <li><a href="#">ghori</a></li> 
                   <li><a href="#">Cameras</a></li> 
                   <li><a href="#">Computers</a></li>
                   <li><a href="#">Cameras</a></li> 
                   <li><a href="#">Computers</a></li> 
                </ul> 
              </div>
     
     <div class="footer"></div>

<!--Main contener Ends-->
</body>
</html>