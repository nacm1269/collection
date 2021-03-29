<?php

$db = new PDO('mysql:host=db; dbname=nathans-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `team`, `year`, `kit_type`, `image` FROM `football-jerseys`;");
$query->execute();

$result = $query->fetchAll();

var_dump($result);

