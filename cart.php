<?php

include 'config.php';

// Check if 'slno' is provided in the URL
if (isset($_GET['proCode']) && !empty($_GET['proCode'])) {
    $id = intval($_GET['proCode']); // Sanitize input as an integer

    // Use a prepared statement to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM `union`.`productstable` WHERE proCode = ?");
    $stmt->bind_param("s", $id); // Bind $id as an integer
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $proName = $row['proName'];
        $proPrice = $row['proPrice'];
        $proImage = $row['proImage'];

	} else {
		echo "No product found with the given ID.";
	}

	$stmt->close(); // Close the prepared statement
} else {
	echo "Invalid or missing product ID.";
}

?>

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
            <a href="index.php"><li class="navBarEles">Home</li></a>
            <a href="shop.php"><li class="navBarEles">Shop</li></a>
            <a href="about.php"><li class="navBarEles">About</li></a>
            <a href="about.php#contactUs"><li class="navBarEles">Contact</li></a>
            <a href="login.php"><li class="navBarEles"><button class="loginBtn">Login/Signup</button></li></a>  
       </ul>
       <img src="images/menu-svgrepo-com.svg" alt="Menu Button" class="menuBtn">
    </nav>

    <nav class="navigationBarPhn">
        <div class="closeBtn">
            <a href="login.php"><li class="navBarEles"><button class="loginBtn">Login/Signup</button></li></a>
            <h1 class="closeText">close</h1>
        </div>
        <ul class="navBarElesCollectionPhn">
        <a href="index.php"><li class="navBarElesPhn">Home</li></a>
        <a href="shop.php"><li class="navBarElesPhn">Shop</li></a>
        <a href="about.php"><li class="navBarElesPhn">About</li></a>
        <a href="about.php#contactUs"><li class="navBarElesPhn">Contact</li></a>
        </ul>
     </nav>
    </header>

    <div class="proRow">
        
        <div class="proRowImg"><img src="proImages/<?php echo $proImage ?>" class="cartProImg"></div>
        <div class="proRowDetails">
          <h1 class="proRowName"><?php echo $proName ?></h1>
          <h1 class="proRowPrice">$<?php echo $proPrice ?></h1>
          <div class="sizeQtyFlex">
                <div class="proRowSize">Size:S</div>
                <div class="proRowQty">Qty:1</div>
          </div>
        </div>
    
    </div>

    <div class="payDetails">
        <h1 class="payTitle">PAYMENT DETAILS</h1>
        <div class="cartAmt">
            <h1 class="cartAmtTxt">Cart Amount</h1>
            <h1 class="cartAmtTxt">$<?php echo $proPrice ?></h1>
        </div>
        <div class="cartAmt">
            <h1 class="cartAmtTxt">Shipping</h1>
            <h1 class="cartAmtTxt">FREE</h1>
        </div>
        <div class="cartAmt">
            <h1 class="cartAmtTxt">Total</h1>
            <h1 class="cartAmtTxt">$<?php echo $proPrice ?></h1>
        </div>
    </div>


    <div class="title">
        <h1 class="bigText">OUR OTHER PRODUCTS</h1>
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