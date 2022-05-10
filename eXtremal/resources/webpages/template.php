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
                    if($_COOKIE["language"] == "en"){
                        echo "";
                    } elseif($_COOKIE["language"] == "ru") {
                        echo "";
                    } elseif($_COOKIE["language"] == "lv") {
                        echo "";
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
            </table>
    </body>
<html>