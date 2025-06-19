<?php
$personne = [
      'nom' => 'Mateos',
      'prenom' => 'Alexandre',
      'age' => 29
];

$personne['age'] = 26;
$personne['ville'] = 'Paris';

echo "Nom : " . $personne['nom'] . "<br>";
echo "Prenom : ".$personne['prenom'] . "<br>";
echo "Age : ".$personne['age']."<br>";
echo "Ville : ".$personne['ville']."<br>";
?>