<?php

/** 
 * 
 * TROU DE MEMOIRE
 * 
 **/

function locateUniverseFormula()
{
   $dir = "/Applications/MAMP/htdocs/test-recrutement-tempopharma/test";
   $file_name = "universe-formula";
   $files = array();

   if (is_dir($dir)) {
      if ($handle = opendir($dir)) {
         while (($entry = readdir($handle)) !== false) {
            if ($entry != "." && $entry != "..") {

               if (strcmp($entry, $file_name) != 0 && is_dir($dir . '/' . $entry)) {
                  $files = array_merge($files, locateUniverseFormula($dir . '/' . $entry, $file_name));
               } else if (strcmp($entry, $file_name) == 0) {
                  $files[] = $dir . '/' . $entry;
               }
            }
         }
         closedir($handle);
      }
   }
   return $files;
}
$files = locateUniverseFormula();
if (!empty($files)) {
   foreach ($files as $file) {
      echo "trouvé!! ";
      echo $file . "\n";
   }
} else {
   echo "NULL";
}
