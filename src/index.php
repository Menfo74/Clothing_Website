<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Elite Fashion</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    <style>
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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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

    <div class="newsflash-container">
        <div class="newsflash-wrapper">
            <div class="newsflash">
                |FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |
                 FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |
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
            <a href="checkout.php" class="bn3" id="cart"><img src="css/img/image-from-rawpixel-id-7692478-original.png" style="max-width: 20px;height: auto;">Checkout: $<span id="cart-total">0.00</span></a>
            <a href="logout.php" class="bn3">Logout</a> <!-- Logout button -->
        </div>
    </nav>

    <main>
        <nav>
            <div class="nav-links">
                <a href="women.php"><img src="css/img/dalle.png" alt="Shop Women Image" class="transparent-background main-image" width="700" height="1000"></a>
                <nav>
                    <a href="women.php" class="bn3" style="font-size: 30px; border-width: 1px;">WOMEN'S FASHION</a>
                </nav><br><br>
            </div>
        </nav>

        <nav>
            <div class="nav-links">
                <nav>
                    <a href="men.php" class="bn3" style="font-size: 30px; border-width: 1px;">MEN'S FASHION</a>
                </nav>
                <a href="men.php"><img src="css/img/dalle1.png" alt="Shop Men Image" class="transparent-background main-image" style="margin-left: 20px;" width="600" height="1000"></a>
            </div>
        </nav><br><br><br><br><br><br>
    </main>

    <div class="footer">
        <br><br>
        <a href="Contact Us.php" class="bn3">Contact Us</a>
        <a href="terms.php" class="bn3">Terms and Services</a>
        <p>&copy; Elite Fashion | All rights reserved</p>
    </div>

    <script src="js/index.js"></script>
</body>
</html>
