<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clothes Shop - Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="newsflash-container">
        <div class="newsflash-wrapper">
            <div class="newsflash">|FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |
                 FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |   
            </div>
        </div>
    </div>
    </br>
    <nav>

        <div class="nav-links">
            <a href="men.php"  class="bn3">Men</a>
            <a href="women.php" class="bn3">Women</a>
        </div>
        
    <header>
      <a href="index.php">ELITE FASHION</a>
    </header>


    <div class="nav-links">
      <a href="Login.php" class="bn3">Login</a>
      <a href="checkout.php" class="bn3" id="cart"><img src="css/img/image-from-rawpixel-id-7692478-original.png" 
        style="max-width: 20px;height: auto;">Checkout: $<span id="cart-total">0.00</span></a>
        </br></br></br></br> </br></br>
    </nav>

</br></br> </br></br> 
        <section>
            <div class="signup-container">
                <h3>Sign Up</h3>
                <form action="registration_backend.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>

                    <button type="submit">Sign Up</button>
                    
                </form>
            </div>
        </section>
    </main>

    
    <div class="copyright">
        <a href="Contact Us.php" class="bn3">Contact Us</a>
        <a href="terms.php" class="bn3">Terms and Services</a>
        <p>&copy; Elite Fashion. All rights reserved.</p>
    </div>
    <script src="js/signup.js"></script>
</body>
</html>
