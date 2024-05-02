<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Include your CSS stylesheets and any other meta tags or scripts as needed -->
    <link rel="stylesheet" href="style-test.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Berkshire+Swash&family=Comic+Neue:wght@700&family=Gentium+Book+Plus:wght@400;700&family=Lato:ital,wght@0,400;0,700;0,900;1,700&family=Lexend+Deca:wght@500&family=Lexend:wght@500&family=Montserrat:wght@500&family=Open+Sans:wght@500;800&family=Roboto:wght@100;400&family=Sue+Ellen+Francisco&family=Work+Sans:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <section id="header">
        <!-- Header content from store.php -->
        <a href="#"><img src="https://i.postimg.cc/x8ncvFjr/logo.png"></a>
        <div>
            <ul id="navbar">
            <!-- Welcome message or user details -->
            <?php if(isset($user_data['name'])): ?>
                <p>Welcome, <?php echo $user_data['name']; ?></p>
            <?php endif; ?>
                <!-- Your navigation links -->
                <li><a href="store.php" >Home</a></li>
                <li><a href="contact.php" class="active">About Us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>

        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact">
        <br><br><br><br><br><br><br><h1 style = "text-align: center ">Contact Us</h1>
        <!-- Your contact form goes here -->
        <p style="font-family: 'Arial', sans-serif; text-align: justify; margin: 0 auto; max-width: 800px;">
    This clothing site, envisioned as our final year project by Elijah DSouza and Tejas Waindayskar, aims to simplify the online clothing shopping experience by consolidating all essential features onto a single, user-friendly page. Our primary objective is to streamline the process of purchasing clothes online, ensuring convenience and ease of navigation for our users. Leveraging HTML, CSS, JavaScript, and MySQL programming languages, we've meticulously crafted this platform to offer a seamless browsing and shopping experience. Moving forward, we are committed to further enhancing and expanding this project, continuously striving to innovate and meet the evolving needs of our users.
</p>
    </section>

   
</body>
</html>
