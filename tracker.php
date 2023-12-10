<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tracker Calculator</title>
   <link rel="stylesheet" href="tracker.css">
   <style>
      /* Your CSS styles here */
   </style>
</head>
<body>

<header class="header">
            <a href="home.html"class="logo">STRESS BUSTER</a>
        <nav class="navbar">
            <a href = "home.php">HOME</a>
            <a href = "tracker.php">TRACKER</a>
            <a href = "foods.php">FOODS</a>
            <a href = "training.php">TRAINING</a>
            <a href = "about.php">ABOUT</a>
            <a href = "php/logout.php">LOG OUT</a>
    </nav>

   <div class="rectangle"></div>

   <div class="content">
      <h1>Learn How Many Calories Your Burn Everyday</h1>
      <p>A measure of how many calories you burn per day.</p>
   </div>

   <div class="tracker">
      <label for="age">Age (years):</label>
      <input type="number" id="age" required>
      <br>
      <label for="weight">Weight (kg):</label>
      <input type="number" id="weight" required>
      <br>
      <label for="height">Height (cm):</label>
      <input type="number" id="height" required>
      <br>
      <label for="gender">Gender:</label>
      <input type="text" id="gender" required>
      <br>
      <label for="activity">Activity (week):</label>
      <input type="number" id="activity" required>
      <br>
      <button class="btn" onclick="calculateCalories()">Calculate!</button>
      <p id="caloriesResult"></p>
      <p id="cuttingResult"></p>
<p id="bulkingResult"></p>
   </div>

   <div class="content2">
      <h2>How Calories are Calculated</h2>
      <p>Your Calories represent a refined calculation of the calories you naturally burn throughout the day,
         with the consideration of exercise. <br>This estimation begins by determining your Basal Metabolic Rate and subsequently
         multiplying it by an activity multiplier.</p>
   </div>

   <div class="rectangle2"></div>

   <!-- FOOTER -->
   <section id="footer">
      <div class="container footer-row">
         <div class="footer-left-col">
            <div class="footer-links">
               <div class="link-title">
                  <h4>Goals</h4>
                  <br>
                  <small>Bulking</small>
                  <br>
                  <small>Cutting</small>
               </div>
            </div>
         </div>
         <div class="footer-right-col">
            <div class="footer-links">
               <div class="link-title">
                  <h4>About us</h4>
                  <br>
                  <small>Request Demo</small>
                  <br>
                  <small>FAQs</small>
               </div>
            </div>
         </div>
         <div class="footer-middle">
            <div class="footer-links">
               <div class="link-title">
                  <h4>Support</h4>
                  <br>
                  <small>Contact us</small>
                  <br>
                  <small>Features</small>
               </div>
            </div>
         </div>
         <div class="footer-last">
            <div class="footer-links">
               <div class="link-title">
                  <h4>Explore</h4>
                  <br>
                  <small>Solution</small>
                  <br>
                  <small>Find coaches</small>
               </div>
            </div>
         </div>
         <div class="content3">
            <h5>@2023 by stressbusters. Powered and secured by codecrunchers.</h5>
         </div>
      </div>
   </section>

   <script src="track.js"></script>
</header>

</body>
</html>