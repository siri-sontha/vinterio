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
        <div class="navbar">

            <img src="logo2.png" alt="Uni-On" class="logo">

            <div class="nav-ele">
            <ul>
                <li class="nav-ele-li"><a href="index.php">Home</a></li>
                <li class="nav-ele-li"><a href="shop.php">Shop</a></li>
                <li class="nav-ele-li"><a href="about.php">About</a></li>
                <li class="nav-ele-li"><a href="about.html#contactUs">Contact</a></li>
                <li class="nav-ele-li"><a href="cart.php"><img src="shopping-cart-svgrepo-com.svg" alt="cart" class="cart-icon"></a></li>
                <li class="nav-ele-li"><input class="search" type="text" placeholder="Search UNI-ON"></li>
                <li class="nav-ele-li"><a href="login.php"><button class="log-btn">Log In/Sign Up</button></a></li>
            </ul>
        </div>
        
           <img src="menu1.svg" class="menuBtn"></li>

            <div class="phnNav">
            <ul>
                <li><img src="close.svg" class="closeBtn"></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="about.php#contactUs">Contact</a></li>
                <li><a href="cart.php"><img src="shopping-cart-svgrepo-com.svg" alt="cart" class="cart-icon"></a></li>
                <li><a href="login.php"><button class="log-btn">Log In/Sign Up</button></a></li>
            </ul>
        </div>

        </div>
    </header>

	<section class="proDetails">

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
        
	<div class="proImgDiv">
        <img class="proImg" id="proImg" alt="Product 1" src="<?php echo $proImage; ?>">
        <div class="changeImg">
        <img class="imgOne" id="imgOne" alt="Product 1" src="<?php echo $proImgOne; ?>">
        <img class="imgTwo" id="imgTwo" alt="Product 1" src="<?php echo $proImgTwo; ?>">
        <img class="imgThree" id="imgThree" alt="Product 1" src="<?php echo $proImgThree; ?>">
        </div>
    </div>	
	<div class="proDescDiv">
		<h1 class="proName"><?php echo $proName ?></h1>
		<h1 class="proPrice">₹<?php echo $proPrice ?></h1>
		<div class="proSizes">
			<p class="size1">XS</p>			
			<p class="size1">S</p>	
			<p class="size1">M</p>	
			<p class="size1">L</p>
			<p class="size1">XL</p>
		</div>
		<div class="proQtyCart">
			<input type="number" value="1" class="proQty" id="qtyField">
            <button class="proCart" id="proCart"><a href="cart.php?proCode=<?php echo $proCode ?>">ADD TO CART</a></button>
		</div>
        <h1 class="details">Product Details</h1>
		<div class="proDesc">
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

    <h1 class="our-fs2">FEATURED PRODUCTS</h1>
    <h3 class="sub-txt">Uni-On Super Cool Collections</h3>

<section class="featured-pros">

<?php
include 'config.php';
$display_pro = mysqli_query($con, "SELECT * FROM `union`.`productstable`");
if(mysqli_num_rows($display_pro)>0){

    while($proDetails = mysqli_fetch_assoc($display_pro)){
        $proCode = $proDetails['proCode'];
        $pro_id = $proDetails['slno'];
        $proName = $proDetails['proName'];
        $proPrice = $proDetails['proPrice'];
        $proImg = $proDetails['proImage'];
?>

<div class="pro1" onclick="window.location.href='products.php?proCode=<?php echo $proCode; ?>'">
<?php echo "<img class='pro1-img' alt='Product 1' src='$proImg'>" ?>
 <div class="pro-des">
   <span class="des-txt">Shree Medha</span>
  <?php echo "<h4 class='des-txt'>$proName</h4>" ?>
  <?php echo "<h4 class='des-txt3'>$proPrice</h4>" ?>
   <a href="cart.php"><img src="cart-shopping-solid.svg" class="cart"></a>
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