<?php
session_start();
$LanguageCh = $_GET["LangChoose"];

$_SESSION["SiteLanguage"]=$LanguageCh;
header("Location: index.php");
exit();




?>