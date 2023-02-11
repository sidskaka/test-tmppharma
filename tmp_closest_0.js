/** 
 * 
 * FONCTION POUR RETOURNER LA TEMPERATURE LA PLUS PROCHE DE 0
 * 
 **/

function tmpplusprochede0(ts) {
   let closest = ts.length !== 0 ? ts[0] : 0;
   for (let i = 1; i < ts.length; i++) {
      if (Math.abs(ts[i]) < Math.abs(closest) || (Math.abs(ts[i]) === Math.abs(closest) && ts[i] > 0)) {
         closest = ts[i];
      }
   }
   return closest;
}

console.log(tmpplusprochede0([10, 13, 8, 4, 7.2, 12, 3.7, 3.5, 9.6, 6.5, 1.7, 6.2, 7]));