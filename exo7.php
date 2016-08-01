<?php
function majeur($genre , $age){
  if($genre == 'homme' && $age >= 18){
    return 'Vous etes un homme et vous etes majeur';
  }
  elseif($genre == 'homme' && $age < 18){
    return 'Vous etes un homme et vous etes mineur';
  }
  elseif ($genre == 'femme' && $age >= 18) {
    return 'Vous etes une femme et vous etes majeur';
  }
  else{
    return 'Vous etes une femme et vous etes mineur';
  }
}
  echo majeur('femme' , 18);
 ?>
