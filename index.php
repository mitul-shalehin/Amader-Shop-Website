<?php
   // Initialize the session
   session_start();
   
   ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Amader Shop</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500;600;700&display=swap" rel="stylesheet">
        <link href="demo.css" rel="stylesheet"></link>
         <link href="Extra Css/product.css" rel="stylesheet"></link>



    </head>

    <body style="background-color:#e6e6e6;">
 
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img   src="image/logo.png" width="80px">

                </div>

                <nav>

                    <ul id="MenuItems">


                        <li><a href="index.php" style="color: #0074D9;">Home</a></li>

                        <li><a href="Products.php"style="color: #0074D9;" >Shop Now</a></li>


                        <li><a href="" style="color: #0074D9;" >About</a></li>
                        <li><a href=""style="color: #0074D9;" >Contact</a></li>
                        <li><a href="account.php" style="color: #0074D9;" >Account</a></li>
                        
                    </ul>
                </nav>

             

                <img src="image/cart.png" width="25px" height="25px">


       <div class="search">
                    <form method="post" action="search.php" class="h-search" id="h-search">
                        <input type="text" placeholder=" Khujo "name="search">
                        <button>
                            <i class="fa fa-search" style="font-size: 10px;">
                    </i>
                </button>
            </form>
        </div>

        
            </div>
        </div>
    </div>


<br><br>

<div class="slideshow-container">
  <div class="mySlides1">
    <img src="image/s1.jpg" style=" width:100%  ">
  </div>

  <div class="mySlides1">
    <img src="image/s2.jpg" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="image/s3.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
