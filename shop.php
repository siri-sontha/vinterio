<!-- Sri Krishna -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>UNION-Home</title>
</head>
<body>

    <header>
    <nav class="navigationBar">
       <img src="images/logo4.png" alt="UNION" class="logo">
       <ul class="navBarElesCollection">
            <li class="navBarEles">Shop</li>
            <li class="navBarEles">About</li>
            <li class="navBarEles">Contact</li>
            <li class="navBarEles"><img src="images/shopping-cart-svgrepo-com.svg" alt="Cart" class="cartNavLogo"></li>
            <li class="navBarEles"><button class="loginBtn">Login/Signup</button></li>
            
       </ul>
       <img src="images/menu-svgrepo-com.svg" alt="Menu Button" class="menuBtn">
    </nav>

    <nav class="navigationBarPhn">
        <div class="closeBtn">
            <img src="images/close-svgrepo-com.svg" alt="Cart">
            <h1 class="closeText">close</h1>
        </div>
        <ul class="navBarElesCollectionPhn">
             <li class="navBarElesPhn">Shop</li>
             <li class="navBarElesPhn">About</li>
             <li class="navBarElesPhn">Contact</li>
        </ul>
     </nav>
    </header>

    <section class="shopLandingCard">
    <div class="landingEles">
        <div class="landingTitle">
            <h1 class="landingTitleText">YOUR ONE STOP SHOP FOR CAMPUS ESSENTIALS</h1>
        </div>
        <div class="landingOptions">
            <h3 class="whatToShopText">What do you want to shop?</h3>
            <div class="landingCategories">
                <button>Uniforms</button>
                <button>Essentials</button>
                <button>Books</button>
            </div>
        </div>
    </div>
    </section>

    <div class="title">
        <h1 class="bigText">UNIFORMS</h1>
        <h2 class="smallText">STYLE UP WITH OUR EXCLUSIVE UNIFORMS</h2>
    </div>

    <section class="sectionThree">

        <?php
        include 'config.php';
        $display_pro = mysqli_query($con, "SELECT * FROM `union`.`uniforms` ");
        if(mysqli_num_rows($display_pro)>0){
    
            while($proDetails = mysqli_fetch_assoc($display_pro)){
                $proCode = $proDetails['proCode'];
                $proName = $proDetails['proName'];
                $proPrice = $proDetails['proPrice'];
                $proImg = $proDetails['proImage'];
        ?>
    
            <div class="product" onclick="window.location.href='singleProPage.php?slno=<?php echo $pro_id; ?>'">
                 <img src="proImages/<?php echo $proImg ?>" alt="Product" class="proImage">
                <div class="proDesc">
                    <div class="proDetails">
                        <h1 class="brand">Shree Medha</h1>
                        <h2 class="proName"><?php echo $proName ?></h2>
                        <h3 class="proPrice"> ₹<?php echo $proPrice ?></h3>
                    </div>
                    <div class="cartIconDiv">
                        <img src="images/cart-shopping-solid.svg" alt="Cart icon" class="cartIcon">
                    </div>
                </div>
            </div>    
        
        <?php
            }
        }
        ?>    
        </section>

        <div class="title">
        <h1 class="bigText">ESSENTIALS</h1>
        <h2 class="smallText">COLLEGE NEEDS AT ONE SPOT</h2>
    </div>

    <section class="sectionThree">

        <?php
        include 'config.php';
        $display_pro = mysqli_query($con, "SELECT * FROM `union`.`essentials` ");
        if(mysqli_num_rows($display_pro)>0){
    
            while($proDetails = mysqli_fetch_assoc($display_pro)){
                $proCode = $proDetails['proCode'];
                $proName = $proDetails['proName'];
                $proPrice = $proDetails['proPrice'];
                $proImg = $proDetails['proImage'];
        ?>
    
            <div class="product" onclick="window.location.href='singleProPage.php?slno=<?php echo $pro_id; ?>'">
                 <img src="proImages/<?php echo $proImg ?>" alt="Product" class="proImage">
                <div class="proDesc">
                    <div class="proDetails">
                        <h1 class="brand">Shree Medha</h1>
                        <h2 class="proName"><?php echo $proName ?></h2>
                        <h3 class="proPrice"> ₹<?php echo $proPrice ?></h3>
                    </div>
                    <div class="cartIconDiv">
                        <img src="images/cart-shopping-solid.svg" alt="Cart icon" class="cartIcon">
                    </div>
                </div>
            </div>    
        
        <?php
            }
        }
        ?>    
        </section>

        <div class="title">
        <h1 class="bigText">BOOKS</h1>
        <h2 class="smallText">DIVE INTO THE PAGES THAT INSPIRE, IMAGINE, AND CREATE </h2>
    </div>

    <section class="sectionThree">

        <?php
        include 'config.php';
        $display_pro = mysqli_query($con, "SELECT * FROM `union`.`books` ");
        if(mysqli_num_rows($display_pro)>0){
    
            while($proDetails = mysqli_fetch_assoc($display_pro)){
                $proCode = $proDetails['proCode'];
                $proName = $proDetails['proName'];
                $proPrice = $proDetails['proPrice'];
                $proImg = $proDetails['proImage'];
        ?>
    
            <div class="product" onclick="window.location.href='singleProPage.php?slno=<?php echo $pro_id; ?>'">
                 <img src="proImages/<?php echo $proImg ?>" alt="Product" class="proImage">
                <div class="proDesc">
                    <div class="proDetails">
                        <h1 class="brand">Shree Medha</h1>
                        <h2 class="proName"><?php echo $proName ?></h2>
                        <h3 class="proPrice"> ₹<?php echo $proPrice ?></h3>
                    </div>
                    <div class="cartIconDiv">
                        <img src="images/cart-shopping-solid.svg" alt="Cart icon" class="cartIcon">
                    </div>
                </div>
            </div>    
        
        <?php
            }
        }
        ?>    
        </section>

    <footer class="last-sec">

        <div class="contact">
            <h3 class="cnt-txt1">Contact</h3>
            <h4 class="cnt-txt"><strong>Address:</strong> SMDC, Fort Road, Bellary</h4>
            <h4 class="cnt-txt"><strong>Phone:</strong> +91 0000000000</h4>
            <h4 class="cnt-txt"><strong>Hours:</strong> 8:30 to 4:30, Mon-Sat</h4>
            <div class="uni-onLogo">
            <img alt="Uni-On" src="images/logo4.png" class="Uni-ON">
            </div>
        </div>

        <div class="about">
            <h3 class="cnt-txt1">About</h3>
            <h4 class="cnt-txt"><a href="#">About Us</a></h4>
            <h4 class="cnt-txt"><a href="#">Delivery Information</a></h4>
            <h4 class="cnt-txt"><a href="#">Privacy Policy</a></h4>
            <h4 class="cnt-txt"><a href="#">Terms & Conditions</a></h4>
            <h4 class="cnt-txt"><a href="#">Contact Us</a></h4>
            <h3 class="cnt-txt2">@2024, UNION, SMDC</h3>
        </div>

        <div class="acc">
            <h3 class="cnt-txt1">Account</h3>
            <h4 class="cnt-txt"><a href="#">Sign In</a></h4>
            <h4 class="cnt-txt"><a href="#">Log In</a></h4>
            <h4 class="cnt-txt"><a href="#">View Cart</a></h4>
            <h4 class="cnt-txt"><a href="#">Help</a></h4>
        </div>

         <div class="payment">
                <h3 class="cnt-txt1">Payment</h3>
                <div class="payImg">
                <a href="#"><img src="images/pay.png" class="pay"></a>
                </div>
        </div>

    </footer>    

    <script src="script.js"></script>
</body>
</html>
<!-- Sri Krishna -->