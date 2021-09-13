<?php
session_start();

require_once("connect.php");
if(isset($_SESSION["user"])){ //kullanıcı giriş yapmış ve başka bir sayfada kayıt olma formu açılmaması için.
    header("Location: index.php");
    exit();
}else{


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

            <form action="new_member_result.php" method="POST">
                <table width="250px">
                    <tr>
                        <td  colspan="3"height="30" bgcolor="red"style="color: white;">New Membership Area</td>
                    </tr>
                    <tr>
                        <td height="30">Username: </td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td height="30">Name and Surname </td>
                        <td><input type="text" name="name_surname"></td>
                    </tr>
                    <tr>
                        <td height="30">Email: </td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td height="30">Password: </td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td height="30"></td>
                        <td><input align="right" type="submit" name="submit" value="Register"></td>
                    </tr>
                    <tr>
                        <td height="30"> </td>
                        <td><a href="index.php" style="text-decoration: none;">Already a membership.</a></td>
                    </tr>
            
                </table>
                <?php } ?>
                </form>
               
            </td>
        </tr>
        <tr>
            <td colspan="3" height="100" bgcolor="blue" color="white">FOOTER</td>
        </tr>
    </table>

</body>
</html>
