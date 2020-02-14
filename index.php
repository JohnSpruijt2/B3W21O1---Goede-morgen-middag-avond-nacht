<!--John Spruijt 2019-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B3W21O1</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
</head>
<body>
    
    <?php
        date_default_timezone_set("Europe/Amsterdam");
        $time = date("H:i:s");
    if (date("H") > 18) {
        $background = "evening";
        echo "<div id='".$background."'>";
        echo "<a> Goedeavond!<br>";
    }
    elseif (date("H") > 12) {
        $background = "afternoon";
        echo "<div id='".$background."'>";
        echo "<a> Goedemiddag!<br>";
    }
    elseif (date("H") > 6) {
        $background = "morning";
        echo "<div id='".$background."'>";
        echo "<a> Goedemorgen!<br>";
    }
    elseif (date("H") >-1) {
        $background = "night";
        echo "<div id='".$background."'>";
        echo "<a> Goedenacht!<br>";
    }
    echo $time."</a>";
    echo "</div>";

    ?>
</body>
</html>