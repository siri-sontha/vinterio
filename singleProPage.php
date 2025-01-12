<!-- Sri Krishna -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Products</title>
</head>
<body class="body">

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
		<div class="proSizes">
			<p class="size1">XS</p>			
			<p class="size1">S</p>	
			<p class="size1">M</p>	
			<p class="size1">L</p>
			<p class="size1">XL</p>
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
        <h1 class="bigText">MORE PRODUCTS</h1>
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

        <div class="product" onclick="window.location.href='products.php?slno=<?php echo $pro_id; ?>'">
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