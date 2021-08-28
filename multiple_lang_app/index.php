<?php
session_start();
if(empty($_SESSION["SiteLanguage"])){
    include("lang_tr.php");
}else{
    if($_SESSION["SiteLanguage"]=="TR"){
        include("lang_tr.php");
    }else{
        include("lang_en.php");
    }
}



?>
<!DOCTYPE html>
<head>
</head>
<body>
</body>
    <table align="center" width="1000px">
    <tr>
        <td><?php echo ANASAYFA;?></td>
        <td><?php echo BLOG; ?></td>
        <td><?php echo HAKKIMDA;?></td>
        <td><?php echo İLETİŞİM;?></td>
        <td><a style="text-decoration: none; color: blue;" href="choose.php?LangChoose=TR">TR | <a style="text-decoration: none; color: blue;" href="choose.php?LangChoose=EN">EN</a></td>
       </tr>
    </table>


</hmtl>
<?php
$db->close();
?>