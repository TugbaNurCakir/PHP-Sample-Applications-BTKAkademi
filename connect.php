<?php
session_start();
try{
    $db = new mysqli("localhost", "root", "root", "MyDatabase");
    //echo "Connected to database.<br />";
}catch(Exception $e){
    echo $e->errorMessage().$e->getMessage();
}
if(isset($_SESSION["user"])){
    $Control = $db->query("SELECT * FROM members WHERE username='".$_SESSION['user']."'"); 
    $record_number = $Control->num_rows;
    if($record_number>0){   
        while($member_records = $Control->fetch_assoc()){
       $member_username = $member_records["username"] ;
        }
    }    
    else{
        $member_username= "";
    }

}/*else{  
    echo "Couln't find user with this infos.<br />";
    echo "<a href='index.php'>Click for turn homepage.</a>";
}

*/
$timer = time();



?>