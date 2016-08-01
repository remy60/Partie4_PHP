<?php
function concat($nom , $prenom , $age){
  return 'Bonjour'.' '. $nom .' '. $prenom .' '. ',tu as'.' '. $age .' '. 'ans.';
}
echo concat('Dumoulin' , 'Rémy' , 22);
 ?>
