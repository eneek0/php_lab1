<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
            $title = 'Задание для самостоятельной работы «Hello, World!»';
            $footer = 'Создать веб-страницу с динамическим контентом. Загрузить код в удаленный репозиторий. Залить на хостинг.';
            $logo = '<img alt="logo" src="logo.png">';
        ?>
    <header>
        <?php echo $logo; ?>
        <h1><?php echo $title; ?></h1>
    </header>
    <main>
        <p><?='Hello, world!'?></p>
    </main>
    <footer>
        <?php echo $footer; ?>
    </footer>
</body>
</html>