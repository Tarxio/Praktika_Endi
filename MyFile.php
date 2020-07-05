<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Готовый WEB-сайт </title>
</head>
<body>

    <?php require "blocks/header.php" ?>

    <div class="sidebar">
        <a href="index.php">Основная таблица</a>
        <a href="download.php">Отправить файл</a>
        <a class="active" href="MyFile.php">Мои файлы</a>
        <a href="LoadingFile.php">Полученные файлы</a>
    </div>





    <?php require "blocks/footer.php" ?>


</body>
</html>