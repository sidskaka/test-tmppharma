/** 
 * 
 * FONCTION POUR RETOURNER LA TEMPERATURE LA PLUS PROCHE DE 0
 * 
 **/

function tmpplusprochede0(temperatures) {
   let closest = temperatures.length !== 0 ? temperatures[0] : 0;
   for (let i = 1; i < temperatures.length; i++) {
      if (Math.abs(temperatures[i]) < Math.abs(closest) || (Math.abs(temperatures[i]) === Math.abs(closest) && temperatures[i] > 0)) {
         closest = temperatures[i];
      }
   }
   return closest;
}

console.log(tmpplusprochede0([]));