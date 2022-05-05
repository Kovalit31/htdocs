<html>
<head>
<?php
    if (htmlspecialchars($_POST['fav_language']) == "Latvian") {
        $language = "Latvian";
    } elseif (htmlspecialchars($_POST['fav_language']) == "Russian") {
        $language = "Russian";
    } else {
        $language = "Null";
    }
    if ($language != "Null") {
        setcookie("language", $language, time() + (86400 * 30), "/" ); # 86400 = 1 day
        echo "<script>\nwindow.location.href = './home.php';\n</script>";
    }
    
?>
</head>
<body>
<?php
    if (htmlspecialchars($_POST['fav_language']) == "Latvian") {
        echo "Language set to Latvian";
    } elseif (htmlspecialchars($_POST['fav_language']) == "Russian") {
        echo "Language set to Russian";
    } else {
        echo "Incorect language set";
    }
    echo $language;
?>

</body>
</html>