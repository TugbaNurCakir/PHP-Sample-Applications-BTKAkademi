<?php
require_once("connect.php");
?>
<!DOCTYPE html>
<head></head>
<body>
<?php
    $que = $db->query("SELECT * FROM survey LIMIT 1");
    $number_of_survey = $que->num_rows;
    if($number_of_survey>0){
        while($survey = $que->fetch_row()){                        
        $number_of_vote1_opt = $survey[5];
        $number_of_vote2_opt = $survey[6];
        $number_of_vote3_opt = $survey[7];
        $total_number_votes_ = $survey[8];

        $calc_percent_option1 = ($number_of_vote1_opt/$total_number_votes_)*100;
        $calc_percent_option2 = ($number_of_vote2_opt/$total_number_votes_)*100;
        $calc_percent_option3 = ($number_of_vote3_opt/$total_number_votes_)*100;

        
        ?><table width="300px">
        <tr height="30px">
            <td colspan="2"><?php echo $survey[1]; ?></td>
        </tr>
        <tr height="30px">
            <td width="25px">%<?php echo $calc_percent_option1;?></td>
            <td width="275px"><?php echo $survey[2]; ?></td>
        </tr>
        <tr height="30px">
            <td width="25px">%<?php echo $calc_percent_option2;?></td>
            <td width="275px"><?php echo $survey[3]; ?></td>
        </tr>
        <tr height="30px">
            <td width="25px">%<?php echo $calc_percent_option3;?></td>
            <td width="275px"><?php echo $survey[4]; ?></td>
        </tr>
        <tr height="30px">
         <td colspan="2"><a href="index.php" style="color: red; text-decoration: none">Click to turn homepage.</a></td>
        </tr>
    </table>
   
      <?php  }
    }else{
        header("Location: index.php");
        exit();
    }
?>
</body>
</html>
<?php
$db->close();
?>