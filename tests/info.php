<?php

function VolumeCone($rayon, $hauteur){
    $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
    return $volume;
}

$volume = VolumeCone(3, 1);
echo 'le volume d\'un cone de rayon 3 et de hauteur 1 est de ' . $volume;
?>