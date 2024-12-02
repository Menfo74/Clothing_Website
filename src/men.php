<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Elite Fashion</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style>
        .main-image {
            max-width: 700px;
            height: auto;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        main {
            flex: 1;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: black;
            color: wheat;
        }

        .footer a {
            margin: 5px;
        }

        .footer p {
            margin-top: 10px;
        }
    </style>
    
</head>

<body>
    <div class="newsflash-container">
        <div class="newsflash-wrapper">
            <div class="newsflash">
                |FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |
                FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |
                FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |
                FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |
            </div>
        </div>
    </div>
    <br><br><br><br>

    <nav>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search..." class="bn3" style="background-color: black; color: aliceblue;">
            <button onclick="performSearch()"><img src="css/img/image-from-rawpixel-id-9693528-original.png" style="max-width: 90px;height: auto;"></button>
        </div>

        <div id="searchResults"></div>

        <header>
            <a href="index.php">ELITE FASHION</a>
        </header>

        <div class="nav-links">
            <a href="Login.php" class="bn3">Login</a>
            <a href="checkout.php" class="bn3" id="cart">
                <img src="css/img/image-from-rawpixel-id-7692478-original.png" style="max-width: 20px;height: auto;">
                Checkout: $<span id="cart-total">0.00</span>
            </a>
        </div>
    </nav>

    <main>
        <section id="Welcome">
            <h1 style="position: fixed;">| M E N |</h1>
        </section>

        <section class="featured-clothes">
    <div class="clothing-item transparent-background">
        <img src="css/img/whitehoodie.png" alt="Clothing Item" class="transparent-background" style="width: 250px; height: auto;">
        <h3>HOODIE</h3>
        <p class="price">$29.99</p>
        <form action="add_to_cart.php" method="post">
            <input type="hidden" name="item_name" value="HOODIE">
            <input type="hidden" name="price" value="29.99">
            <input type="hidden" name="quantity" value="1">
            <button type="submit">
                <img src="css/img/image-from-rawpixel-id-7692478-original.png" style="max-width: 20px;height: auto;">
                ADD TO CART
            </button>
        </form>
    </div>
    
    <div class="clothing-item transparent-background">
        <img src="css/img/pants.png" alt="Clothing Item" class="transparent-background" style="width: 250px; height: auto;">
        <h3>Pants</h3>
        <p class="price">$29.99</p>
        <form action="add_to_cart.php" method="post">
            <input type="hidden" name="item_name" value="Pants">
            <input type="hidden" name="price" value="29.99">
            <input type="hidden" name="quantity" value="1">
            <button type="submit">
                <img src="css/img/image-from-rawpixel-id-7692478-original.png" style="max-width: 20px;height: auto;">
                ADD TO CART
            </button>
        </form>
    </div>
</section>

<section class="featured-clothes">
    <div class="clothing-item transparent-background">
        <img src="css/img/pijamas.png" alt="Clothing Item" class="transparent-background" style="width: 250px; height: auto;">
        <h3>Pijamas</h3>
        <p class="price">$29.99</p>
        <form action="add_to_cart.php" method="post">
            <input type="hidden" name="item_name" value="Pijamas">
            <input type="hidden" name="price" value="29.99">
            <input type="hidden" name="quantity" value="1">
            <button type="submit">
                <img src="css/img/image-from-rawpixel-id-7692478-original.png" style="max-width: 20px;height: auto;">
                ADD TO CART
            </button>
        </form>
    </div>
    
    <div class="clothing-item transparent-background">
        <img src="css/img/pants.png" alt="Clothing Item" class="transparent-background" style="width: 250px; height: auto;">
        <h3>Pants</h3>
        <p class="price">$29.99</p>
        <form action="add_to_cart.php" method="post">
            <input type="hidden" name="item_name" value="Pants">
            <input type="hidden" name="price" value="29.99">
            <input type="hidden" name="quantity" value="1">
            <button type="submit">
                <img src="css/img/image-from-rawpixel-id-7692478-original.png" style="max-width: 20px;height: auto;">
                ADD TO CART
            </button>
        </form>
    </div>
</section>

<section class="featured-clothes">
    <div class="clothing-item transparent-background">
        <img src="css/img/Product1.png" alt="Clothing Item" class="transparent-background" style="width: 250px; height: auto;">
        <h3>T-Shirt</h3>
        <p class="price">$29.99</p>
        <form action="add_to_cart.php" method="post">
            <input type="hidden" name="item_name" value="T-Shirt">
            <input type="hidden" name="price" value="29.99">
            <input type="hidden" name="quantity" value="1">
            <button type="submit">
                <img src="css/img/image-from-rawpixel-id-7692478-original.png" style="max-width: 20px;height: auto;">
                ADD TO CART
            </button>
        </form>
    </div>
    
    <div class="clothing-item transparent-background">
        <img src="css/img/pants.png" alt="Clothing Item" class="transparent-background" style="width: 250px; height: auto;">
        <h3>Pants</h3>
        <p class="price">$29.99</p>
        <form action="add_to_cart.php" method="post">
            <input type="hidden" name="item_name" value="Pants">
            <input type="hidden" name="price" value="29.99">
            <input type="hidden" name="quantity" value="1">
            <button type="submit">
                <img src="css/img/image-from-rawpixel-id-7692478-original.png" style="max-width: 20px;height: auto;">
                ADD TO CART
            </button>
        </form>
    </div>
</section>

    <footer class="footer">
        <a href="Contact Us.php" class="bn3">Contact Us</a>
        <a href="terms.php" class="bn3">Terms and Services</a>
        <p>&copy; Elite Fashion | All rights reserved</p>
    </footer>

    <script src="js/index.js"></script>
</body>
</html>
