<!DOCTYPE html>
<head>
    <style>
        *{
        box-sizing: border-box;
        }
        body{
            align: center;
        }
        #form{
            
        }
        #table{
            border: 1px solid #ccc;
            height: 600px;
            width: 500px;
            border-radius: 4px;
        }
        #input{
            width: 100%;
            padding: 12px 20px; 
            margin: 8px 0;
            align: center;
        }
        #table-data{
            width: 200px;
            height: 30px;
            display: block;
        }   
        #table-row{
            
        }
    </style>
</head>
<body>

    <form action="result.php" method="post" id="form">
        <table id="table">
            <tr>
             <td id="table-data">Name and surname:</td>
             <td id="table-data"><input type="text" name="name_surname" id="input"></td>
            </tr>
            <tr>
             <td id="table-data">Phone Number:</td>
             <td id="table-data"><input type="tel" name="number" id="input"></td>
            </tr>
            <tr>
             <td id="table-data">Email Address:</td>
             <td id="table-data"><input type="email" name="email" required id="input"></td>
            </tr>
            <tr>
             <td id="table-data">Topic of Mail:</td>
             <td id="table-data"><input type="text" name="topic" id="input"></td>
            </tr>
            <tr>
             <td id="table-data">Your message</td>
             <td id="table-data"><textarea id="input" name="messageText" required></textarea></td>
            </tr>
            <tr>
             <td id="table-data">&nbsp</td>
             <td id="table-data"><input type="submit" value="Submit"></td>
            </tr>
            
            

        </table>

    </form>

</body>

<?php
//Bu iletişim formu mail gönderen bir arayüzdür.
//PHPMailer kullanılır.
//Bunun içinde yazılmış bir sınıf var.

?>

</html>