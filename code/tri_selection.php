<?php

function triSelection(array &$t)
{
    $n = count($t);

    for ($i = 0; $i < $n - 1; $i++) {
        $min = $i;

        for ($j = $i + 1; $j < $n; $j++) {
            if ($t[$j] < $t[$min]) {
                $min = $j;
            }
        }

        if ($min != $i) {
            // Échanger les éléments
            $temp = $t[$i];
            $t[$i] = $t[$min];
            $t[$min] = $temp;
        }
    }
}

// Exemple d'utilisation
$tableau = [64, 34, 25, 12, 22, 11, 90];
triSelection($tableau);

// Affichage du tableau trié
echo "Tableau trié : " . implode(", ", $tableau) . "\n";

?>
