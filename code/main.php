<?php

require_once 'tri_selection.php';
require_once 'read_tab.php';


$tableau = [64, 34, 25, 12, 22, 11, 90];


echo "Avant le tri (par valeur) :\\n";
read_tab($tableau);

$sorted_tableau = tri_selection($tableau);


echo "Après le tri (par valeur) :\\n";
read_tab($sorted_tableau);


echo "Avant le tri (par référence) :\\n";
read_tab($tableau);

tri_selection_reference($tableau);


echo "Après le tri (par référence) :\\n";
read_tab($tableau);

?>
