<html>
    <head>
        <link rel="stylesheet" href="/eXtremal/resources/style/for_all.css">
        <?php 
            if($_COOKIE["theme"] == "dark") {
                echo "<link rel=\"stylesheet\" href=\"/eXtremal/resources/style/dark.css\">";
            } else { 
                if($_COOKIE["theme"] == "light") {
                    echo "<link rel=\"stylesheet\" href=\"/eXtremal/resources/style/light.css\">";
                }
            }
        ?>
        <meta charset="utf-8">
        <title>Simple Blog - Home Page</title>
    </head>
    <body>
        <table id="container-content" border="1">
            <tr class="hat">
                <td colspan = "3" id="hat">
                <?php 
                    # Hat
                    echo "<h1>Simple Blog</h1>";
                    if($_COOKIE["language"] == "en"){
                        echo "<p align=\"right\"><a href=\"/eXtremal/resources/webpages/site/register.php\" id=\"user-login\">Register</a> <a href=\"/eXtremal/resources/webpages/site/login.php\" id=\"user-login\">Login</a></p>";
                    } elseif($_COOKIE["language"] == "ru") {
                        echo "<p align=\"right\"><a href=\"/eXtremal/resources/webpages/site/register.php\" id=\"user-login\">Register</a> <a href=\"/eXtremal/resources/webpages/site/login.php\" id=\"user-login\">Login</a></p>";
                    } elseif($_COOKIE["language"] == "lv") {
                        echo "<p align=\"right\"><a href=\"/eXtremal/resources/webpages/site/register.php\" id=\"user-login\">Register</a> <a href=\"/eXtremal/resources/webpages/site/login.php\" id=\"user-login\">Login</a></p>";
                    } else {
                        echo "Go to <a href=\"/eXtremal/resources/index.php\">setter</a>";
                    }
                ?>
                </td>
            </tr>
            <tr class="content">
                <!--<td id="content-left">p</td>-->
                <td id="content-center">
                <?php 
                    # Content center
                    if($_COOKIE["language"] == "en"){
                        echo "Not your language? <a href=\"./reset.php\">Select out!</a><br>";
                    } elseif($_COOKIE["language"] == "ru") {
                        echo "<h1>Установка прошла успешно!</h1>Если изображается не правильно, то посмотрите<a href=\"./guides/install-apache.php\">здесь</a><br>Не то язык? <a href=\"./reset.php\">Поменять</a><br>";
                    } elseif($_COOKIE["language"] == "lv") {
                        echo "<h1></h1>Ja izskatas nepareizi, skatities <a href=\"./guides/install-apache.php\"> šeit</a><br> Nepareiza valoda? <a href=\"./reset.php\"> Izmainīt </a> <br>";
                    } else {
                        echo "Go to <a href=\"/eXtremal/resources/index.php\">setter</a>";
                    }
                ?></td>
                <td id="content-right">
                <?php 
                    # Content right
                    if($_COOKIE["language"] == "en"){
                        echo "";
                    } elseif($_COOKIE["language"] == "ru") {
                        echo "";
                    } elseif($_COOKIE["language"] == "lv") {
                        echo "";
                    } else {
                        echo "Go to <a href=\"/eXtremal/resources/index.php\">setter</a>";
                    }
                ?>
                </td>
            </tr>
            <tr class="footer">
                <td colspan="3" id="footer">
                <?php 
                    # Footer
                    echo "<p><br />No content? Set it up! <a href=\"./guides/install-apache-eng.html\">here</a><br>If found bugs, write <a href=\"mailto:nonecone20@gmail.com\">here</a><br><a href=\"http://github.com/Kovalit31\" target=\"_blank\">My github</a><a href=\"http://github.com/Kovalit31/htdocs\"></p><img alt=\"Source Code\" title=\"Source\" align=\"right\" src=\"/eXtremal/resources/images/github-mark/";
                if($_COOKIE["theme"] == "dark") {
                    echo "dark";
                } else {
                    if($_COOKIE["theme"] == "light") {
                        echo "light";
                    }
                }
                echo "-32px.png\"></a>";
                ?>
                </td>
            </tr>
            </table>
    </body>
<html>