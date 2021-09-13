<?php
session_start();

require_once("connect.php");
//echo $_SESSION["user"];
?>
<!DOCTYPE html>
<head>
</head>
<body>
    <table width="1000px" height="600px" >
        <tr>
            <td colspan="3" height="100" bgcolor="blue" color="white">HEADER</td>
        </tr>
        <tr>
            <td width="250" bgcolor="#CCCCCC">Homepage</td>
            <td width="250" bgcolor="#CCCCCC">Main</td>
            <td width="250" valign="top">





                <?php 
                if(isset($_SESSION["user"])){
                    ?>  
                          <table width="250px">
                    <tr>
                        <td height="30" bgcolor="red"style="color: white;">Membership Area</td>
                    </tr>
                    <tr>
                        <td height="30">Merhaba <?php echo $member_username;?> </td>
                       
                    </tr>
                    <tr>
                        <td height="30"> </td>
                        <td><a href="exit.php" style="text-decoration: none;">Exit</a></td>
                    </tr>
            
                </table>
               
                
           
            <?php

            }else{?>
            <form action="login_member.php" method="POST">
                <table width="250px">
                    <tr>
                        <td  colspan="3"height="30" bgcolor="red"style="color: white;">Membership Area</td>
                    </tr>
                    <tr>
                        <td height="30">Username: </td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td height="30">Password: </td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td height="30"></td>
                        <td><input align="right" type="submit" name="submit" value="Login"></td>
                    </tr>
                    <tr>
                        <td height="30"> </td>
                        <td><a href="new_member.php" style="text-decoration: none;">Click for new membership.</a></td>
                    </tr>
            
                </table>
                </form>
                <?php
            }
            ?> 
            </td>
        </tr>
        <tr>
            <td colspan="3" height="100" bgcolor="blue" color="white">FOOTER</td>
        </tr>
    </table>

</body>
</html>
