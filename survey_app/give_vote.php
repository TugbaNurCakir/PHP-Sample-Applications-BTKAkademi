<?php
require_once("connect.php");

$ComingAnswer = $_POST["answer"];
$Que_Control  = $db->query("SELECT * FROM voters WHERE IP_address=$IPAddress AND dating >= $turnBackTime");
$number_control = $Que_Control->num_rows;
if($number_control>0){
    echo "you have already voted.<br />";
    echo "<a href='index.php'>Click to turn homepage.<a/>";
}else{
    if($ComingAnswer==1){
        $updating = $db->query("UPDATE survey SET number_of_vote1 = number_of_vote1 + 1, total_number_votes=total_number_votes+1");
    }else if($ComingAnswer==2){
        $updating = $db->query("UPDATE survey SET number_of_vote2 = number_of_vote2 + 1, total_number_votes=total_number_votes+1");
    }else if($ComingAnswer==3){
        $updating = $db->query("UPDATE survey SET number_of_vote3 = number_of_vote3 + 1, total_number_votes=total_number_votes+1");
    }else{
        echo "Error.<br />";
        echo "<a href='index.php'>Click to turn homepage.<a/>";
        die();
    }
    
}

$add = $db->query("INSERT INTO voters (IP_address, dating) values ($IPAddress, $Timee)");
$add_control = $add->num_rows;
if($add_control>0){
    echo "Thank you for vote and your answer has been saved.";
}else{
    echo "the process could not run.<br />";
    echo "<a href='index.php'>Click to turn homepage.<a/>";
}


?>