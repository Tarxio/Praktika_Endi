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
        <form action="send.php" method="post" enctype="multipart/form-data" class="form-control">
            <input type="text" name="title">
            <label>Имя файла</label>
            <input type="File" name="file">
            <input type="hidden" name="date" id="hiddenField" value="true" />
            <br><br>
            <label>Имя получателя</label>
            <label>
                    <?php
                    mysqli_connect('localhost:8889', 'root', 'root');
                    mysqli_select_db('userlistdb');

                    $sql = "SELECT  full_name FROM usertbl";
                    $result = mysqli_query($sql);

                    echo "<select name='full_name'><option></option>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row['full_name'] . "'>" . $row['full_name'] . "</option>";
                    }
                    echo "</select>";
                    ?>

            </label>
            <br>
            <input type="submit" name="submit" class="btn" value="Отправить">
        </form>
    </div>

    <?php require "blocks/footer.php" ?>

</body>
</html>
