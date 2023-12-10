<?php 
   // Start the session to manage user sessions
   session_start();

   // Include the configuration file
   include("php/config.php");

   // Check if the user is not valid (not logged in), redirect to the login page
   if(!isset($_SESSION['valid'])){
      header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>
<body>
    <!-- Navigation section -->
    <div class="nav">
        <div class="logo">
            <!-- Link to the home page -->
            <p><a href="home.php">Logo</a></p>
        </div>

        <div class="right-links">
            <?php 
            // Retrieve user information from the database
            $id = $_SESSION['id'];
            $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id");

            // Loop through the result to extract user details
            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }

            // Display a link to the edit profile page with the user's ID
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <!-- Logout button -->
            <a href="php/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>

    <!-- Header section -->
    <header class="header">
        <a href="home.html" class="logo">STRESS BUSTER</a>
        <nav class="navbar">
            <!-- Navigation links -->
            <a href="home.php">HOME</a>
            <a href="tracker.php">TRACKER</a>
            <a href="foods.php">FOODS</a>
            <a href="training.php">TRAINING</a>
            <a href="about.php">ABOUT</a>
            <a href="php/logout.php">LOG OUT</a>
        </nav>
    </header>

    <!-- Welcome section -->
    <div class="welcome">
        <h1>Welcome to Stress Busters</h1>
        <p>Fitness is about taking action and not being lazy.</p>
        <div class="button">
            <!-- Link to the sign-in page -->
            <a href="signin.html">Click Me</a>
        </div>
    </div>

    <!-- Styling section -->
    <style>
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

        body {
            min-height: 100vh;
            background: url('photos/fitness1.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            background-position-y: 10%;
            background-color: rgba(0,0,0, 0.4);
        }
    </style>
</body>
</html>
