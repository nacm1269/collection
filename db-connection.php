<?php
/** function that connects to database */
function getDb() {
    $db = new PDO('mysql:host=db; dbname=nathans-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

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