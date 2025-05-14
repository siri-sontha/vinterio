<?php

include 'config.php';

if(isset($_POST['addPro'])){

    $proCode = $_POST['proCode'];
    $proName = $_POST['proName'];
    $proPrice = $_POST['proPrice'];
    $proImage = $_FILES['proImage']['name'][0];
    $proImgOne = $_FILES['proImage']['name'][1];
    $proImgTwo = $_FILES['proImage']['name'][2];
    $proImgThree = $_FILES['proImage']['name'][3];
    $proImageTempName = $_FILES['proImage']['tmp_name'][0];
    $proImgOneTempName = $_FILES['proImage']['tmp_name'][1];
    $proImgTwoTempName = $_FILES['proImage']['tmp_name'][2];
    $proImgThreeTempName = $_FILES['proImage']['tmp_name'][3];
    $proImageFolder = 'proImages/';
    $whichFile = $_POST['whichFile'];

    if($whichFile == 'Uniforms'){
    $insertProducts = mysqli_query($con, "INSERT INTO `union`.`uniforms` (proCode,proName,proPrice,proImage,proImgOne,proImgTwo,proImgThree) VALUES('$proCode','$proName','$proPrice','$proImage','$proImgOne',' $proImgTwo','$proImgThree')") OR die("insert query failed");
    $insertProductsTwo = mysqli_query($con, "INSERT INTO `union`.`productstable` (proCode,proName,proPrice,proImage,proImgOne,proImgTwo,proImgThree) VALUES('$proCode','$proName','$proPrice','$proImage','$proImgOne',' $proImgTwo','$proImgThree')") OR die("insert query failed");

    if($insertProducts && $insertProductsTwo){
        move_uploaded_file($proImageTempName, $proImageFolder . $proImage);
            move_uploaded_file($proImgOneTempName, $proImageFolder . $proImgOne);
            move_uploaded_file($proImgTwoTempName, $proImageFolder . $proImgTwo);
            move_uploaded_file($proImgThreeTempName, $proImageFolder . $proImgThree);
        echo "products inserted successfully";
    }
    else{
        echo "there is some error";
    }

    }

    else if($whichFile == 'Books'){
        $insertProducts = mysqli_query($con, "INSERT INTO `union`.`books` (proCode,proName,proPrice,proImage,proImgOne,proImgTwo,proImgThree) VALUES('$proCode','$proName','$proPrice','$proImage','$proImgOne',' $proImgTwo','$proImgThree')") OR die("insert query failed");
        $insertProductsTwo = mysqli_query($con, "INSERT INTO `union`.`productstable` (proCode,proName,proPrice,proImage,proImgOne,proImgTwo,proImgThree) VALUES('$proCode','$proName','$proPrice','$proImage','$proImgOne',' $proImgTwo','$proImgThree')") OR die("insert query failed");

        if($insertProducts && $insertProductsTwo){
            move_uploaded_file($proImageTempName, $proImageFolder . $proImage);
            move_uploaded_file($proImgOneTempName, $proImageFolder . $proImgOne);
            move_uploaded_file($proImgTwoTempName, $proImageFolder . $proImgTwo);
            move_uploaded_file($proImgThreeTempName, $proImageFolder . $proImgThree);
            echo "products inserted successfully";
        }
        else{
            echo "there is some error";
        }
    
        }

    else if($whichFile == 'Essentials'){
        $insertProducts = mysqli_query($con, "INSERT INTO `union`.`essentials` (proCode,proName,proPrice,proImage,proImgOne,proImgTwo,proImgThree) VALUES('$proCode','$proName','$proPrice','$proImage','$proImgOne',' $proImgTwo','$proImgThree')") OR die("insert query failed");
        $insertProductsTwo = mysqli_query($con, "INSERT INTO `union`.`productstable` (proCode,proName,proPrice,proImage,proImgOne,proImgTwo,proImgThree) VALUES('$proCode','$proName','$proPrice','$proImage','$proImgOne',' $proImgTwo','$proImgThree')") OR die("insert query failed");

        if($insertProducts && $insertProductsTwo){
            move_uploaded_file($proImageTempName, $proImageFolder . $proImage);
            move_uploaded_file($proImgOneTempName, $proImageFolder . $proImgOne);
            move_uploaded_file($proImgTwoTempName, $proImageFolder . $proImgTwo);
            move_uploaded_file($proImgThreeTempName, $proImageFolder . $proImgThree);
            echo "products inserted successfully";
        }
        else{
            echo "there is some error";
        }
    
        }  
        
     else{
        echo "Please Enter right category, Uniforms/Books/Essentials";
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
        <form action="" class="addProForm" method="post" enctype="multipart/form-data">
        <section class="addNewPro">
        <h1 class="formHeadTxt">Add Product Here</h1><h1> </h1>
            <input type="number" name="proCode" placeholder="Enter Product Code" required>
            <input type="text" name="proName" placeholder="Enter Product Name" required>
            <input type="number" name="proPrice" placeholder="Enter Product Price" min="0" required>
            <input multiple type="file" name="proImage[]" accept="image/png, image/jpg, image/jpeg" required>
            <input type="text" name="whichFile" placeholder="Uniforms/Books/Essentials" required>
            <button type="submit"  name="addPro" class="addProBtn">Add Product</button>
        </section>    
        </form>  

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

  <script src="index.js"></script>  
</body>
</html>
<!-- Sri Krishna -->