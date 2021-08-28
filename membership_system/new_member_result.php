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
if(isset($_POST["name_surname"])){
    $Coming_namesurname = $_POST["name_surname"];
}else{
    $Coming_namesurname = "";
}
if(isset($_POST["email"])){
    $Coming_email = $_POST["email"];
}else{
    $Coming_email = ""; 
}


$Control = $db->query("SELECT * FROM members WHERE username='$Coming_username' OR pass_word='$Coming_email'");
$record_number = $Control->num_rows;
if($record_number>0){   
    echo  "pre-registered with this information";
}else{  
    $add_record= $db->query("INSERT INTO members (username, name_surname, email, reg_date, pass_word) 
    values('$Coming_username', '$Coming_namesurname', '$Coming_email', '$timer', '$Coming_password')
    ");
    $add_record_control = $add_record->num_rows;
    if($add_record_control>0){
        echo "You signed up.";
    }
    else{
        echo "you could not register.";
    }
}

?>