<?php
try{
    $db = new mysqli("localhost", "root", "root", "MyDatabase");
    // echo "Connected to database.<br />";
}catch(Exception $e){
    echo $e->errorMessage().$e->getMessage();
}

$SelectedValues = $_POST["selected"];

foreach($SelectedValues as $willBeDeleted){
    $delete_query= $db->query("DELETE FROM Persons WHERE id=$willBeDeleted LIMIT 1");
}
header("Location: index.php");
exit();

$db->close($db);

?>