<?php

/** retrieve selected data from db
 * @param PDO $db
 * @return array
 */
function getShirts(PDO $db): array
{
    $query = $db->prepare("SELECT `team`, `year`, `kit_type`, `image` FROM `football-jerseys`;");
    $query->execute();

    return $query->fetchAll();
}


/** display all shirts - iterates through the $shirts array
 * @param $shirts
 * @return string
 */
function displayAllShirts(array $shirts): string
{
    $result = "";
    foreach ($shirts as $shirt) {
        $result .= displayShirt($shirt);
    }
    return $result;
}


/** splits out each shirt into individual content
 * @param $shirt
 * @return string
 */
function displayShirt(array $shirt): string
{
    $result = '<div class="jersey"><img src="' . $shirt['image'] . '" alt="football-shirt"/>';
    $result .= '<h1>' . $shirt['team'] . "</h1><p>" . $shirt['kit_type'] . "</p>" . $shirt['year'] . '</div>';
    return $result;
}