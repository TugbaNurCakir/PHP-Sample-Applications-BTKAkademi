<?php
try{
    $db = new mysqli("localhost","root","root","MyDatabase");
}catch(Exception $e){
    echo $e->errorMessage().$e->getMessage();
    die();
}
function filtering($Value){
    $Process1 = trim($Value);
    $Process2 = strip_tags($Process1);
    $Process3 = htmlspecialchars($Process2, ENT_QUOTES);
    return $Process3;
}


?>