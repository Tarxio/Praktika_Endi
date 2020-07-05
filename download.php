<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Отправить файл </title>
</head>
<body>

    <?php require "blocks/header.php" ?>

    <div class="sidebar">
        <a href="index.php">Основная таблица</a>
        <a class="active" href="download.php">Отправить файл</a>
        <a href="MyFile.php">Мои файлы</a>
        <a href="LoadingFile.php">Полученные файлы</a>
    </div>



    <div class="content">
        <form method='post' action="file.php" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
            <input type='file' name='file[]' class='file-drop' id='file-drop' multiple required><br>
            <input type='submit' value='Загрузить' >
        </form>
        <div class='message-div message-div_hidden' id='message-div'></div>
    </div>

    <?php require "blocks/footer.php" ?>

</body>
</html>
