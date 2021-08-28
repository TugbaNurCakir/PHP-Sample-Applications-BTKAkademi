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
        while($survey = $que->fetch_row()){?>                        
            
        <form action="give_vote.php" method="POST">
        <table width="300px">
        <tr height="30px">
            <td colspan="2"><?php echo $survey[1]; ?></td>
        </tr>
        <tr height="30px">
            <td width="25px"><input type="radio" name="answer" value="1"></td>
            <td width="275px"><?php echo $survey[2]; ?></td>
        </tr>
        <tr height="30px">
            <td width="25px"><input type="radio" name="answer" value="2"></td>
            <td width="275px"><?php echo $survey[3]; ?></td>
        </tr>
        <tr height="30px">
            <td width="25px"><input type="radio" name="answer" value="3"></td>
            <td width="275px"><?php echo $survey[4]; ?></td>
        </tr>
        <tr height="30px">
         <td colspan="2"><input type="submit" value="Submit vote"></td>
        </tr>
        <tr height="30px">
         <td colspan="2"><a href="results.php" style="color: red; text-decoration: none">Show results of survey</a></td>
        </tr>
    </table>
    </form>
      <?php  }
    }else{
        echo "Could not find any survey.";
        die();
    }
?>
</body>
</html>
<?php
$db->close();
?>