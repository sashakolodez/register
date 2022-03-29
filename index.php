<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><div class="form">
    <h1 class="reg">Регистрация</h1>    
    <form action="index.php" method="post">
        <input type="text" placeholder="введите имя" name="username" id="name">
        <br> <input type="password" placeholder="введите пароль" name="userpass" id="pass">
       <br> <input type="email" placeholder="введите почту" name="useremail" id="email">
       <br> <input type="submit" value="зарегистрироватся" id="button">
    </form></div></center>
    <?php 
    $name = $_POST['username'];
    $pass = $_POST['userpass'];
    $email = $_POST['useremail'];
    if($name == 1)
    echo "вы ввели не коректное имя";
    else if(strlen($name) == 2)
    echo "вы ввели не коректное имя";
   else if(strlen($name) == 3)
   echo "вы ввели не коректное имя";
    else if(strlen($pass) == 1)
    echo "не надёжный пароль";
    else if(strlen($pass) == 2)
    echo "не надёжный пароль";
    else if(strlen($pass) == 3)
    echo "не надёжный пароль";
    else if(strlen($pass) == 4)
    echo "не надёжный пароль";
    else if(strlen($pass) == 5)
    echo "не надёжный пароль";
    else if($name !== "" || $pass !== ""){
        $userpass = md5($pass);
        $mysql = new mysqli ("localhost","mysql","", "reg");
        $mysql->query("SET NAMES 'utf8'");
$mysql->query("INSERT INTO `register`(`name`,`pass`, `email`) VALUES('$name', '$userpass','$email')");
        $mysql->close();
//echo "<script>window.location.href='glav.php'</script>";
//exit;
    }
    ?>

</body>
</html>