<?php
try{
    $db = new mysqli("localhost", "root", "root", "MyDatabase");
    //echo "Connected to database.<br />";
}catch(Exception $e){
    echo $e->errorMessage().$e->getMessage();
}









?>