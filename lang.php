<? 
$lang = "ru";
if (($_GET["lang"] == "en") OR ($_GET["lang"] == "zh")) {
    $lang = $_GET["lang"];
}
setcookie("lang",$lang);
header('Location: /');
?>