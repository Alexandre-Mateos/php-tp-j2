<?php
$produits = [
      ['nom' => 'Chaise', 'stock' => 5],
      ['nom' => 'Table', 'stock' => 0],
      ['nom' => 'Lampe', 'stock' => 3]
];
?>

<!doctype html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
</head>
<body>
<ul>
      <?php foreach ($produits as $item) : ?>
            <?php if($item['stock'] === 0 ) : ?>
                  <li> <?php echo $item['nom'] ?> : rupture de stock </li>
            <?php else: ?>
            <li> <?php echo $item['nom'] ?> : <?php echo $item['stock'] ?> </li>
            <?php endif; ?>
      <?php endforeach; ?>
</ul>
</body>
</html>
