<?php
$notes = [
      'maths' => 14,
      'français' => 12,
      'histoire' => 15
];

foreach($notes as $index=>$value){
      echo "La note en " . $index . " est " . $value . "<br>";
}

?>