<?php
function DireBonjour($nom , $prenom)
{
  return 'Bonjour ' . $prenom . $nom .'Comment allez vous?';
}
echo DireBonjour('Rémy', 'Dumoulin');

?>
