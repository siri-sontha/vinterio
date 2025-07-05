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

    <section class="aboutUs" id="aboutUs">
        <div class="abtUsTitleDiv">
            <h1 class="abtUsTitleText">ABOUT US</h1>
        </div>
        <div class="aboutUsRow">
            <div class="rowCard">
                <h3 class="rowCardText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod excepturi repellendus mollitia minus itaque cupiditate nobis, est rerum nemo voluptatum molestiae, possimus sed fugit illo voluptates perferendis. Nesciunt, qui expedita.</h3>
            </div>
            <div class="rowCardImageDiv"><img src="images/uniform.png" alt="Uniform Image" class="rowCardImage"></div>
        </div>
        <div class="aboutUsRow">
            <div class="rowCardImageTwoDiv"><img src="images/books5.png" alt="Uniform Image" class="rowCardTwoImage"></div>
            <div class="rowCard">
                <h3 class="rowCardText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod excepturi repellendus mollitia minus itaque cupiditate nobis, est rerum nemo voluptatum molestiae, possimus sed fugit illo voluptates perferendis. Nesciunt, qui expedita.</h3>
            </div>
        </div>
    </section>

    <div class="abtUsTitleDiv" id="contactUs">
        <h1 class="abtUsTitleText">CONTACT US</h1>
    </div>

    <section class="contactUs">
        <h3 class="leaveMsgText">LEAVE US A MESSAGE</h3>
        <div class="contactUsFlex">
        <div class="leaveMsgDiv">
            <input type="text" class="inputBox" placeholder="Name:">
            <input type="email" class="inputBox" placeholder="Email:">
            <textarea class="inputBox" placeholder="Address:"></textarea>
            <textarea class="inputBox" placeholder="Message:"></textarea>   
        </div>
        <div class="leaveMsgImgs">
            <img src="images/card.png" alt="Image">
            <img src="images/pen1.png" alt="Image">
            <img src="images/book1.png" alt="Image">
        </div>
        </div>
    </section> 

    <div class="title">
        <h1 class="bigText">FEATURES</h1>
        <h2 class="smallText">REASONS WHY YOU WILL ENJOY SHOPPING FROM US</h2>
    </div>

    <section class="sectionTwo">

    <div class="featureCard">
        <img src="images/f2.png" alt="Online Order">
        <div class="featureTitleOne">
            <h2 class="featureTitleText">Online Order</h2>
        </div>
    </div>

    <div class="featureCard">
        <img src="images/f7.png" alt="Online Order">
        <div class="featureTitleTwo">
            <h2 class="featureTitleText">Save Money</h2>
        </div>
    </div>

    <div class="featureCard">
        <img src="images/f4.png" alt="Online Order">
        <div class="featureTitleThree">
            <h2 class="featureTitleText">Super Offers</h2>
        </div>
    </div>

    <div class="featureCard">
        <img src="images/f5.png" alt="Online Order">
        <div class="featureTitleFour">
            <h2 class="featureTitleText">Happy Sell</h2>
        </div>
    </div>

    <div class="featureCard">
        <img src="images/f6.png" alt="Online Order">
        <div class="featureTitleFive">
            <h2 class="featureTitleText">24/7 Support</h2>
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
        $display_pro = mysqli_query($con, "SELECT * FROM `union`.`productstable` LIMIT 8");
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
                        <h1 class="brand">Shree Medha</h1>
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