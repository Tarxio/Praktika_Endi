<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php

require "registr/connection.php";






        if (isset($_POST["submit"])) {
            $title = $_POST["title"];
            $filename = rand(1000, 10000) . "-" . $_FILES["file"]["name"];
            $tname = $_FILES["file"]["tmp_name"];
            $uploads_dir = 'public/media/';
            move_uploaded_file($tname, $uploads_dir . '/' . $filename);
            $conn = mysqli_connect('localhost:8889', 'root', 'root', 'userlistdb');

            $recipient = $_POST["filename"];
            $sql = "INSERT into files(title, media, sender, recipient) VALUES('$title','$filename','$row','$recipient')";
            if (mysqli_query($conn, $sql)) {

                echo '<script language="javascript">';
                echo 'alert("файл успешно отправлен")';
                echo '</script>';
                /* Перенаправление браузера */
                header("Location: http://localhost:8888/Praktika_Endi/download.php");
            } else {
                echo '<script language="javascript">';
                echo 'alert("ошибка при загрузке")';
                echo '</script>';
            }
        }








