<?php

session_start();
require_once("connect.php");

if(isset($_POST["username"])){
    $Coming_username = $_POST["username"];
}else{
    $Coming_username = "";
}
if(isset($_POST["password"])){
    $Coming_password = $_POST["password"];
}else{
    $Coming_password = ""; 
}


$Control = $db->query("SELECT * FROM members WHERE username='$Coming_username' and pass_word='$Coming_password'");
$record_number = $Control->num_rows;
if($record_number>0){   
    $_SESSION["user"] = $Coming_username;
    header("Location: index.php");
}else{  
    echo "Couln't find user with this infos.<br />";
    echo "<a href='index.php'>Click for turn homepage.</a>";
}


?>