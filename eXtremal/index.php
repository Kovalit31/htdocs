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
        <title>Simple Blog - Select Page</title>
    </head>
    <body>
        <table id="container-content" border="1">
            <tr class="hat">
                <td colspan = "3" id="hat">
                <?php 
                    # Hat
                    echo "<h1>Simple Blog</h1>";
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
            <tr class="content">
                <!--<td id="content-left">p</td>-->
                <td id="content-center">
                <?php 
                    # Content center
                    if($_COOKIE["language"] == "en"){
                        echo "<script type=\"text/javascript\">window.location.href=\"./resources/webpages/home.php\"</script>";
                    } elseif($_COOKIE["language"] == "ru") {
                        echo "<script type=\"text/javascript\">window.location.href=\"./resources/webpages/home.php\"</script>";
                    } elseif($_COOKIE["language"] == "lv") {
                        echo "<script type=\"text/javascript\">window.location.href=\"./resources/webpages/home.php\"</script>";
                    } else {
                        if(!isset($_COOKIE["language"]) || !isset($_COOKIE["theme"])){
                            echo "To continue, need do some things: <br/>";
                            echo "<form method=\"post\" action=\"./resources/webpages/setter.php\"> ";
                        if (!isset($_COOKIE["language"])){
                            echo "Select language: <br /> <div class=\"tabs\"> <input type=\"radio\" id=\"lv\" name=\"language\" value=\"lv\"> <label for=\"lv\">Latviešu</label> <input type=\"radio\" id=\"ru\" name=\"language\" value=\"ru\"> <label for=\"ru\">Русский</label> <input type=\"radio\" id=\"en\" name=\"language\" value=\"en\"> <label for=\"en\">English</label> </div> ";
                        };
                        if (!isset($_COOKIE["theme"])){
                            echo "Select Theme: <br /><select name=\"theme\"><option value=\"light\">Light</option> <option value=\"dark\">Dark</option></select><br/>";
                        };
                            echo "<input type=\"submit\" id=\"submit-button\">  <input type=\"reset\"> </form>";
                        }
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
                        echo "";
                    }
                ?>
                </td>
            </tr>
            <tr class="footer">
                <td colspan="3" id="footer">
                <?php 
                   echo "<br />No content? Set it up! <a href=\"./guides/install-apache-eng.html\">here</a><br>If found bugs, write <a href=\"mailto:nonecone20@gmail.com\">here</a><br><a href=\"http://github.com/Kovalit31\" target=\"_blank\">My github</a><a href=\"http://github.com/Kovalit31/htdocs\"><img alt=\"Source Code\" title=\"Source\" align=\"right\" src=\"/eXtremal/resources/images/github-mark/light-32px.png\"></a>";
                ?>
                </td>
            </tr>
            </table>
    </body>
<html>