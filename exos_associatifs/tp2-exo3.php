<?php
$personne = [
      'Nom' => 'Dupont',
      'Prénom' => 'Alice',
      'Âge' => 25,
      'Ville' => 'Paris'
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
<table>

      <?php foreach ($personne as $index => $value) : ?>
            <tr>
                  <td><?php echo $index ?></td>
                  <td><?php echo $value ?></td>
            </tr>
      <?php endforeach; ?>

</table>
</body>
</html>
