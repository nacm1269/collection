<?php

require_once 'db-connection.php';
require_once 'functions.php';
$db = getDb();
$shirts = getShirts($db);
$shirtsToDisplay = displayAllShirts($shirts);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>GOAT Kits</title>
    <link rel="stylesheet" href="normalize.css" type="text/css">
    <link type="text/css" rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>


    <header>
        <h1>GOAT Kits</h1>
        <h2>a completely biased collection of the greatest football kits to ever grace a pitch</h2>
    </header>


    <main>
        <?php
        echo $shirtsToDisplay;
        ?>
    </main>

    <footer>
        <p class="copyright-text">© Copyright Nathan Muran 2021</p>
    </footer>


</body>

</html>