<?php
$notes = [
      'maths' => 14,
      'français' => 12,
      'histoire' => 15
];

$bestLecture= '';
$bestGrades = 0;

foreach ($notes as $index => $values){
      if ($values > $bestGrades){
            $bestLecture = $index;
            $bestGrades = $values;
      }
}

echo "La meilleure note est en $bestLecture : $bestGrades";
?>