<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php');

  use RihnovecDev\Frontend\Assets;

  Assets::init();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disable cache</title>
  <script type="module" crossorigin src="./dist/<?= Assets::getAssetPath('index', 'js'); ?>"></script>
  <link rel="stylesheet" crossorigin href="./dist/<?= Assets::getAssetPath('index', 'css'); ?>">
</head>
<body>
  <div class="message">Текст сообщения</div>
</body>
</html>