<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

// Retrieve cart items from session
$cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- Include CSS files for styling -->
    <link rel="stylesheet" href="style-test.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="https://i.postimg.cc/x8ncvFjr/logo.png"></a>
        <div>
            <ul id="navbar">
                <?php if(isset($user_data['name'])): ?>
                    <li>Welcome, <?php echo $user_data['name']; ?></li>
                <?php endif; ?>
                <li><a href="store.php">Home</a></li>
                <li><a href="#" class="active">Checkout</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </section>

    <section class="container content-section">
        <h2 class="section-header">Checkout</h2>
        <!-- Display user's address and details -->
        <div class="user-details">
            <h3>User Details:</h3>
            <?php if(isset($user_data['name'])): ?>
                <p>Name: <?php echo $user_data['name']; ?></p>
                <p>Email: <?php echo $user_data['user_name']; ?></p>
                <!-- Add more user details as needed -->
                <h3>Address:</h3>
                <p><?php echo $user_data['address']; ?></p>
                <p><?php echo $user_data['city']; ?>, <?php echo $user_data['state']; ?></p>
                <p>Phone: <?php echo $user_data['phone']; ?></p>
            <?php else: ?>
                <p>User details not available.</p>
            <?php endif; ?>
        </div>

        <!-- Display products in the cart -->
        <div class="cart-items">
            <h3>Products:</h3>
<!-- Display cart items -->
<?php foreach ($cartItems as $item): ?>
    <div>
        <span><?php echo $item['title']; ?></span>
        <span><?php echo $item['price']; ?></span>
    </div>
<?php endforeach; ?>
        </div>

        <!-- Add total price and checkout button -->
        <?php
        // Calculate total price
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += ($item['price'] * $item['quantity']);
        }
        ?>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <!-- Display total price -->
            <span class="cart-total-price">₹<?php echo $totalPrice; ?></span>
        </div>
        <!-- Redirect to checkout.php when the button is clicked -->
        <button class="btn btn-primary btn-purchase" type="button" onclick="redirectToCheckout()">PURCHASE</button>
    </section>

    <!-- Include footer section -->
    <!-- Add footer styling here -->

    <!-- Include JavaScript file -->
    <script src="store.js"></script>
</body>
</html>