<br><br><br>






    <!--Contents-->

   
   

    <!--products-->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
               <?php
                                include_once "database.php";
                                $result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_code` =27985");
                                $row = mysqli_fetch_array($result);
                                ?>

                                <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                    <div class="sectgl prod-i">
                                        <div class="prod-i-top">
                                            <a class="prod-i-img" href="<?php echo $row["path"]; ?>">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                            </a>
                                            <div class="prod-i-actions">
                                                <div class="prod-i-actions-in">

                                                    <p class="prod-i-cart">
                                                        <a href="#" data-name="<?php echo $row["name"]; ?>" data-price="<?php echo $row["price"]; ?>" class="add-to-cart btn btn-primary"><i class="icon ion-android-cart"></i><span></span></a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="prod-i-bot">
                                            <div class="prod-i-info">
                                                <p class="prod-i-price"><?php echo $row["price"]; ?>.00 Tk.</p>
                                                <p class="prod-i-categ"><a href="Product_page_mouse1.php"><?php echo $row["Catagory"]; ?></a></p>
                                            </div>
                                            <h3 class="prod-i-ttl"><a href="<?php echo $row["path"]; ?>"><?php echo $row["name"]; ?></a></h3>
                                        </div>
                                    </div>
                                </article>
            </div>
            <div class="col-4">
            <?php
                                include_once "database.php";
                                $result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_code` =29461");
                                $row = mysqli_fetch_array($result);
                                ?>

                                <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                    <div class="sectgl prod-i">
                                        <div class="prod-i-top">
                                            <a class="prod-i-img" href="<?php echo $row["path"]; ?>">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                            </a>
                                            <div class="prod-i-actions">
                                                <div class="prod-i-actions-in">

                                                    <p class="prod-i-cart">
                                                        <a href="#" data-name="<?php echo $row["name"]; ?>" data-price="<?php echo $row["price"]; ?>" class="add-to-cart btn btn-primary"><i class="icon ion-android-cart"></i><span></span></a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="prod-i-bot">
                                            <div class="prod-i-info">
                                                <p class="prod-i-price"><?php echo $row["price"]; ?>.00 Tk.</p>
                                                <p class="prod-i-categ"><a href="Product_page_mouse1.php"><?php echo $row["Catagory"]; ?></a></p>
                                            </div>
                                            <h3 class="prod-i-ttl"><a href="<?php echo $row["path"]; ?>"><?php echo $row["name"]; ?></a></h3>
                                        </div>
                                    </div>
                                </article>
            </div>
            <div class="col-4">
            <?php
                                include_once "database.php";
                                $result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_code` =27407");
                                $row = mysqli_fetch_array($result);
                                ?>

                                <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                    <div class="sectgl prod-i">
                                        <div class="prod-i-top">
                                            <a class="prod-i-img" href="<?php echo $row["path"]; ?>">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                            </a>
                                            <div class="prod-i-actions">
                                                <div class="prod-i-actions-in">

                                                    <p class="prod-i-cart">
                                                        <a href="#" data-name="<?php echo $row["name"]; ?>" data-price="<?php echo $row["price"]; ?>" class="add-to-cart btn btn-primary"><i class="icon ion-android-cart"></i><span></span></a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="prod-i-bot">
                                            <div class="prod-i-info">
                                                <p class="prod-i-price"><?php echo $row["price"]; ?>.00 Tk.</p>
                                                <p class="prod-i-categ"><a href="Product_page_mouse1.php"><?php echo $row["Catagory"]; ?></a></p>
                                            </div>
                                            <h3 class="prod-i-ttl"><a href="<?php echo $row["path"]; ?>"><?php echo $row["name"]; ?></a></h3>
                                        </div>
                                    </div>
                                </article>
            </div>
            <div class="col-4">
                <?php
                                include_once "database.php";
                                $result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_code` =42984");
                                $row = mysqli_fetch_array($result);
                                ?>

                                <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                    <div class="sectgl prod-i">
                                        <div class="prod-i-top">
                                            <a class="prod-i-img" href="<?php echo $row["path"]; ?>">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                            </a>
                                            <div class="prod-i-actions">
                                                <div class="prod-i-actions-in">

                                                    <p class="prod-i-cart">
                                                        <a href="#" data-name="<?php echo $row["name"]; ?>" data-price="<?php echo $row["price"]; ?>" class="add-to-cart btn btn-primary"><i class="icon ion-android-cart"></i><span></span></a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="prod-i-bot">
                                            <div class="prod-i-info">
                                                <p class="prod-i-price"><?php echo $row["price"]; ?>.00 Tk.</p>
                                                <p class="prod-i-categ"><a href="Product_page_mouse1.php"><?php echo $row["Catagory"]; ?></a></p>
                                            </div>
                                            <h3 class="prod-i-ttl"><a href="<?php echo $row["path"]; ?>"><?php echo $row["name"]; ?></a></h3>
                                        </div>
                                    </div>
                                </article>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
            <?php
                                include_once "database.php";
                                $result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_code` =45291");
                                $row = mysqli_fetch_array($result);
                                ?>

                                <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                    <div class="sectgl prod-i">
                                        <div class="prod-i-top">
                                            <a class="prod-i-img" href="<?php echo $row["path"]; ?>">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                            </a>
                                            <div class="prod-i-actions">
                                                <div class="prod-i-actions-in">

                                                    <p class="prod-i-cart">
                                                        <a href="#" data-name="<?php echo $row["name"]; ?>" data-price="<?php echo $row["price"]; ?>" class="add-to-cart btn btn-primary"><i class="icon ion-android-cart"></i><span></span></a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="prod-i-bot">
                                            <div class="prod-i-info">
                                                <p class="prod-i-price"><?php echo $row["price"]; ?>.00 Tk.</p>
                                                <p class="prod-i-categ"><a href="Product_page_mouse1.php"><?php echo $row["Catagory"]; ?></a></p>
                                            </div>
                                            <h3 class="prod-i-ttl"><a href="<?php echo $row["path"]; ?>"><?php echo $row["name"]; ?></a></h3>
                                        </div>
                                    </div>
                                </article>
            </div>
            <div class="col-4">
                 <?php
                                include_once "database.php";
                                $result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_code` =47883");
                                $row = mysqli_fetch_array($result);
                                ?>

                                <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                    <div class="sectgl prod-i">
                                        <div class="prod-i-top">
                                            <a class="prod-i-img" href="<?php echo $row["path"]; ?>">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                            </a>
                                            <div class="prod-i-actions">
                                                <div class="prod-i-actions-in">

                                                    <p class="prod-i-cart">
                                                        <a href="#" data-name="<?php echo $row["name"]; ?>" data-price="<?php echo $row["price"]; ?>" class="add-to-cart btn btn-primary"><i class="icon ion-android-cart"></i><span></span></a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="prod-i-bot">
                                            <div class="prod-i-info">
                                                <p class="prod-i-price"><?php echo $row["price"]; ?>.00 Tk.</p>
                                                <p class="prod-i-categ"><a href="Product_page_mouse1.php"><?php echo $row["Catagory"]; ?></a></p>
                                            </div>
                                            <h3 class="prod-i-ttl"><a href="<?php echo $row["path"]; ?>"><?php echo $row["name"]; ?></a></h3>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div class="col-4">
                 <?php
                                include_once "database.php";
                                $result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_code` =11199");
                                $row = mysqli_fetch_array($result);
                                ?>

                                <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                    <div class="sectgl prod-i">
                                        <div class="prod-i-top">
                                            <a class="prod-i-img" href="<?php echo $row["path"]; ?>">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                            </a>
                                            <div class="prod-i-actions">
                                                <div class="prod-i-actions-in">

                                                    <p class="prod-i-cart">
                                                        <a href="#" data-name="<?php echo $row["name"]; ?>" data-price="<?php echo $row["price"]; ?>" class="add-to-cart btn btn-primary"><i class="icon ion-android-cart"></i><span></span></a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="prod-i-bot">
                                            <div class="prod-i-info">
                                                <p class="prod-i-price"><?php echo $row["price"]; ?>.00 Tk.</p>
                                                <p class="prod-i-categ"><a href="Product_page_mouse1.php"><?php echo $row["Catagory"]; ?></a></p>
                                            </div>
                                            <h3 class="prod-i-ttl"><a href="<?php echo $row["path"]; ?>"><?php echo $row["name"]; ?></a></h3>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div class="col-4">
                 <?php
                                include_once "database.php";
                                $result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_code` =12401");
                                $row = mysqli_fetch_array($result);
                                ?>

                                <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                    <div class="sectgl prod-i">
                                        <div class="prod-i-top">
                                            <a class="prod-i-img" href="<?php echo $row["path"]; ?>">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                            </a>
                                            <div class="prod-i-actions">
                                                <div class="prod-i-actions-in">

                                                    <p class="prod-i-cart">
                                                        <a href="#" data-name="<?php echo $row["name"]; ?>" data-price="<?php echo $row["price"]; ?>" class="add-to-cart btn btn-primary"><i class="icon ion-android-cart"></i><span></span></a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="prod-i-bot">
                                            <div class="prod-i-info">
                                                <p class="prod-i-price"><?php echo $row["price"]; ?>.00 Tk.</p>
                                                <p class="prod-i-categ"><a href="Product_page_mouse1.php"><?php echo $row["Catagory"]; ?></a></p>
                                            </div>
                                            <h3 class="prod-i-ttl"><a href="<?php echo $row["path"]; ?>"><?php echo $row["name"]; ?></a></h3>
                                        </div>
                                    </div>
                                </article>
                            </div>
                           
                        </div>
            </div>
            

 


        <!--footer-->
        <div class="footer">
            <div class="row">

                 <div class="footer_0">
                     <img src="image/logo.png" width="80">
                    <h3>Amader Shop</h3>
                   
                
                </div>
               

                <div class="footer_1">
                    <h3> Project Of cse482</h>
                    
                    <p>Best price for buying</p>

                </div>
                
               
            </div>
            
        </div>
        <!---JS for Slideshow-->



        <script>
            var slideIndex = [1,1];
            var slideId = ["mySlides1", "mySlides2"]
            showSlides(1, 0);
            showSlides(1, 1);
            function plusSlides(n, no) {
                showSlides(slideIndex[no] += n, no);
            }
            function showSlides(n, no) {
                var i;
                var x = document.getElementsByClassName(slideId[no]);
                if (n > x.length) {slideIndex[no] = 1}    
                    if (n < 1) {slideIndex[no] = x.length}
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";  
                        }
                        x[slideIndex[no]-1].style.display = "block"; 
                    }
</script>







 

        
    </body>

</html>