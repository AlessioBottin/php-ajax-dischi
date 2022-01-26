<?php
require __DIR__ . '/database.php';

$genre = $_GET['genre'];

if ($genre === 'All' || empty($genre)) {
    $jsonDisks = json_encode($database);
    echo $jsonDisks;
} else {
    $filteredDisks = [];
    foreach($database as $disk) {
        if ($disk['genre'] === $genre) {
            $filteredDisks[] = $disk;
        }   
    }
    $jsonFilteredDisks = json_encode($filteredDisks);
    echo $jsonFilteredDisks;
}

header('Content-Type: application/json');

?>