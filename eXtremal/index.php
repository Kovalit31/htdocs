<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <head>
        <link rel="stylesheet" href="./resources/style/for_all.css">
        <title>Start Page</title>
    </head>
    <body>
        <?php
    if(!isset($_COOKIE["language"]) || !isset($_COOKIE["theme"])){
        echo "<form method=\"post\" action=\"./resources/webpages/setter.php\"> ";
        if (!isset($_COOKIE["language"])){
            echo "Select language: <br /> <div class=\"tabs\"> <input type=\"radio\" id=\"lv\" name=\"language\" value=\"lv\"> <label for=\"lv\">Latviešu</label> <input type=\"radio\" id=\"ru\" name=\"language\" value=\"ru\"> <label for=\"ru\">Русский</label> <input type=\"radio\" id=\"en\" name=\"language\" value=\"en\"> <label for=\"en\">English</label> </div> ";
        };
        if (!isset($_COOKIE["theme"])){
            echo "Select Theme: <br /><select name=\"theme\"><option value=\"light\">Light</option> <option value=\"dark\">Dark</option></select><br/>";
        };
        echo "<input type=\"submit\" id=\"submit-button\"> </form>";
    } else {
        echo "<script type=\"text/javascript\">window.location.href=\"./resources/webpages/home.php\"</script>";
    };
?>
    <br> Not appear text? Check out <a href="/eXtremal/resources/webpages/guides/install-apache-eng.html">here</a> for more information
    </body>
</html>
