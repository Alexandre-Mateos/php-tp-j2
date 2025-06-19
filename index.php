<?php

$arrayUsers = [
      [
            'firstName' => 'Jules',
            'favoriteColor' => 'Bleu',
            'fanKamelott' => true
      ],
      [
            'firstName' => 'Antoine',
            'favoriteColor' => 'Noir',
            'fanKamelott' => true
      ],
      [
            'firstName' => 'Benjamin',
            'favoriteColor' => 'Vert',
            'fanKamelott' => false
      ],

]

?>
<!doctype html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <style>
          .alignement{
              display: flex;
              flex-direction: row;
          }
            .card-custom{
                padding: 20px;
                border: 1px solid red;
                margin: 10px;
                max-width: 200px;
            }
      </style>
</head>
<body>

<!--Première possibilité pour insérer du html avec php, mais pas recommandé, car très moche-->
<div class="alignement">
<?php
foreach ($arrayUsers as $user) {
echo "<div class='card-custom'>";
      echo "<p>Je m'appel <strong>" . $user['firstName'] . "</strong></p>";
      echo "<p>Je m'appel <strong>" . $user['favoriteColor'] . "</strong></p>";
      echo "</div>";
}
?>
</div>


<!--Deuxième possibilités pour insérer du html avec php, meilleure manière de procéder car
plus propre, plus lisible,et plus simple à utiliser avec des boucles plus complexes-->
<div class="alignement">
<?php foreach ($arrayUsers as $user) : ?>
      <div class='card-custom'>
            <p>Je m'appel <strong><?php echo $user['firstName'] ?></strong></p>
            <p>Je m'appel <strong><?php echo $user['favoriteColor'] ?></strong></p>
      </div>
<?php endforeach; ?>
</div>


<!--Par exemple, en combianiason avec une condition pour vérifier si ils sont fan
de kamelott ou pas-->
<div class="alignement">
<?php foreach ($arrayUsers as $user) : ?>
      <div class='card-custom'>
            <?php if ($user['fanKamelott']) : ?>
            <p> <?= $user['firstName'] ?> est fan de Kamelott</p>
            <?php elseif (!$user['fanKamelott']) : ?>
                  <p> <?= $user['firstName'] ?> n'est pas fan de Kamelott</p>
            <?php endif; ?>
      </div>
<?php endforeach; ?>
<div>

</body>
</html>
