<?php

/** 
 * 
 * CREATEUR DE REQUETE
 * 
 **/

// Chemin vers le fichier JSON
$jsonFile = "data.json";

// Lire le fichier JSON en utilisant file_get_contents
$jsonData = file_get_contents($jsonFile);

// Décoder le contenu JSON en tableau PHP
$data = json_decode($jsonData, true);

// Parcourir les données JSON
foreach ($data as $key => $value) {
   echo $key . " : " . $value . "<br>";
}
