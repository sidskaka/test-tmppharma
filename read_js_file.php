<?php

/** 
 * 
 * CREATEUR DE REQUETE
 * 
 **/

// Chemin vers les fichiers JSON
$jsonFile_1 = "exemple-1.json";
$jsonFile_2 = "exemple-2.json";

// Lecture des fichiers JSON
$jsonData_1 = file_get_contents($jsonFile_1);
$jsonData_2 = file_get_contents($jsonFile_2);

// Décoder le contenu JSON en des tableaux PHP
$data_1 = json_decode($jsonData_1, true);
$data_2 = json_decode($jsonData_2, true);

// Parcours des données JSON du fichier exemple-1.json
foreach ($data_1["rules"] as $key_0 => $value_0) {
   echo "( ";
   foreach ($value_0["rules"] as $key_1 => $value_1) {
      echo $value_1["id"] . " " . $value_1["operator"] . " " . $value_1["value"];
      if ($key_1 != (count($value_0["rules"]) - 1)) {
         echo " " . $value_0["condition"] . " ";
      }
   }
   echo " )";
   if ($key_0 != (count($data_1["rules"]) - 1)) {
      echo " " . $data_1["condition"] . " ";
   }
}
echo "<br /><br />";
// Parcours des données JSON du fichier exemple-2.json
foreach ($data_2["rules"] as $key => $value) {
   echo $value["id"] . " " . $value["operator"] . " " . $value["value"];
   if ($key != (count($data_2["rules"]) - 1)) {
      echo " " . $data_2["condition"] . " ";
   }
}
