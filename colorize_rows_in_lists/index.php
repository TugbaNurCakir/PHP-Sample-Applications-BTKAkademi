<?php
require_once("connect.php");
?>
<!DOCTYPE html>
<head></head>
<body>
    <table width=1000 align="center">
        <tr align="left" >
            <td style="color: white; background-color:black;">Poduct Name</td>
            <td style="color: white; background-color:black;" >Product Price</td>
        </tr>
        <?php
        $que = $db->query("SELECT * FROM products");
        $number_que=$que->num_rows;
        if($number_que>0){
            while($records = $que->fetch_assoc()){
               $firstColor  = "#DFDFDF";
               $secondColor = "#FFFFFF";
               $number_color=0;
               if($number_color%2){
                $bgcolor = $firstColor;
                echo "çift";
               }else{
                $bgcolor = $secondColor;
                echo "tek";
               } ?>

                <tr align="left" bgcolor="<?php echo $bgcolor;?>" onMouseOver="this.bgColor='#c2cedb';" onMouseOut="this.bgColor='#FFFFFF';" style="cursor:pointer;">
                    <td><?php echo $records["product_name"];?></td>
                    <td><?php echo $records["product_price"];?></td>
                </tr>
                <?php
                    $number_color++;
            }   
        }else{
            echo "couldn't find a record.";
            die();
        }


        ?>
       

    </table>
</body>
</html>