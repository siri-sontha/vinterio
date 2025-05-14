<!-- Sri Krishna -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>UNION-Home</title>
</head>
<body>

<header>
    <nav class="navigationBar">
       <h1>v interio</h1>
       <ul class="navBarElesCollection">
            <a href="shop.php"><li class="navBarEles">Shop</li></a>
            <a href="about.php"><li class="navBarEles">About</li></a>
            <a href="about.php#contactUs"><li class="navBarEles">Contact</li></a>
            <a href="cart.php"><li class="navBarEles"><i class="fa-solid fa-cart-shopping fa-sm" style="color: black;" class="cartNavLogo"></i></li></a>
            <a href="login.php"><li class="navBarEles"><button class="loginBtn">Login/Signup</button></li></a>  
       </ul>
       <img src="images/menu-svgrepo-com.svg" alt="Menu Button" class="menuBtn">
    </nav>

    <nav class="navigationBarPhn">
        <div class="closeBtn">
            <a href="cart.php"><i class="fa-solid fa-cart-shopping fa-sm" style="color: black;" class="cartNavLogo"></i></a>
            <a href="login.php"><button class="loginBtn">Login/Signup</button></a>
            <h1 class="closeText">close</h1>
        </div>
        <ul class="navBarElesCollectionPhn">
        <a href="shop.php"><li class="navBarElesPhn">Shop</li></a>
        <a href="about.php"><li class="navBarElesPhn">About</li></a>
        <a href="about.php#contactUs"><li class="navBarElesPhn">Contact</li></a>
        </ul>
     </nav>
    </header>
    

    <!-- <section class="sectionOne">
            <img src="images/vinterio.jpg" alt="Image" class="image">
            <button>shop now</button>
    </section> -->

    <section class="sectionOne">
        <div>
            <p>v interio</p>
            <p>perfect interior decor store</p>
            <p>give your home a new look by adding our luxurious show pieces and aesthetic decors</p>
            <p>order online or visit the store now</p>
            <button>shop now</button>
        </div>    
            <img src="images/v2.jpg" alt="Image" class="image">     
    </section>

    <div class="title">
        <h1 class="bigText">FEATURES</h1>
        <h2 class="smallText">WHY CUSTOMERS ALWAYS LOVE TO SHOP FROM US?</h2>
    </div>

    <section class="sectionTwo">

    <div class="featureCard">
        <img src="images/f2.png">
        <div>
            <h2>Easy Purchase</h2>
        </div>
    </div>

    <div class="featureCard">
        <img src="images/f7.png">
        <div>
            <h2>Super Discounts</h2>
        </div>
    </div>

    <div class="featureCard">
        <img src="images/f4.png">
        <div>
            <h2>Latest Collections</h2>
        </div>
    </div>

    <div class="featureCard">
        <img src="images/f5.png">
        <div>
            <h2>Quality Products</h2>
        </div>
    </div>

    <div class="featureCard">
        <img src="images/f6.png">
        <div>
            <h2>24/7 Support</h2>
        </div>
    </div>

    </section>

    <div class="title">
        <h1 class="bigText">OUR PRODUCTS</h1>
        <h2 class="smallText">HOT DEALS YOU CAN'T MISS ON UNION</h2>
    </div>

    <section class="sectionThree">

    <?php
    include 'config.php';
    $display_pro = mysqli_query($con, "SELECT * FROM `union`.`productstable` LIMIT 10");
    if(mysqli_num_rows($display_pro)>0){

        while($proDetails = mysqli_fetch_assoc($display_pro)){
            $proCode = $proDetails['proCode'];
            $proName = $proDetails['proName'];
            $proPrice = $proDetails['proPrice'];
            $proImg = $proDetails['proImage'];
    ?>

        <div class="product" onclick="window.location.href='singleProPage.php?proCode=<?php echo $proCode; ?>'">
             <img src="proImages/<?php echo $proImg ?>" alt="Product" class="proImage">
            <div class="proDesc">
                <div class="proDetails">
                    <h1 class="brand">VINTERIO</h1>
                    <h2 class="proName"><?php echo $proName ?></h2>
                    <h3 class="proPrice"> ₹<?php echo $proPrice ?></h3>
                </div>
                <div class="cartIconDiv">
                <a href="cart.php?proCode=<?php echo $proDetails['proCode'] ?>"><img src="images/cart-shopping-solid.svg" alt="Cart icon" class="cartIcon"></a>
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
            <h4 class="cnt-txt"><strong>Address:</strong>Basweshwar Nagar 1st Cross, Bellary</h4>
            <h4 class="cnt-txt"><strong>Phone:</strong> +91 0000000000</h4>
            <h4 class="cnt-txt"><strong>Hours:</strong> 9:00 to 8:00, Mon-Sat</h4>
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
            <h3 class="cnt-txt2">@2025, VINTERIO</h3>
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