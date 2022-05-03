<html>
<?php
    if (htmlspecialchars($_POST['language']) == "lv") {
        $language = "lv";
    } elseif (htmlspecialchars($_POST['language']) == "ru") {
        $language = "ru";
    } elseif (htmlspecialchars($_POST['language']) == "en"){
        $language = "en";
    } else {
        $language = "Null";
    }
    if(htmlspecialchars($_POST['theme']) == "dark"){
        $theme = "dark";
    } elseif (htmlspecialchars($_POST['theme']) == "light"){
        $theme = "light";
    } else {
        $theme = "Null"; }
    if ($language != "Null" && $theme != "Null") {
	setcookie("language", $language, time() + (86400 * 30), "/" ); # 86400 = 1 day
    setcookie("theme", $theme, time() + (86400 * 30), "/");
        echo "<script>\nwindow.location.href = './home.php';\n</script>";
    }
    
?>
<head>
</head>
<body>
<?php
    if (htmlspecialchars($_POST['language']) == "lv") {
        echo "Language set to Latvian";
    } elseif (htmlspecialchars($_POST['language']) == "ru") {
        echo "Language set to Russian";
    } elseif (htmlspecialchars($_POST['language']) == "en") {
        echo "Language set to English";
    } else {
        echo "Incorect language set";
    }
    echo $language;
?>

</body>
</html>
