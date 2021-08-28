<html>
    <head>

    </head>

    <body>
    <form action="result.php" method="post">
    <?php

try{
    $db = new mysqli("localhost", "root", "root", "MyDatabase");
    // echo "Connected to database.<br />";
}catch(Exception $e){
    echo $e->errorMessage().$e->getMessage();
}
$que = $db->query("SELECT * FROM Persons");
if($que){
    $numberOfRecord = $que->num_rows;
    if($numberOfRecord>0){
        while($records = $que->fetch_assoc()){
           
            echo $records["name"].$records["surname"]."<input type='checkbox' name='selected[]' value=" .$records["id"]." <br><br>";
        }      
    }
	else{
		echo "There isn't any record.";
	}
}else{
    echo "query error.";
}
echo "<br />";
$db->close();

?>

    <input type="submit" name="submit" value="Delete choosen items">
    </form>
    </body>
</html>
