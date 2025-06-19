<?php
$menu = [
      'Google' => 'https://google.fr',
      'Amazon' => 'https://www.amazon.fr/',
      'Spotify' => 'https://open.spotify.com/intl-fr',
      'Youtube' => 'https://www.youtube.com/'
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
      <nav>
            <ul>
                  <?php foreach ($menu as $index => $link) : ?>
                        <li><a href="<?= $link ?>" target="_blank"> <?= $index ?></a></li>
                  <?php endforeach; ?>
            </ul>
      </nav>
</body>
</html>
