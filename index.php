<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Готовый WEB-сайт </title>
    <style>
        table {
            width: 100%; /* Ширина таблицы */
            background: white; /* Цвет фона таблицы */
            color: white; /* Цвет текста */
            border-spacing: 1px; /* Расстояние между ячейками */
        }
        td, th {
            background: maroon; /* Цвет фона ячеек */
            padding: 5px; /* Поля вокруг текста */
        }
    </style>
</head>
<body>

    <?php require "blocks/header.php" ?>


<!--   Перенос всех файлов, отвечающих за авт+рег в тест агарио, создание-->

    <div class="sidebar">
        <a class="active" href="#">Основная таблицв</a>
        <a href="#">Отправить файл</a>
        <a href="#">Мои файлы</a>
        <a href="#">Полученные файлы</a>
    </div>


    <div class="content">
    <table border="1">
        <tr>
            <th>Ячейка 1</th>
            <th>Ячейка 2</th>
        </tr>
        <tr>
            <td>Ячейка 3</td>
            <td>Ячейка 4</td>
        </tr>
    </table>
    </div>

    <?php require "blocks/footer.php" ?>

</body>
</html>