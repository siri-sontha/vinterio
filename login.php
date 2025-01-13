<?php
session_start();

include 'config.php';
include 'register.php';
$invalid_input = false;

if (isset($_POST['email']) && isset($_POST['password'])) {
    // Get the input values from the login form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the SQL query with placeholders
    $query = "SELECT * FROM `union`.`signupform` WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($con, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ss", $email, $password); // "ss" means two string parameters

    // Execute the query
    mysqli_stmt_execute($stmt);

    // Store the result
    $result = mysqli_stmt_get_result($stmt);

    // Check if the query returned any result
    if (mysqli_num_rows($result) > 0) {
        // User is found, so start a session and redirect to a protected page
        $_SESSION['email'] = $email; // Store email in session
        $_SESSION['user_id'] = $user_id;
        header("location: index.php");
        exit();
    } else {
        // Invalid credentials
        $invalid_input = true;
    }
}
?>

    <!-- Sri Krishna -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <title>UNI-ON</title>
</head>
<body class="body">


<header>
    <nav class="navigationBar">
       <img src="images/logo4.png" alt="UNION" class="logo">
       <ul class="navBarElesCollection">
            <a href="shop.php"><li class="navBarEles">Shop</li></a>
            <a href="about.php"><li class="navBarEles">About</li></a>
            <a href="about.php#contactUs"><li class="navBarEles">Contact</li></a>
            <a href="cart.php"><li class="navBarEles"><img src="images/shopping-cart-svgrepo-com.svg" alt="Cart" class="cartNavLogo"></li></a>
       </ul>
       <img src="images/menu-svgrepo-com.svg" alt="Menu Button" class="menuBtn">
    </nav>

    <nav class="navigationBarPhn">
        <div class="closeBtn">
            <a href="cart.php"><img src="images/close-svgrepo-com.svg" alt="Cart"></a>
            <h1 class="closeText">close</h1>
        </div>
        <ul class="navBarElesCollectionPhn">
        <a href="shop.php"><li class="navBarElesPhn">Shop</li></a>
        <a href="about.php"><li class="navBarElesPhn">About</li></a>
        <a href="about.php#contactUs"><li class="navBarElesPhn">Contact</li></a>
        </ul>
     </nav>
    </header>


	<section class="loginOrSignup">
        
    <form id="logInForm" action="login.php" method="post" onsubmit="return validateLogIn()" >
	<section class="loginForm">
		<h1 class="formHeadTxt">Login to your Account</h1>

        <?php
            if($insert == true){
             echo "<p class='signedUpMsg'>THANKS FOR JOINING US!!</p>";
             }
        ?>

        <div class="inputParent">
		<input type="email" name="email" placeholder="Enter Your Email" id="logInEmail">
        <div id="errorDivLogIn" class="errorDivLogIn">
        <?php
            if($invalid_input == true){
             echo "<p class='errorDivLogIn'>Email or password do not match or don't exist</p>";
             }
        ?>
        </div>
        </div>

        <div class="inputParent">
		<input type="password" name="password" placeholder="Enter Your Password" id="logInPassword">
        <div id="errorDivLogIn" class="errorDivLogIn">
        <?php
            if($invalid_input == true){
             echo "<p class='errorDivLogIn'>Email or password do not match or don't exist</p>";
             }
        ?>
        </div>
        </div>

		<button name="loginBtn" class="loginFormBtn">Log In</button>
		<a class="noAccSignUpBtn" id="noAccSignUpBtn"><h1 class="formTxt">Don't have an account? Sign Up</h1></a>
	</section>
    </form>
    
    <form id="form" class="form" action="login.php" method="post" onsubmit="return validateSignUp()">
	<section class="signupForm">
		<h1 class="formHeadTxt">Sign Up your Account</h1>

        <div class="inputParent">
		<input type="text" name="name" placeholder="Name" id="signUpName">
        <div id="errorDiv" class="errorDiv"></div>
        </div>

        <div class="inputParent">
		<input type="email" name="email" placeholder="Email" id="signUpEmail">
        <div id="errorDiv" class="errorDiv">
        <?php
            if($email_exists == true){
             echo "<p class='errorDiv'>Email exists</p>";
             }
        ?> 
        </div>
        </div>
        
        <div class="inputParent">
		<input type="number" name="phno" placeholder="Phone Number" id="signUpPhNo">
        <div id="errorDiv" class="errorDiv"></div>
        </div>     

        <div class="inputParent">
		<input type="password" name="password" placeholder="Password" id="signUpPassword">
        <div id="errorDiv" class="errorDiv">
             <?php
            if($email_exists == true){
             echo "<p class='errorDiv'>Password already exists</p>";
             }
             ?> 
        </div>   
        </div>
  
		<button name="signupBtn" type="submit" class="loginFormBtn">Sign Up</button>
		<a class="accLogInBtn" id="accLogInBtn"><h1 class="formTxt">Already have an accout? Log In</h1></a>
	</section>
    </form>
	
	</section>

    <footer class="last-sec">

        <div class="contact">
            <h3 class="cnt-txt1">CONTACT</h3>
            <h4 class="cnt-txt"><strong>Address:</strong> Shree Medha Degree College, Fort Road, Bellary</h4>
            <h4 class="cnt-txt"><strong>Phone:</strong> +91 0000000000, +91 0000000000</h4>
            <h4 class="cnt-txt"><strong>Hours:</strong> 8:30 to 4:30, Mon-Sat</h4>
            <div class="uni-onLogo">
            <img alt="Uni-On" src="images/logo4.png" class="Uni-ON">
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
                <a href="#"><img src="images/pay.png" class="pay"></a>
                </div>
            </div>

    </footer>
    
    <script src="script.js"></script>
    <script src="login.js"></script>
    <script src="validateSignUp.js"></script>    
    <script src="validateLogIn.js"></script>        

</body>
</html>
<!-- Sri Krishna -->