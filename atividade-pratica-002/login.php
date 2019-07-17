<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css" type="text/css">

</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
         
            <form action="valida-login.php" method="post"> 
                <input type="text" id="email"  class="fadeIn second" name="email" placeholder="E-mail">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="Senha">
                <input type="submit" class="fadeIn fourth" value="Login" name="login">
            </form>

         
            <div id="formFooter">
                <a class="underlineHover" href="menu.php">Voltar ao menu</a>
            </div>

        </div>
    </div>
</body>

</html>