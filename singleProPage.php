<!-- Sri Krishna -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Products</title>
</head>
<body class="body">

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

	<section class="proDetailsSingle">

    <?php
    include 'config.php';

    if(isset($_GET['proCode'])){

        $proCode = $_GET['proCode'];
        $product_details = mysqli_query($con, "SELECT * FROM `union`.`productstable` WHERE proCode = $proCode");
        
        if ($product_details){

            $product_data = mysqli_fetch_assoc($product_details);

            if($product_data){
                
                $proName = $product_data['proName'];
                $proPrice = $product_data['proPrice'];
                $proImage = $product_data['proImage'];
                $proImgOne = $product_data['proImgOne'];
                $proImgTwo = $product_data['proImgTwo'];
                $proImgThree = $product_data['proImgThree'];

?>                
        
	<div class="proImgDivSingle">
        <img class="proImgSingle" id="proImg" alt="Product 1" src="proImages/<?php echo $proImage; ?>">
        <div class="changeImgSingle">
        <img class="imgOne" id="imgOne" alt="Product 1" src="proImages/<?php echo $proImgOne; ?>">
        <img class="imgTwo" id="imgTwo" alt="Product 2" src="proImages/<?php echo $proImgTwo; ?>">
        <img class="imgThree" id="imgThree" alt="Product 3" src="proImages/<?php echo $proImgThree; ?>">
        </div>
    </div>	
	<div class="proDescDivSingle">
		<h1 class="proNameSingle"><?php echo $proName ?></h1>
		<h1 class="proPriceSingle">₹<?php echo $proPrice ?></h1>
		<div class="rating">
			<i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>			
			<i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
            <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
            <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
            <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
		</div>
		<div class="proQtyCartSingle">
			<input type="number" value="1" class="proQtySingle" id="qtyField">
            <button class="proCartSingle" id="proCart"><a href="cart.php?proCode=<?php echo $proCode ?>">ADD TO CART</a></button>
		</div>
        <h1 class="detailsSingle">Product Details</h1>
		<div class="proDescSingle">
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione rerum, corporis delectus suscipit dolore in totam dolorem atque ut minus expedita voluptates aut, nisi non nesciunt? Autem officia laborum deleniti!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione rerum, corporis delectus suscipit dolore in totam dolorem atque ut minus expedita voluptates aut, nisi non nesciunt? Autem officia laborum deleniti!
		</div>
	</div>

<?php

}
else {
    echo "No pro found";
}
}
else {
echo "problem";
}

}

?>

	</section>

    <div class="title">
        <h1 class="bigText">RECOMMENDED</h1>
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
            <h3 class="cnt-txt1">CONTACT</h3>
            <h4 class="cnt-txt"><strong>Address:</strong> Shree Medha Degree College, Fort Road, Bellary</h4>
            <h4 class="cnt-txt"><strong>Phone:</strong> +91 0000000000, +91 0000000000</h4>
            <h4 class="cnt-txt"><strong>Hours:</strong> 8:30 to 4:30, Mon-Sat</h4>
            <div class="uni-onLogo">
            <img alt="Uni-On" src="logo2.png" class="Uni-ON">
            </div>
        </div>

        <div class="about">
            <h3 class="cnt-txt1">ABOUT</h3>
            <h4 class="cnt-txt"><a href="#">About Us</a></h4>
            <h4 class="cnt-txt"><a href="#">Delivery Information</a></h4>
            <h4 class="cnt-txt"><a href="#">Privacy Policy</a></h4>
            <h4 class="cnt-txt"><a href="#">Terms & Conditions</a></h4>
            <h4 class="cnt-txt"><a href="#">Contact Us</a></h4>
            <h3 class="cnt-txt2">@2024, Uni-On, Shree Medha Degree College</h3>
        </div>

        <div class="acc">
            <h3 class="cnt-txt1">ACCOUNT</h3>
            <h4 class="cnt-txt"><a href="#">Sign In</a></h4>
            <h4 class="cnt-txt"><a href="#">View Cart</a></h4>
            <h4 class="cnt-txt"><a href="#">My Wishlist</a></h4>
            <h4 class="cnt-txt"><a href="#">Track My Order</a></h4>
            <h4 class="cnt-txt"><a href="#">Help</a></h4>
        </div>

         <div class="payment">
                <h3 class="cnt-txt1">PAYMENT</h3>
                <div class="payImg">
                <a href="#"><img src="pay.png" class="pay"></a>
                </div>
            </div>

    </footer>

  <script src="singleProPage.js"></script>  
</body>
</html>
<!-- Sri Krishna -->