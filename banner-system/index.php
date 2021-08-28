<?php
try{
    $db = new mysqli("localhost", "root", "root", "MyDatabase");
    //echo "Connected to database.<br />";
}catch(Exception $e){
    echo $e->errorMessage().$e->getMessage();
}
?>
<html>
<head>
</head>
<body>
<?php
    $que = $db->query("SELECT * FROM banners ORDER BY impressions ASC LIMIT 1");
    $number_record = $que->num_rows;
    if($number_record>0){
        $ad_record = $que->fetch_row();
    }
    else{
        echo "Could not find any record.";
    }

?>
    <table style="align:center; border:1px">
        <tr height="150px">
            <td><img src="<?php echo $ad_record[1];?>"></td>
        </tr>



    </table>
    <?php
$ClickUpdate = $db->query("UPDATE banners SET impressions = impressions+1 WHERE id=$ad_record[0]");

?>  
</body>

</html>