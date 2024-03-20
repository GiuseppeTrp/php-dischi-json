<?php
// Includi il file JSON e decodifica il contenuto
$albums = json_decode(file_get_contents("../php-dischi-json/dischi.json"));

// Imposta l'header per indicare che il contenuto è JSON
header("Content-Type: application/json");

// Stampa il contenuto del file JSON come JSON
echo json_encode($albums);
?>
