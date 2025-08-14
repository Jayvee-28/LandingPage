<?php
   
    $companyName = "jayveeqxzs.";
    $pageTitle = "Jayvee S. Latonio";
    $tagline = "MY BASIC LANDING PAGE";
    $description = "Hi, I am Latonio Jayvee S. from the Philippines. I am a 3rd year student at the University of Cebu Lapu-lapu Mandaue, taking up Bachelor of Science in Information Technology. This is my basic landing page project for our Web Programming class.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <div class="logo"><?php echo $companyName; ?></div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="#" class="signup-btn">Sign Up</a></li>
        </ul>
    </nav>

    <div class="hero">
        <h1><?php echo $pageTitle; ?></h1>
        <h2><?php echo $tagline; ?></h2>
        <p><?php echo $description; ?></p>

        <div class="buttons">
            <a href="#">More Details</a>
        </div>
    </div>

</body>
</html>
