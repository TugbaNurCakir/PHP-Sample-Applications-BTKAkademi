<?php
require_once("connect.php");
?>
<!DOCTYPE html>
<head>
</head>
<body>
    <form action="search_result.php" method="POST">
    <table width="500" align="center">
        <tr>
            <td><input type="text" name="word"  style="width: 100%; height: 50px; padding: 0 20px; margin-bottom: 20px;"></td>
        </tr>
        <tr>
            <td style="align:center;"><input type="submit" name="Search" value="Search" style="height:30px; padding: 0 100px;"></td>
        </tr>


    </table>
    </form>
    <?php
    $ComingWord = $_POST["word"];
    $que = $db->query("SELECT * FROM things WHERE namee LIKE '%$ComingWord%'");
    $num_que= $que->num_rows;
    if($num_que>0){
        echo "matches: <br />";
        while($records=$que->fetch_assoc()){
            echo $records["namee"]."<br />";
        }
    }else{
        echo "no related words found";
    }

    ?>

</body>
</html>
<?php
$db->close();
?>