<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

    <div class="newsflash-container">
        <div class="newsflash-wrapper">
            <div class="newsflash"> |FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |
                 FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |   
            </div>
        </div>
    </div>
    </br></br></br></br></br>
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

    </nav>

</br></br></br></br> 
    <main style="
    color:#000000; font-family: 'Fantasy', 'Copperplate';
        text-align: center; color: white;
            padding: 2em;
            background-color: black; 
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1); 
            border-radius: 40px;
            margin: 2em auto;
            max-width: 400px;
            border: 1px solid white;">

<form action="contactus_backend.php" method="post">
            <h3>Contact Us</h3>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </br></br></br></br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </br></br></br></br>
            <label for="message">Message:</label>
        </br></br>
            <textarea id="message" name="message" rows="4" required></textarea>
        </br></br>
            <button type="submit">Submit</button>
        </form>

    </main>

</br></br> </br></br></br></br> </br></br>


    <div class="copyright">
        <a href="Contact Us.php" class="bn3">Contact Us</a>
        <a href="terms.php" class="bn3">Terms and Services</a>
        <p>&copy; Elite Fashion. All rights reserved.</p>
    </div>

<script src="js/contactus.js"></script>
</body>
</html>
