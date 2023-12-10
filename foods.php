<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Set character set and viewport for better rendering -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <!-- Include the external style sheet -->
   <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <!-- Header section -->
    <header class="header">
        <!-- Logo and navigation links -->
        <a href="home.html" class="logo">STRESS BUSTER</a>
        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="tracker.php">TRACKER</a>
            <a href="foods.php">FOODS</a>
            <a href="training.php">TRAINING</a>
            <a href="about.php">ABOUT</a>
            <a href="php/logout.php">LOG OUT</a>
        </nav>
    </header>

   <!-- Header text section -->
   <div class="headertxt">
        <h1>Be Healthy for Life!</h1>
   </div>

   <!-- Footer text section -->
   <div class="footertxt">
        <h1>High Protein Foods</h1>
   </div>
</body>

<!-- Styling section -->
<style>
    /* Header styling */
    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 15%;
        padding: 20px 100px;
        background: #fffadd;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
    }

    /* Body styling */
    body {
        min-height: 100vh;
        background: url('photos/foods1.jpg') no-repeat;
        background-size: 100% 65%;
        background-position: center;
        background-position-y: 70%;
        background-color: #fffadd;
    }

    /* Header text styling */
    .headertxt {
        width: 100%;
        position: absolute;
        top: 20%;
        transform: translateY(-50%);
        text-align: center;
        color: black;
    }

    /* Footer text styling */
    .footertxt {
        width: 100%;
        position: absolute;
        bottom: 1%;
        transform: translateY(-50%);
        text-align: center;
        color: black;
    }
</style>
</html>