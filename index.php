<?php
// PHP variables
$name = "Jayvee S. Latonio";
$course = "3rd year BSIT Student in UCLM";
$title = "Landing Page";
$logo = "Jayvee";
$aboutLink = "#about";
$contactLink = "#contact";
$moreDetailsLink = "#details";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <div class="logo"><?php echo $logo; ?></div>
        <ul>
            <li><a href="<?php echo $aboutLink; ?>">About Me</a></li>
            <li><a href="<?php echo $contactLink; ?>">Contacts</a></li>
        </ul>
    </nav>

    <div class="hero">
        <h1><?php echo $title; ?></h1>
        <h2><?php echo $name; ?></h2>
        <p>Hi my name is <?php echo $name; ?>, <?php echo $course; ?>.</p>

        <div class="buttons">
            <a href="<?php echo $moreDetailsLink; ?>">More Details</a>
        </div>
    </div>

</body>
</html>
