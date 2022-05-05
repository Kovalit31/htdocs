<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
                if ($_COOKIE["language"]=="ru") {
                    echo "<h1>Установка прошла успешно!</h1>Если изображается не правильно, то посмотрите<a href=\"./guides/install-apache-eng.html\">здесь</a><br>Не то язык? <a href=\"./reset.html\">Поменять</a><br>";
                }
                elseif ($_COOKIE["language"] == "lv") {
                        echo "<h1></h1>Ja izskatas nepareizi, skatities <a href=\"./guides/install-apache-eng.html\"> šeit</a><br> Nepareiza valoda? <a href=\"./reset.html\"> Izmainīt </a> <br>";
                } 
                elseif ($_COOKIE["language"] == "en"){
                    echo "Not your language? <a href=\"./reset.html\">Select out!</a><br>";
                }
                else {
                    echo "Cannot Load SITE";
                }
        ?>
        <br />No content? Set it up! <a href="./guides/install-apache-eng.html">here</a>
    </body> 
<html>