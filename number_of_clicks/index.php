<?php
require_once("connect.php");

?>
<html>
    <head>

    </head>
    <body>
        <table style="border: 1px; align: center; width: 1000px">
            <tr style="height: 30px; background-color: yellow">
                <td><b>Number of Clicks App</b></td>
                <td><b><a href="index.php"style ="text-decoration: none; color: red">Homepage</a></b></td>
            </tr>
            <tr style="height: 30px">    
                <td style="height: 30px">Title Of Article</td>
                <td style="height: 30px">Impressions</td>
            </tr>
            </tr>
            <?php

                $que = $db->query("SELECT * FROM articles");
                if($que){
                    $num_of_que=$que->num_rows;
                    if($num_of_que>0){
                        while($records = $que->fetch_assoc()){
                           ?> <tr style="height: 30px">    
                           <td style="height: 30px"><a style= "text-decoration: none" href="show.php?id=<?php echo $records["id"]?>"><?php echo $records["title_of_article"]?></a></td>
                           <td style="height: 30px"><?php echo $records["impressions"]?></td>
                       </tr
                       ><?php
                        }
                    }
                }

            ?>
           
        
        </table>
    </body>
</html>
<?php
$ClickUpdate = $db->query("UPDATE articles SET impressions = impressions+1 WHERE id=$ComingID ");
$db->close();
?>