<?php

function getShirts(PDO $db): array {

    $query = $db->prepare("SELECT `team`, `year`, `kit_type`, `image` FROM `football-jerseys`;");
    $query->execute();

    return $query->fetchAll();
}
function displayAllShirts($shirts) {
    $result = "";
    foreach ($shirts as $shirt) {
        $result .= displayShirt($shirt);
    }
    return $result;
}

function displayShirt($shirt) {
    $result = '<div class="jersey"><img src="' . $shirt['image'] . '" alt="football-shirt"/>';
    $result .= '<h1>' . $shirt['team'] . "</h1><p>" . $shirt['kit_type'] . "</p>" . $shirt['year'] . '</div>';
    return $result;
}