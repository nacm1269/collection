<?php


/** display all shirts - iterates through the $shirts array
 * @param $shirts
 * @return string
 */
function displayAllShirts(array $shirts)
{
    $result = "";
    foreach ($shirts as $shirt) {
        $result .= displayShirt($shirt);
    }
    return $result;
}


/** splits out each shirt to its individual content
 * @param $shirt
 * @return string
 */
function displayShirt($shirt)
{
    $result = '<div class="jersey"><img src="' . $shirt['image'] . '" alt="football-shirt"/>';
    $result .= '<h1>' . $shirt['team'] . "</h1><p>" . $shirt['kit_type'] . "</p>" . $shirt['year'] . '</div>';
    return $result;
}