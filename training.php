<?php 
   // Start the session to manage user sessions
   session_start();

   // Include the configuration file
   include("php/config.php");

   // Check if the user is not valid (not logged in), redirect to the index page
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set character set and viewport for better rendering -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include the external style sheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header section with logo and navigation links -->
    <header class="header">
        <a href="home.html" class="logo">STRESS BUSTER</a>
        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="tracker.php">TRACKER</a>
            <a href="foods.php">FOODS</a>
            <a href="training.php">TRAINING</a>
            <a href="about.php">ABOUT</a>
            <a href="signin.php">LOG OUT</a>
        </nav>
    </header>

    <!-- Yellow rectangle section -->
    <div class="rectangle"></div>

    <!-- Content section with a heading -->
    <div class="content">
        <h1>FITNESS CHALLENGE.</h1>
    </div>
    
    <!-- Image1 section with image, heading, and paragraph -->
    <div class="image1">
        <img src="photos/RUN.jpg" alt="" width="400" height="300">
        <h1>RUNNING!</h1>
        <p>Running is an excellent choice of exercise for weight loss<br> because it burns more calories than many alternatives.</p>
    </div>

    <!-- Image2 section with image, heading, and paragraph -->
    <div class="image2">
        <img src="photos/WORKOUT.jpg" alt="" width="400" height="300">
        <h1>GYM WORKOUT</h1>
        <p>It can actually help you lose weight and slim down.<br> Beyond the purely physical, lifting weights can improve your bone health and <br> increase your metabolism, just to name a couple of benefits.</p>
    </div>

    <!-- Button1 section with a button -->
    <div class="button1">
        <button type="button">View more</button>
    </div>

<style>
    /* Header styling */
    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 15%;
        padding: 20px 100px;
        background: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
    }

    /* Yellow rectangle styling */
    .rectangle {
        height: 200px;
        width: 100%;
        background: #ffcc70;
        place-items: center;
    }

    /* Content styling */
    .content h1 {
        width: 100%;
        position: absolute;
        top: 25%;
        transform: translateY(-70%);
        left: 25px;
        text-align: center;
        color: #2266ad;
        font-size: 350%;
    }

    /* Image1 styling */
    .image1 {
        overflow: hidden;
        margin-left: 260px;
    }

    .image1 h1 {
        position: absolute;
        top: 45%;
        left: 63%;
        text-align: center;
        color: #2266ad;
    }

    .image1 p {
        position: absolute;
        top: 55%;
        left: 55%;
        text-align: center;
    }

    /* Image2 styling */
    .image2 {
        overflow: hidden;
        margin-left: 660px;
    }

    .image2 h1 {
        position: absolute;
        top: 93%;
        right: 65%;
        text-align: center;
        color: #2266ad;
    }

    .image2 p {
        position: absolute;
        top: 100%;
        right: 55%;
        text-align: center;
    }

    /* Button1 styling */
    .button1 {
        color: black;
        border: 2px black;
        background-color: #ffcc70;
    }
</style>
</body>
</html>