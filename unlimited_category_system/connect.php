<?php
try{
    $db = new mysqli("localhost","root","root","MyDatabase");
}catch(Exception $e){
    echo $e->errorMessage().$e->getMessage();
}

?>