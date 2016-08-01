<?php
function nombre($param , $param1){
  if($param > $param1){
    return 'Le premier nombre est plus grand';
  }
  elseif($param < $param1){
    return 'Le premier nombre est plus petit';
  }
  else{
    return 'Les deux nombres sont identiques';
  }
}
echo nombre(17 , 25);
?>
