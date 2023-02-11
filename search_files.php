<?php

/** 
 * 
 * TROU DE MEMOIRE
 * 
 **/

function locateUniverseFormula()
{
   $dir = "/tmp/documents"; // Initialiser la racine de notre système de fichiers
   $file_name = "universe-formula"; // Fichier à rechercher
   $files = array(); // Initialiser un tableau qui va contenir les différents chemins absolus des répertoires que nous allons parcourrir

   if (is_dir($dir)) { // Vérifier si $dir est un répertoire
      if ($handle = opendir($dir)) { // Tentative d'ouverture du répertoire
         while (($entry = readdir($handle)) !== false) { // Lecture des contenus du répertoire
            if ($entry != "." && $entry != "..") { // Ignorer les fichiers cachés
               if (strcmp($entry, $file_name) != 0 && is_dir($dir . '/' . $entry)) { // Dans le cas ou le fichier recherché n'est pas trouvé et que le fichier trouvé est un répertoire
                  $files = array_merge($files, locateUniverseFormula($dir . '/' . $entry, $file_name)); // Mis à jour de notre chemin de répertoires
               } else if (strcmp($entry, $file_name) == 0) { // Dans le cas ou le fichier recherché est trouvé
                  $files[] = $dir . '/' . $entry; // Récupération du chemin absolu menant au fichier en question
               }
            }
         }
         closedir($handle); // Ferméture de notre flux
      }
   }
   return $files;
}
// Quelques lignes de test
$files = locateUniverseFormula();
if (!empty($files)) {
   foreach ($files as $file) {
      echo "trouvé!! ";
      echo $file . "\n";
   }
} else {
   echo "NULL";
}
