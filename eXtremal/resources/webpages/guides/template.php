<html>
    <head>
        <link rel="stylesheet" href="/eXtremal/resources/style/for_all.css">
        <?php 
            if($_COOKIE["theme"] == "dark") {
                echo "<link rel=\"stylesheet\" href=\"/eXtremal/resources/style/dark.css\">";
            } elseif($_COOKIE["theme"] == "light") {
                echo "<link rel=\"stylesheet\" href=\"/eXtremal/resources/style/light.css\">";
            } else {
                echo "<script> window.location.href=\"/index.html\" </script>";
            }
        ?>
        <meta charset="utf-8">
        <title>Simple Blog - Installing Apache & PHP</title>
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
                        echo "";
                    } elseif($_COOKIE["language"] == "ru") {
                        echo "";
                    } elseif($_COOKIE["language"] == "lv") {
                        echo "";
                    } else {
                        echo "Go to <a href=\"/eXtremal/resources/index.php\">setter</a>";
                    }
                    echo "<code>
                    Define PHPPATH = \"path/to/php\"<br>
                    LoadModule fcgid_module modules/mod_fcgid.so<br>
                    &lt;IfModule fcgid_module&gt;<br>
                    <br>
                    <br>
                    FcgidMaxProcesses 300<br>
                    FcgidMaxProcessesPerClass 300<br>
                    <br>
                    FcgidOutputBufferSize 65536<br>
                    FcgidConnectTimeout 10<br>
                    FcgidProcessLifeTime 0<br>
                    FcgidMaxRequestsPerProcess 0<br>
                    FcgidMinProcessesPerClass 0<br>
                    FcgidFixPathinfo 0<br>
                    FcgidProcessLifeTime 0<br>
                    FcgidZombieScanInterval 20<br>
                    FcgidMaxRequestLen 536870912<br>
                    FcgidIOTimeout 120<br>
                    FcgidTimeScore 3<br>
                    <br>
                    FcgidPassHeader Authorization<br>
                    <br>
                    FcgidInitialEnv PHPRC \"\${PHPPATH}\"<br>
                    FcgidInitialEnv PATH \"\${PHPPATH}\";C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;\"<br>
                    FcgidInitialEnv SystemRoot \"C:\\Windows\"<br>
                    FcgidInitialEnv SystemDrive \"C:\"<br>
                    FcgidInitialEnv TEMP \"C:\\WINDOWS\\TEMP\"<br>
                    FcgidInitialEnv TMP \"C:\\WINDOWS\\TEMP\"<br>
                    FcgidInitialEnv windir \"C:\\WINDOWS\"<br>
                    &lt;Files ~ \"\.php$\"&gt;<br>
                    Options Indexes FollowSymLinks ExecCGI<br>
                    AddHandler fcgid-script .php<br>
                    FcgidWrapper \"${PHPPATH}\\php-cgi.exe\" .php<br>
                    &lt;/Files&gt;<br>
                    &lt;/IfModule&gt;<br>
                </code>";
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