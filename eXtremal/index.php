<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <head>
        <link rel="stylesheet" href="./resources/style/startpage/start_theme.css">
        <title>Start Page</title>
    </head>
    <body>
        <?php
    if(!isset($_COOKIE["language"]) || !isset($_COOKIE["theme"])){
        echo "<form method=\"post\" action=\"./resources/webpages/setter.php\"> Select language: <br /> <div class=\"tabs\"> <input type=\"radio\" id=\"lv\" name=\"language\" value=\"lv\"> <label for=\"lv\">Latviešu</label> <input type=\"radio\" id=\"ru\" name=\"language\" value=\"ru\"> <label for=\"ru\">Русский</label> <input type=\"radio\" id=\"en\" name=\"language\" value=\"en\"> <label for=\"en\">English</label> </div> <input type=\"submit\" id=\"submit-button\"> </form>";
        if (!isset($_COOKIE["language"])){
            echo "Select language: <br /> <div class=\"tabs\"> <input type=\"radio\" id=\"lv\" name=\"language\" value=\"lv\"> <label for=\"lv\">Latviešu</label> <input type=\"radio\" id=\"ru\" name=\"language\" value=\"ru\"> <label for=\"ru\">Русский</label> <input type=\"radio\" id=\"en\" name=\"language\" value=\"en\"> <label for=\"en\">English</label> </div> ";
        };
        if (!isset($_COOKIE["theme"])){
            echo "";
        };
    } else {
        if ($_COOKIE["language"] == "ru"){

        } elseif ($_COOKIE["language"] == "lv"){

        } elseif ($_COOKIE["language"] == "en"){

        } else {

        }
    };
?>
    </body>
</html>
