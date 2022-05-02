<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            if(!isset($_COOKIE["language"])) {
                echo "Cannot Load SITE";
            } else {
                if ($_COOKIE["language"]=="Russian") {
                    echo "<h1>Установка прошла успешно!</h1>Если изображается не правильно, то посмотрите<a href=\"./guides/install-apache.html\">здесь</a><br>Не то язык? <a href=\"../../index.html\"> Изменить </a>";
                }
                else {
                    if ($_COOKIE["language"] == "Latvian") {
                        echo "Ja izskatas nepareizi, skatities
                        <a href=\"./guides/install-apache.html\"> šeit</a><br>
                        Nepareiza valoda? <a href=\"../../index.html\"> Izmainīt </a>";
                    }
                }
            }
        ?>
    </body> 
<html>