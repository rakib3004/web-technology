<?php

$initial_atom_number=12000;
$action_time=5000;
$epsilon=2.7172;
$decay_constant=0.002455;

$final_atom_number = $initial_atom_number*(pow($epsilon,(-1*$decay_constant*$action_time)));

echo("Final Atom Number is: ".$final_atom_number."</br>");

?>