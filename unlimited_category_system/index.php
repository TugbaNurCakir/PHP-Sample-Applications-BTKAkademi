<?php
require_once("connect.php");
?>

<!DOCTYPE html>
<head>
</head>
<body>
    <?php
        function Categories($CtgTopID = 0, $spacing=0){
            global $db;

            $query_categories = $db->query("SELECT * FROM categories WHERE top_id=$CtgTopID ");
            $numberOfQuery = $query_categories->num_rows;
            if($numberOfQuery>0){
                while($records = $query_categories->fetch_assoc()){
                    $id = $records["id"];
                    $top_id = $records["top_id"];
                    $menu_name = $records["menu_name"];
                    
                    echo str_repeat("-", $spacing);
                    echo $id." | ". $top_id. " | ". $menu_name."<br />";
                    Categories($id, $spacing+5);
                }
            }
        }

        Categories(0);




    ?>
<?php
    $db->close();
?>
</body>
</html>