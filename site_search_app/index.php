<?php
require_once("connect.php");
?>
<!DOCTYPE html>
<head>
</head>
<body>
    <form action="search_result.php" method="POST">
    <table width="500px" align="center">
        <tr>
            <td><input type="text" name="word"  style="width: 100%; height: 50px; padding: 0 20px; margin-bottom: 20px;"></td>
        </tr>
        <tr>
            <td style="align:center;"><input type="submit" name="Search" value="Search" style="height:30px; padding: 0 100px; margin-left: 20px;"></td>
        </tr>


    </table>
    </form>
</body>
</html>
<?php
$db->close();
?>