<?php
$couleurs = [
      'rouge' => '#FF1236',
      'bleu' => '#154695',
      'vert' => '#455623'
];
var_dump($couleurs);

$couleurs2 = [];

foreach ($couleurs as $index => $values){
      $couleurs2[$values] = $index;
}

var_dump($couleurs2);
?>