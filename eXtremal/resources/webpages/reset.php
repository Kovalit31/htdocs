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
        <title>Simple Blog - Reset Page</title>
    </head>
    <body>
        <table id="container-content" border="1">
            <tr class="hat">
                <td colspan = "3" id="hat">
                <?php 
                    # Hat
                    echo "<h1>Simple Blog</h1>";
                ?>
                </td>
            </tr>
            <tr class="content">
                <!--<td id="content-left">p</td>-->
                <td id="content-center">
                <?php 
                    # Content center
                    echo "<form method=\"post\" action=\"/eXtremal/resources/webpages/setter.php\">";
                    if($_COOKIE["language"] == "en"){
                        echo "Reselect language:";
                    } elseif($_COOKIE["language"] == "ru") {
                        echo "Перевыбрать язык:";
                    } elseif($_COOKIE["language"] == "lv") {
                        echo "Izmantot citu tekstu:";
                    } else {
                        echo "Reselect language:";
                    }
                    echo "<br /> <div class=\"tabs\"> <input type=\"radio\" id=\"lv\" name=\"language\" value=\"lv\"> <label for=\"lv\">Latviešu</label> <input type=\"radio\" id=\"ru\" name=\"language\" value=\"ru\"> <label for=\"ru\">Русский</label> <input type=\"radio\" id=\"en\" name=\"language\" value=\"en\"> <label for=\"en\">English</label> </div>";
                    if($_COOKIE["language"] == "en"){
                        echo "Reselect Theme:";
                    } elseif($_COOKIE["language"] == "ru") {
                        echo "Перевыбрать тему:";
                    } elseif($_COOKIE["language"] == "lv") {
                        echo "Izmantot citu tēmu:";
                    } else {
                        echo "Reselect theme:";
                    }
                    echo "<br /><select name=\"theme\"><option value=\"light\">Light</option> <option value=\"dark\">Dark</option></select><br/>
                    <input type=\"submit\" id=\"submit-button\">  <input type=\"reset\"> </form>";
                ?>
                </td>
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
                        echo "";
                    }
                ?>
                </td>
            </tr>
            <tr class="footer">
                <td colspan="3" id="footer">
                <?php 
                    # Footer
                    echo "<br />No content? Set it up! <a href=\"./guides/install-apache-eng.html\">here</a><br>If found bugs, write <a href=\"mailto:nonecone20@gmail.com\">here</a><br><a href=\"http://github.com/Kovalit31\" target=\"_blank\">My github</a><a href=\"http://github.com/Kovalit31/htdocs\"><img alt=\"Source Code\" title=\"Source\" align=\"right\" src=\"/eXtremal/resources/images/github-mark/";
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