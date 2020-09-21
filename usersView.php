­<?php

echo '<table class="table"><tr><th scope="col">FirstName</th><th scope="col">LastName</th></tr>';
foreach ($users as $user ) {
   echo' <tr><td>'.
  $user->get_first_name(). '</td><td>'.
  $user->get_last_name() . '</td><td>'.
  '<button type="button" class="btn btn-danger">Supprimer</button></td> </tr>';
  
}

echo'</table>';
?>