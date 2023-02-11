/** 
 * 
 * QUELQUES LIGNES POUR EXPLIQUER L'ALGORITHME
 * 
 **/

/**
 * L'algorithme ci-dessous permet de transformer une chaine de caractères renseignée
 * en paramètre d'entré, ainsi qu'un séparateur, en un tableau distinct de données.
 * En effet, si la valeur de la variable str entrée n'est pas un tableau, il va retourner 
 * un tableau contenant des données sans doublon.
 **/

function fais_je(str, separ) {
   if (separ && !Array.isArray(str)) { // Vérifier si le séparateur est bien renseigné et aussi si la valeur dans str n'est pas un tableau
      var arr = str.split(separ); // division de la chaine entrée en une liste de sous chaines en utilisant comme séparateur la valeur entrée dans separ et placement de ces sous-chaines dans le tableau arr
      return Array.from(new Set(arr)); // retourner le tableau arr avec des données distincts autrement des données sans doublon
   } else {
      return false;
   }
}

console.log(fais_je("si-dsp-ardi-se", "-"));