<?php
require_once("connect.php");


if(isset($_REQUEST["Paging"])){
    $ComingPaging = $_REQUEST["Paging"];
}else{
    $ComingPaging = 1;
}
$right_left_button_number = 2;
$number_record_for_every_page = 5;
$record_query = $db->query("SELECT * FROM products");
$number_of_record = $record_query->num_rows;
//echo $number_of_record;
$paging_start = ($ComingPaging*$number_record_for_every_page)-$number_record_for_every_page;

$page_count = ceil($number_of_record/$number_record_for_every_page);


?>
<!DOCTYPE html>
<head>

</head>
<body>
    <table align="center" width="500"> 
    <?php
        $que= $db->query("SELECT * FROM products ORDER BY id ASC LIMIT $paging_start, $number_record_for_every_page");
        $num_record = $que->num_rows;
        if($num_record>0){
            while($records = $que->fetch_assoc()){
                echo "<tr height='30px'>";    
                echo "<td widtt='25px' align='left'>".$records["id"]."</td>";
                echo "<td widtt='350px' align='left'>".$records["product_name"]."</td>";
                echo "<td widtt='50px' align='right'>"." ".$records["product_price"]." ".$records["currency"]."</td>";
                echo "</tr>";
            }
        }else{
            echo "Could not find a record.";
            die();
        }

    ?>
    </table>    
        <div class="paging_area">
            <div class="paging_textarea">
                Total <?php echo $page_count;?> page; have got  <?php echo $number_of_record; ?> records.
            </div>

            <div class="numbering_pagingArea">
                <?php
                    if($ComingPaging>1){
                        echo "<span class='passive'><a href='index.php?Paging=1'><<</a></span>";
                        $undo_paging = $ComingPaging-1;           //sayfalamayı bir geri al demek. 
                        echo " <span class='passive'><a href='index.php?Paging=" .$undo_paging. " '> <</a></span>";
                    }
                    for($index_for_paging = $ComingPaging- $right_left_button_number; $index_for_paging<=$ComingPaging+$right_left_button_number; 
                    $index_for_paging++){
                        if(($index_for_paging>0) and ($index_for_paging<=$page_count)){
                                //cho $index_for_paging." "; // bu koşul 0 -1 ve sayfa sayısından büyük olan değerlerin yazmaması içindir.
                            if($index_for_paging==$ComingPaging){
                                echo " ".$index_for_paging;
                            }else{
                                echo " <a href='index.php?Paging=".$index_for_paging."'>".$index_for_paging."</a>";
                            }
                            
                        }
                    }




                    if($ComingPaging!= $page_count){
                        $forward_paging = $ComingPaging+1;  
                        echo "<span class='passive'><a href='index.php?Paging=".$forward_paging."'>></a></span>";
                                //sayfalamayı bir ileri al demek. 
                        echo " <span class='passive'><a href='index.php?Paging=" .$page_count. " '> >></a></span>";
                    }






                ?>
                
            </div>

        </div>
</body>
</html>
<?php
$db->close();
?>