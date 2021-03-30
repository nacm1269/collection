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

</head>



<body>
<h1>GOAT Kits</h1>

<main>
                <?php
                echo $shirtsToDisplay;
                ?>
</main>




</body>

</html>