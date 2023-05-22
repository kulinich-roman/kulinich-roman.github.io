 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <?php
                $st = $_POST['name2'].";".$_POST['name1'].";".$_POST['email'].";".$_POST['password']."\n";

                $fp = fopen("baza.txt", "a");
                $test = fwrite($fp,$st);
                echo "<h1 align = 'center'>Ви ввели :".$_POST['name2'].";".$_POST['name1']."<br>Дякуємо за реєстрацію !</h1>";
                echo "<h2 align = 'center'> на Ваш E-mail : ".$_POST['email'].";".$_POST['password']."<br> відправлено повідомлення.</br>"; 
                ?>        
 </body>
 </html>