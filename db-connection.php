<?php
/** function that connects to database */
function getDb() {
    $db = new PDO('mysql:host=db; dbname=nathans-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

