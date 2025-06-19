<?php
$dataHarryPotter = file_get_contents('https://hp-api.onrender.com/api/characters');
$arrayHarryPotter = json_decode($dataHarryPotter, true);

var_dump($arrayHarryPotter);
?>

<!doctype html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css">
    <link>
</head>
<body>
<div class="container">
    <div class="row">
          <?php foreach ($arrayHarryPotter as $item) : ?>
                <?php if (strlen($item['image']) > 0) : ?>
                  <div class="col-md-4 p-2">
                      <div class="card h-100" style="width: 18rem;">
                          <img src="<?= $item['image'] ?>" class="card-img-top img-thumbnail object-fit-cover h-75"
                               alt="photo d'un des personnages de harry potter">
                            <?php if(!$item['alive']) : ?>
                            <img src="/images/mort.png" class="position-absolute top-0 end-0 w-25">
                            <?php endif; ?>
                          <div class="card-body">
                              <h5 class="card-title"> <?= $item['name'] ?></h5>
                              <p class="card-text">Maison : <?= $item['house'] ?></p>
                              <p class="card-text">Date de naissance : <?= $item['dateOfBirth'] ?></p>
                          </div>
                      </div>
                  </div>
                <?php endif; ?>
          <?php endforeach; ?>
    </div>
</div>
</body>
</html>
